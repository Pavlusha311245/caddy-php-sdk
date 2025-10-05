<?php

namespace CaddyPhpSdk\Config\Apps\Http;

class Metrics
{
    public function __construct(
        private bool $per_host = false
    )
    {
    }

    public function isPerHost(): bool
    {
        return $this->per_host;
    }

    public function setPerHost(bool $per_host): void
    {
        $this->per_host = $per_host;
    }
}