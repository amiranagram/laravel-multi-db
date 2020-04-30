<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void setConnection(int $id)
 * @method static string getConnectionName()
 *
 * @see \App\Services\SlaveConnection
 */
class Slave extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \App\Services\SlaveConnection::class;
    }
}
