<?php

namespace CaddyPhpSdk\Config\Apps\Tls\SessionTickets\KeySource;

use CaddyPhpSdk\Config\Storage;

class Distributed
{
    public const PROVIDER = 'distributed';

    private ?Storage $storage = null;

    public function __construct()
    {
        //
    }
}