<?php

namespace Wensleydale\KeenLaravel;

use Illuminate\Support\Facades\Facade;

class KeenFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'KeenIO\Client\KeenIOClient';
    }
}