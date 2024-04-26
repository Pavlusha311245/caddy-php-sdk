<?php

namespace CaddyPhpSdk\Config\Apps\Tls\SessionTickets;

use CaddyPhpSdk\Config\Apps\Tls\SessionTickets\KeySource\Distributed;
use CaddyPhpSdk\Config\Apps\Tls\SessionTickets\KeySource\Standard;

class KeySource
{
    /**
     * @var Distributed|null $distributed Provider implements a distributed STEK provider. This module will obtain STEKs from a storage module instead of generating STEKs internally. This allows STEKs to be coordinated, improving TLS session resumption in a cluster.
     */
    private ?Distributed $distributed = null;

    /**
     * @var Standard|null
     */
    private ?Standard $standard = null;

    public function __construct()
    {
        //
    }
}