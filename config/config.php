<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    // Telegram bot token
    'token' => env('TELEGRAM_BOT_TOKEN'),

    // Telegram Chat ID
    'chat_id' => env('TELEGRAM_CHAT_ID'),

    // Blade Template to use formatting logs
    'template' => env('TELEGRAM_LOG_TEMPLATE', 'laravel-logging-telegram::default'),

    // Log Level
    'level' => env('TELEGRAM_LOG_LEVEL', 'error'),

    // Telegram sendMessage options: https://core.telegram.org/bots/api#sendmessage
    'options' => [
        // 'parse_mode' => 'html',
        // 'disable_web_page_preview' => true,
        // 'disable_notification' => false
    ]
];