<?php

//replace 1111 with your id
define('MYID', 1111);
//set the nickname of the bot for the recognition of the commands, lowercase!
define('NICKNAMEBOT', '@bot');
//put false if you want to use json payload for faster speed. with some server configuration it may not work properly, moreover the first request will not receive any reply from telegram
define('RESPONSE', true);
//if you do not want to use the variables generated automatically by the telegram update but directly the array of $update put the parameter below to false
define('EASY_VAR', true);
