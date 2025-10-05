<?php

namespace CaddyPhpSdk\Config\Logging\Writer;

class Net
{
    private string $output = "net";

    private string $address = "";

    private int|string $dial_timeout = 0;

    private bool $soft_start = false;
}