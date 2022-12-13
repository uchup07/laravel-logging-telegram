<?php

namespace Uchup07\LaravelLoggingTelegram;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uchup07\LaravelLoggingTelegram\Skeleton\SkeletonClass
 */
class LaravelLoggingTelegramFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-logging-telegram';
    }
}
