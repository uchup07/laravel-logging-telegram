# Laravel Logging Telegram

[![Latest Version on Packagist](https://img.shields.io/packagist/v/uchup07/laravel-logging-telegram.svg?style=flat-square)](https://packagist.org/packages/uchup07/laravel-logging-telegram)
[![Total Downloads](https://img.shields.io/packagist/dt/uchup07/laravel-logging-telegram.svg?style=flat-square)](https://packagist.org/packages/uchup07/laravel-logging-telegram)
![GitHub Actions](https://github.com/uchup07/laravel-logging-telegram/actions/workflows/main.yml/badge.svg)

Custom Logging Laravel for sending log to telegram chat via Bot

## Installation

You can install the package via composer:

```bash
composer require uchup07/laravel-logging-telegram
```

Added environment parameters.

```php
TELEGRAM_BOT_TOKEN=token_telegram_bot
TELEGRAM_CHAT_ID=
TELEGRAM_LOG_LEVEL=error
```
#### Create Telegram Bot and get Token

For using this package you need to create Telegram bot

1. Go to @BotFather in the Telegram
2. Send ``/newbot``
3. Set up name and bot-name for your bot.
4. Get token and add it to your .env file (it is written above)
5. Go to your bot and send ``/start`` message

For detail guide about telegram bot [@BotFather](https://core.telegram.org/bots/features#botfather) on telegram

To check Chat ID please check TELEGRAM API [getUpdates](https://core.telegram.org/bots/api#getupdates)


#### Added Config
Add to <b>config/logging.php</b> file new channel:

```php
'telegram' => [
    'driver' => 'custom',
    'via'    => Uchup07\LaravelLoggingTelegram::class,
    'level'  => env('TELEGRAM_LOG_LEVEL','error'),
]
```

If your default log channel is a stack, you can add it to the <b>stack</b> channel like this
```php
'stack' => [
    'driver' => 'stack',
    'channels' => ['daily', 'telegram'],
]
```

## Usage

Publish config file and views
```
php artisan vendor:publish --provider "Uchup07\LaravelLoggingTelegram\LaravelLoggingTelegramServiceProvider"
```

#### Telegram Logging Formats

You can choose among two different formats that you can specify in the `.env` file like this :

```
# Use a minimal log template
TELEGRAM_LOG_TEMPLATE = laravel-logging-telegram::minimal

# Or use the backward compatible one (default setting used even without inserting this row)
TELEGRAM_LOG_TEMPLATE = laravel-logging-telegram::default
```

It is possible to create other blade templates and reference them in the `TELEGRAM_LOG_TEMPLATE` entry 

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email uchup07@gmail.com instead of using the issue tracker.

## Credits

-   [Yusuf Mulhajat](https://github.com/uchup07)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
