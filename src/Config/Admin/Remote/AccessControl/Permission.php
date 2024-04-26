<?php

namespace CaddyPhpSdk\Config\Admin\Remote\AccessControl;

class Permission
{
    private array $paths = [];

    /**
     * @var array $methods The HTTP methods allowed for the given paths.
     */
    private array $methods = [];

    public function __construct()
    {
        //
    }
}