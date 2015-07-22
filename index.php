<?php

require 'vendor/autoload.php';

use Irazasyed\Telegram\Telegram;

$telegram = new Telegram('BOT TOKEN');

$response = $telegram->sendMessage('CHAT_ID', 'Hello World');
