<?php

namespace CaddyPhpSdk\Config;

use CaddyPhpSdk\Config\Admin\{Config, Identity, Remote};

class Admin
{
    /**
     * @var bool $disabled If true, the admin endpoint will be completely disabled.
     */
    private bool $disabled = false;

    /**
     * @var string $listen The address to which the admin endpoint's listener should bind itself.
     */
    private string $listen = "http://localhost:2019";

    /**
     * @var bool $enforce_origin If true, CORS headers will be emitted, and requests to the API will be rejected if their Host and Origin headers do not match the expected value(s).
     */
    private bool $enforce_origin = false;

    /**
     * @var array|string[] $origins The list of allowed origins/hosts for API requests.
     */
    private array $origins = [];

    /**
     * @var Config|null $config Options pertaining to configuration management.
     */
    private ?Config $config = null;

    /**
     * @var Identity|null $identity Options that establish this server's identity.
     */
    private ?Identity $identity = null;

    /**
     * @var Remote|null $remote Options pertaining to remote administration.
     */
    private ?Remote $remote = null;
}