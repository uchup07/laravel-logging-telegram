<?php

namespace Uchup07\LaravelLoggingTelegram;

use Monolog\Logger;

class LaravelLoggingTelegram
{
    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        return new Logger(
            config('app.name'),
            [
                new TelegramHandler($config),
            ]
        );
    }
}
