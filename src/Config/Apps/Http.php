<?php

namespace CaddyPhpSdk\Config\Apps;

use CaddyPhpSdk\Config\Apps\Http\Metrics;

class Http
{
    private int $http_port = 0;

    private int $https_port = 0;

    private int $grace_period = 0;

    private int $shutdown_delay = 0;

    private array $servers;

    private ?Metrics $metrics;

    public function getHttpPort(): int
    {
        return $this->http_port;
    }

    public function setHttpPort(int $http_port): void
    {
        $this->http_port = $http_port;
    }

    public function getHttpsPort(): int
    {
        return $this->https_port;
    }

    public function setHttpsPort(int $https_port): void
    {
        $this->https_port = $https_port;
    }

    public function getGracePeriod(): int
    {
        return $this->grace_period;
    }

    public function setGracePeriod(int $grace_period): void
    {
        $this->grace_period = $grace_period;
    }

    public function getShutdownDelay(): int
    {
        return $this->shutdown_delay;
    }

    public function setShutdownDelay(int $shutdown_delay): void
    {
        $this->shutdown_delay = $shutdown_delay;
    }
}