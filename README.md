# TuriBot

# Take a look to oop branch (WIP)
https://github.com/davtur19/TuriBot/tree/oop

# Intro

TuriBot is a simple way to communicate with Telegram APIs in PHP

Documentation is only in Italian at the moment

# Guida
## Setup
1. Caricare i file su un webserver o usare `git clone https://github.com/davtur19/TuriBot.git NomeCartella`

1. Aprire setup.php e seguire la procedura per settare il webhook, oppure settare il webhook manualmente a SITO/commands.php?api=TOKEN

1. Editare config.php e settare come descritto dai commenti.

1. Editare commands.php e fare il proprio bot.

## CronJob

Per usare i cronjob basterà creare un file a parte e inculudere base_functions.php per avere tutte le funzioni base.

## Attenzione⚠️
Il bot genera automaticamente le variabili ricevute dal update, è consigliato leggere attentamente la documentazione e usare bot_debug.php per capire come funziona (è da sostituire in commands.php, da `require_once(bot.php);` a `require_once(bot_debug.php);`)

Nel file `bot_debug.php` sostituire `1111` con il proprio id in questa riga `define("MYID", "1111");` , altrimenti sarà solo molto lento ⚠️

Siccome il bot genera le variabili in base al contenuto del update ricevuto, una eventuale variabile mancante genererà errori se non gestita correttamente siccome essa sarà NULL
(Es: $text non esisterà se il bot riceverà una foto)

Il json payload è di default disabilitato perchè potrebbe dare problemi con determinate configurazione di rete o del server, in caso si voglia usare leggere attentamente quanto riportato qui sotto (anche un occhiata alle api Telegram di come funziona il json payload non farebbe male)

Il bot per essere più veloce usa json payload, per questo per alcune funzioni se si vuole ottenere la risposta da Telegram bisognerà specificare un parametro in più. Ciò viene fatto solo sulla prima funzione che viene eseguita dal update ricevuto ma solo con quelle che supportano il json payload, quelle che devono fare file upload o servono solo a ottenere informazioni non lo useranno.

⚠️ Con alcune configurazioni il json payload potrebbe non funzionare correttamente ed essere eseguito per ultimo, se così fosse forzare l'utilizzo della richiesta post mettendo il parametro `$response` a `true` come da esempio.

Esempio: `$risposta = sendMessage(...); $risposta = true` mentre così `$risposta = sendMessage(..., true); $risposta = array di risposta da Telegram`. Una `sendPhoto` usando un file invece di `file_id` o `link` userà in automatico la richiesta post. 

## Nomi delle variabili
I nomi delle variabili sono create in modo dinamico e esse esisteranno solo se presenti nel update ricevuto da Telegram. Come nomi hanno gli stessi campi degli array mandati dalle richieste di update tramite webhook di Telegram. Inoltre la prima dimensione del array viene esclusa per creare i nomi delle variabili che sono separate da un underscore.

Nonostante la prima dimesione dell'array non venga usata per creare i nomi delle variabili, è possibile usare $message, $edited_message, $channel_post, ecc... per distinguere i vari messaggi, ad esempio per capire se il messaggio ricevuto è un messaggio normale o modificato.
(Vedere qua per i nomi: https://core.telegram.org/bots/api#update)

Possono essere usati anche i nomi delle variabili non completi

Per esempio:
$chat_id conterrà 'id' che è all'interno del array di 'chat'.
Mentre facendo solo $chat conterrà l'array di 'chat'.
(Per maggiori info sui nomi guardare le api di Telegram https://core.telegram.org/bots/api#chat)

## Funzionamento del bot:
1. Quando il bot riceve un messaggio, Telegram manda un json come quello qua sotto, alla pagina a cui è settato il webhook.
1. Poi questo json viene decodificato e messo nella variabile $update che sarà un array come quello qua sotto.
1. Dopodichè vengono create le variabili usando i campi del array e vengono separati da un underscore, tranne per la prima dimensionde del array (ovvero i campi di update come update_id, message, edited_message, channel_post, ecc..).

Json mandato da Telegram
```
{
"update_id":10000,
"message":{
  "date":1441645532,
  "chat":{
     "last_name":"Test Lastname",
     "id":1111111,
     "first_name":"Test",
     "username":"Test"
  },
  "message_id":1365,
  "from":{
     "last_name":"Test Lastname",
     "id":1111111,
     "first_name":"Test",
     "username":"Test"
  },
  "text":"/start"
}
}
```
Contenuto di $update
```
array(2) {
  ["update_id"]=>
  int(10000)
  ["message"]=>
  array(5) {
    ["date"]=>
    int(1441645532)
    ["chat"]=>
    array(4) {
      ["last_name"]=>
      string(13) "Test Lastname"
      ["id"]=>
      int(1111111)
      ["first_name"]=>
      string(4) "Test"
      ["username"]=>
      string(4) "Test"
    }
    ["message_id"]=>
    int(1365)
    ["from"]=>
    array(4) {
      ["last_name"]=>
      string(13) "Test Lastname"
      ["id"]=>
      int(1111111)
      ["first_name"]=>
      string(4) "Test"
      ["username"]=>
      string(4) "Test"
    }
    ["text"]=>
    string(6) "/start"
  }
}
```
Esempio di alcune variabili seguendo l'array usato sopra
```
$chat
["chat"]=>
    array(4) {
      ["last_name"]=>
      string(13) "Test Lastname"
      ["id"]=>
      int(1111111)
      ["first_name"]=>
      string(4) "Test"
      ["username"]=>
      string(4) "Test"
    }
    
$chat_id
1111111

$update_id
10000

$from_username
Test

$message
["message"]=>
  array(5) {
    ["date"]=>
    int(1441645532)
    ["chat"]=>
    array(4) {
      ["last_name"]=>
      string(13) "Test Lastname"
      ["id"]=>
      int(1111111)
      ["first_name"]=>
      string(4) "Test"
      ["username"]=>
      string(4) "Test"
    }
    ["message_id"]=>
    int(1365)
    ["from"]=>
    array(4) {
      ["last_name"]=>
      string(13) "Test Lastname"
      ["id"]=>
      int(1111111)
      ["first_name"]=>
      string(4) "Test"
      ["username"]=>
      string(4) "Test"
    }
    ["text"]=>
    string(6) "/start"
  }
```
## Divisione dei file
Nella directory principale troviamo:
* bot.php è il file principale che elabora gli update e richiama i file con all'interno le varie funzioni.
* bot_debug.php è il file che permette di mandare tutte le variabili create nella chat con il bot, così da poter fare un debug e capire meglio il funzionamento di esso (per usarlo è da sostituire nel require_once in commands.php).
* commands.php è un file di esempio con dei comandi base per il bot, a cui va settato il webhook.
* functions è la cartella con le varie funzioni.
* setup.php serve solo per settare il webhook in modo facile.
* LICENSE il file con la licenza (GNU Affero General Public License v3.0).

Questa è la divisione delle varie funzioni nei file, sono chiamate con lo stesso nome dei metodi disponibili di Telegram
```
/bot
|   base_functions.php
|   bot.php
|   bot_debug.php
|   commands.php
|   LICENSE
|   setup.php
|   
\---functions
    +---admin.php
    |       deleteChatPhoto
    |       exportChatInviteLink
    |       getChatAdministrators
    |       getChatMember
    |       getChatMembersCount
    |       kickChatMember
    |       leaveChat
    |       pinChatMessage
    |       promoteChatMember
    |       restrictChatMember
    |       setChatDescription
    |       setChatPhoto
    |       setChatTitle
    |       unbanChatMember
    |       unpinChatMessage
    |       
    +---debug.php
    |       debug
    |
    +---edit.php
    |       deleteMessage
    |       editMessageCaption
    |       editMessageMedia
    |       editMessageReplyMarkup
    |       editMessageText
    |       
    +---games.php
    |       getGameHighScores
    |       sendGame
    |       setGameScore
    |       
    +---get_info.php
    |       getChat
    |       getFile
    |       getUserProfilePhotos
    |       
    +---inline.php
    |       answerInlineQuery
    |       
    +---input.php
    |       command
    |
    +---location.php
    |       editMessageLiveLocation
    |       sendLocation
    |       sendVenue
    |       stopMessageLiveLocation
    |       
    +---media.php
    |       sendAnimation
    |       sendAudio
    |       sendContact
    |       sendDocument
    |       sendMediaGroup
    |       sendPhoto
    |       sendVideo
    |       sendVideoNote
    |       sendVoice
    |       
    +---passport.php
    |       setPassportDataErrors
    |
    +---payments.php
    |       answerPreCheckoutQuery
    |       answerShippingQuery
    |       sendInvoice
    |       
    +---status.php
    |       answerCallbackQuery
    |       sendChatAction
    |       
    +---stickers.php
    |       addStickerToSet
    |       createNewStickerSet
    |       deleteChatStickerSet
    |       deleteStickerFromSet
    |       getStickerSet
    |       sendSticker
    |       setStickerPositionInSet
    |       setChatStickerSet
    |       setStickerPositionInSet
    |       uploadStickerFile
    |       
    \---updates.php
            deleteWebhook
            getMe
            getMeApi
            getUpdates
            getWebhookInfo
            getWebhookInfoApi
            setWebhook
```
