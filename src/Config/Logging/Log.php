<?php

namespace CaddyPhpSdk\Config\Logging;

class Log
{
    private Writer $writer;

    private string $level;

    private Sampling $sampling;

    private array $include;

    private array $exclude;
}