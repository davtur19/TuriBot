# TuriBot
## Intro
TuriBot is a simple way to communicate with Telegram APIs in PHP
## Requirements
PHP 7.1 or higher with curl extension

## Installation
### composer
1. Download TuriBot with `composer create-project davtur19/turibot`
1. Move into `turibot` folder
### git
1. Download TuriBot with `git clone https://github.com/davtur19/TuriBot.git`
1. Move into `TuriBot` folder
1. Edit the examples before using them (in the files there is a comment with the indications)
### manually
1. Download TuriBot from [here](https://github.com/davtur19/TuriBot/archive/master.zip)
1. Unzip it
1. Move into `TuriBot-master` folder
1. Edit the examples before using them (in files there is a comment with the indications)

## Usage
- Look at the examples ([webhook.php](https://github.com/davtur19/TuriBot/blob/master/webhook.php) and [getUpdates.php](https://github.com/davtur19/TuriBot/blob/master/getUpdates.php)), it's very simple if you know PHP and OOP
- All methods have the parameters in the same order as the [BotAPIs](https://core.telegram.org/bots/api#available-methods)
- The `reply_markup` parameters already have a json_encode in the functions, you just need to pass arrays

## Contributors
- [andrew-ld](https://github.com/andrew-ld)