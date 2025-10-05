<?php

namespace CaddyPhpSdk\Config;

use CaddyPhpSdk\Config\Logging\Log;
use CaddyPhpSdk\Config\Logging\Sink;

class Logging
{
    private Sink $sink;

    /** @var array<string, Log> $logs */
    private array $logs = [];
}