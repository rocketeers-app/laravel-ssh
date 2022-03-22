<?php

namespace Rocketeers\SSH;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rocketeers\SSH\RemoteManager
 * @see \Rocketeers\SSH\Connection
 */
class RemoteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'remote';
    }
}
