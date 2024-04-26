<?php

namespace CaddyPhpSdk\Config\Admin\Remote;

use SplObjectStorage;

class AccessControl
{
    private array $public_keys = [];

    private ?SplObjectStorage $permissions = null;
}