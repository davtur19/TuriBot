# TuriBot
> TuriBot is a simple way to communicate with Telegram APIs in PHP

[![Latest Stable Version](https://poser.pugx.org/davtur19/turibot/v/stable)](https://packagist.org/packages/davtur19/turibot)
[![Total Downloads](https://poser.pugx.org/davtur19/turibot/downloads)](https://packagist.org/packages/davtur19/turibot)
[![License](https://poser.pugx.org/davtur19/turibot/license)](https://packagist.org/packages/davtur19/turibot)

## Requirements
PHP 7.1 or higher with curl extension

## Installation
```sh
composer require davtur19/turibot
```
### Webhook
Setup recommended: open [setupWebhook.php](https://github.com/davtur19/TuriBot/blob/master/examples/setupWebhook.php) in your browser and follow the setup wizard.

Manual setup: set webhook to the file [webhook.php](https://github.com/davtur19/TuriBot/blob/master/examples/webhook.php), and as parameter GET "api" set your token.

Example for manual setup:
```sh
curl https://api.telegram.org/botTOKEN/setWebhook?url=https://WEBSITE/DIR/webhook.php?api=TOKEN
```
Alternatively if you don't want to use GET, just change [this piece of code](https://github.com/davtur19/TuriBot/blob/master/examples/webhook.php#L8-L12).

### GetUpdates
[Setup Token](https://github.com/davtur19/TuriBot/blob/master/examples/getUpdates.php#L8)

## Usage
- Look at the examples ([webhook.php](https://github.com/davtur19/TuriBot/blob/master/examples/webhook.php) and [getUpdates.php](https://github.com/davtur19/TuriBot/blob/master/examples/getUpdates.php)), it's very simple if you know PHP and OOP
- All methods have the parameters in the same order as the [BotAPIs](https://core.telegram.org/bots/api#available-methods)
- The `reply_markup`, `permissions`, `commands` and parameters that require arrays, already have a json_encode in the functions, you just need to pass arrays

## Security
https://github.com/php-telegram-bot/core/wiki/Securing-&-Hardening-your-Telegram-Bot

## Contributors
- [andrew-ld](https://github.com/andrew-ld)

## Old version
I don't recommend its use, but it could be useful for those unfamiliar with OOP and would like to start learning how PHP and Telegram Bot Api work.

https://github.com/davtur19/TuriBot/tree/old
