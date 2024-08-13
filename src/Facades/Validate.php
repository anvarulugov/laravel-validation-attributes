<?php

namespace AnvarUlugov\Validate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AnvarUlugov\Validate\Validate
 */
class Validate extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AnvarUlugov\Validate\Validate::class;
    }
}
