<?php

namespace samhop87\VueLaravelTable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \samhop87\VueLaravelTable\VueLaravelTable
 */
class VueLaravelTable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \samhop87\VueLaravelTable\VueLaravelTable::class;
    }
}
