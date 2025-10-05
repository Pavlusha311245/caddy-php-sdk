<?php

namespace CaddyPhpSdk\Config\Apps\Http;

class Server
{
    private array $listen = [];

    private int $read_timeout = 0;

    private int $read_header_timeout = 0;

    private int $write_timeout = 0;

    private int $idle_timeout = 0;

    private int $keepalive_interval = 0;

    private int $max_header_bytes = 0;

    private bool $enable_full_duplex = false;
}