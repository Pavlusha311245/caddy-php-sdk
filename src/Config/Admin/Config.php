<?php

namespace CaddyPhpSdk\Config\Admin;

use CaddyPhpSdk\Config\Admin\Config\Load;

class Config
{
    /**
     * @var bool $persist Whether to keep a copy of the active config on disk
     */
    private bool $persist = false;

    private ?Load $load = null;

    public function __construct()
    {
        //
    }
}