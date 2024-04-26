<?php

namespace CaddyPhpSdk\Issuers;

class ZeroSSL
{
    public const MODULE = 'zerossl';

    private string $ca = "";

    private string $test_ca = "";

    private string $email = "";

    private string $account_key = "";

    private $external_account = null;

    private int $acme_timeout = 0;

    private $challenges = null;

    private array $trusted_roots_pem_files = [""];

    private $preferred_chains;

    public string $api_key = "";
}