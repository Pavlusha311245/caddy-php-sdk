<?php

namespace CaddyPhpSdk\Config\Logging\Writer;

class Discard
{
    public function __construct(
        private string $output = "discard"
    )
    {
        //
    }

    public function getOutput(): string
    {
        return $this->output;
    }

    public function setOutput(string $output): void
    {
        $this->output = $output;
    }
}