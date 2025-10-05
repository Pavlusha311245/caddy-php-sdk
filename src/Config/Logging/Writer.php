<?php

namespace CaddyPhpSdk\Config\Logging;

use CaddyPhpSdk\Config\Logging\Writer\Discard;
use CaddyPhpSdk\Config\Logging\Writer\File;
use CaddyPhpSdk\Config\Logging\Writer\Net;

class Writer
{
    private Discard $discard;

    private File $file;

    private Net $net;

    // TODO: stdout, stderr,
    public function getDiscard(): Discard
    {
        return $this->discard;
    }

    public function setDiscard(Discard $discard): void
    {
        $this->discard = $discard;
    }

    public function getFile(): File
    {
        return $this->file;
    }

    public function setFile(File $file): void
    {
        $this->file = $file;
    }

    public function getNet(): Net
    {
        return $this->net;
    }

    public function setNet(Net $net): void
    {
        $this->net = $net;
    }
}