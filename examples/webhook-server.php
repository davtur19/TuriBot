<?php

// if you move the example in the root of your project, you must change the path of the require_once below
require_once __DIR__ . "/../vendor/autoload.php";

use Amp\Future;
use TuriBot\Client;
use TuriBot\InputFile;
use function Amp\async;

// http-server
use Amp\Socket;
use Amp\CompositeException;
use Amp\Http\Server\RequestHandler\ClosureRequestHandler;
use Amp\Http\Server\DefaultErrorHandler;
use Amp\Http\Server\Request;
use Amp\Http\Server\Response;
use Amp\Http\Server\SocketHttpServer;
use Amp\Http\Status;
use Psr\Log\NullLogger;
use function Amp\trapSignal;


if (!(new Composer\InstalledVersions())->isInstalled("amphp/http-server")) {
    exit("You must install amphp/http-server to use this example" . PHP_EOL . "Run: composer require amphp/http-server ^v3.0" . PHP_EOL);
}


$client = new Client("5591575872:AAEqzjSAIOcGj_UzWMM8lZHJ1Mw5WgZ9cmk", false);
//$update = $client->getUpdate();


function handleUpdate($client, $update): void
{
    if (isset($update->message) or isset($update->edited_message)) {
        $chat_id = $client->easy->chat_id;
        $message_id = $client->easy->message_id;
        $text = $client->easy->text;

        if ($text === "/start") {
            $client->sendMessage($chat_id, "ping");
            $client->sendMessage($chat_id, "pong");
            $client->forwardMessage($chat_id, $chat_id, null, null, $message_id);
            // you need to put your own .png file in the same directory as this file
            $client->sendPhoto($chat_id, new InputFile("TuriPixel.png"), "File upload");
        }

        if ($text === "/var") {
            $client->debug($chat_id, $client->easy->message_id, ["key" => "value"], "pong", 3.14);
        }
    }
}

/*
// Start processing updates using async
$future = async(handleUpdate(...), $client, $update);
// Wait for the async part to finish before ending execution
$future->await();
*/

$server = new SocketHttpServer(new NullLogger, enableCompression: false);
try {
    $server->expose(new Socket\InternetAddress("0.0.0.0", 8080));
} catch (Socket\SocketException $e) {
    echo "Error initialing ip address: $e" . PHP_EOL;
}

try {
    $server->start(new ClosureRequestHandler(function (Request $request) use ($client): Response
    {
        $update = $client->getUpdate($request->getBody()->buffer());
        if (!isset($update)) {
            echo "Invalid update" . PHP_EOL;
        }

        try {
            $future = async(handleUpdate(...), $client, $update);
            $future->await();
        } catch (Throwable $e) {
            echo "Error in handleUpdate: $e" . PHP_EOL;
        }

        return new Response(status: Status::OK, body: 'ok');
    }), new DefaultErrorHandler());
} catch (CompositeException|\Throwable $e) {
    echo "Error http server: $e" . PHP_EOL;
}

$signal = trapSignal([\SIGINT, \SIGTERM]);
$server->stop();