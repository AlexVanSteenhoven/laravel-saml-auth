<?php

namespace ModusDigital\LaravelSamlAuth\Facades;

use Illuminate\Support\Facades\Facade;
use ModusDigital\LaravelSamlAuth\LaravelSamlAuth;

/**
 * @see LaravelSamlAuth
 */
class SamlAuth extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LaravelSamlAuth::class;
    }
}
