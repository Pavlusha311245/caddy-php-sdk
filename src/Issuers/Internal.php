<?php

namespace CaddyPhpSdk\Issuers;

class Internal
{
    public const MODULE = 'internal';

    private string $ca = "";

    private int $lifetime = 0;

    private bool $sign_with_root = false;
}