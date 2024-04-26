<?php

namespace CaddyPhpSdk\Config\Admin\Config\Load\Http;

class Tls
{
    private bool $use_server_identity = false;

    private string $client_certificate_file = "";

    private string $client_certificate_key_file = "";

    private array $root_ca_pem_files = [""];

    public function __construct()
    {
        //
    }
}