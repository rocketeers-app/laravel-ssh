<?php

namespace Rocketeers\Remote;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rocketeers\Remote\RemoteManager
 * @see \Rocketeers\Remote\Connection
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
