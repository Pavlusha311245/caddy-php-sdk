<?php

namespace CaddyPhpSdk\Config\Admin;

use SplObjectStorage;

class Remote
{
    /**
     * @var string $listen The address on which to start the secure listener.
     */
    private string $listen = "";

    /**
     * @var SplObjectStorage|null $access_control List of access controls for this secure admin endpoint.
     */
    private ?SplObjectStorage $access_control = null;

    public function __construct()
    {
        //
    }
}