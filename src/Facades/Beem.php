<?php

namespace Beem\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Beem extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Beem';
    }
}
