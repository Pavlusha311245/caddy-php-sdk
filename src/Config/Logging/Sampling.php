<?php

namespace CaddyPhpSdk\Config\Logging;

class Sampling
{
    private int $interval = 0;

    private int $first = 0;

    private int $thereafter = 0;

    public function getInterval(): int
    {
        return $this->interval;
    }

    public function setInterval(int $interval): void
    {
        $this->interval = $interval;
    }

    public function getFirst(): int
    {
        return $this->first;
    }

    public function setFirst(int $first): void
    {
        $this->first = $first;
    }

    public function getThereafter(): int
    {
        return $this->thereafter;
    }

    public function setThereafter(int $thereafter): void
    {
        $this->thereafter = $thereafter;
    }


}