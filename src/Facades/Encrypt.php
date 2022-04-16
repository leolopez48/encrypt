<?php

namespace Leolopez\Encrypt\Facades;

use \Illuminate\Support\Facades\Facade;

class Encrypt extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'encrypt';
    }
}
