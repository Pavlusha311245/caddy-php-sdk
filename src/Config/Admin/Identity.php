<?php

namespace CaddyPhpSdk\Config\Admin;

use SplObjectStorage;

/**
 * Issuers that can provide this admin endpoint its identity certificate(s).
 *
 * @property array|string[] $identifiers List of names or IP addresses which refer to this server.
 * @property SplObjectStorage|null $issuers Issuers that can provide this admin endpoint its identity certificate(s).
 */
class Identity
{
    /**
     * @var array|string[] $identifiers List of names or IP addresses which refer to this server.
     */
    private array $identifiers = [""];

    /**
     * @var SplObjectStorage|null $issuers Issuers that can provide this admin endpoint its identity certificate(s).
     */
    private ?SplObjectStorage $issuers = null;

    public function __construct()
    {
        //
    }
}