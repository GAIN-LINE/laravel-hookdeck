<?php

namespace GainLine\Hookdeck\Facades;

use Illuminate\Support\Facades\Facade;

class Hookdeck extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \GainLine\Hookdeck\HookdeckManager::class;
    }
}
