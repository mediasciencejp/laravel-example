<?php

namespace Mediasciencejp\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mediasciencejp\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mediasciencejp\Example\Example::class;
    }
}
