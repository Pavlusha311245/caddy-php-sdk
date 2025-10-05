<?php

namespace CaddyPhpSdk\Config\Logging;

class Sink
{
    public function __construct(
        private Writer $writer
    )
    {

    }

    public function getWriter(): Writer
    {
        return $this->writer;
    }

    public function setWriter(Writer $writer): void
    {
        $this->writer = $writer;
    }


}