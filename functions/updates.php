<?php


//tests if the bot works
//returns an array with the telegram response
function getMe()
{
    return curlRequest('getMe');
}


function getMeApi($api)
{
    return curlRequestApi($api, 'getMe');
}


function getUpdates($offset, $limit = null, $timeout = null, $allowed_updates = null)
{
    if (isset($offset)) {
        $args['offset'] = $offset;
    }
    if (isset($limit)) {
        $args['limit'] = $limit;
    }
    if (isset($timeout)) {
        $args['timeout'] = $timeout;
    }
    if (isset($allowed_updates)) {
        $args['allowed_updates'] = $allowed_updates;
    }

    if (isset($args)) {
        return curlRequest('getUpdates', $args);
    }
    return curlRequest('getUpdates');
}


function setWebhook($api, $url, $certificate = null, $max_connections = null, $allowed_updates = null)
{
    $args = [
        'url' => $url,
    ];
    if (isset($max_connections)) {
        $args['max_connections'] = $max_connections;
    }
    if (isset($allowed_updates)) {
        $args['allowed_updates'] = $allowed_updates;
    }
    if (isset($certificate)) {
        $file_name = realpath($certificate);
        $certificate = curl_file_create($file_name);
        $args['certificate'] = $certificate;
    }

    return curlRequestApi($api, 'setWebhook', $args);
}


function deleteWebhook()
{
    return curlRequest('deleteWebhook');
}


//WebHook URL, may be empty if WebHook is not set up
function getWebhookInfo($verbose = false)
{
    $result = curlRequest('getWebhookInfo');

    if ($verbose === true) {
        if ($result['ok']) {
            $bot = $result['result']['url'];
            echo 'URL: ' . htmlspecialchars($bot);
            return $result;
        } else {
            echo 'API TOKEN wrong or impossible to connect to Telegram';
        }
    }

    return $result;
}


function getWebhookInfoApi($api)
{
    return curlRequestApi($api, 'getWebhookInfo');
}
