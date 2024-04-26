<?php

namespace CaddyPhpSdk\Config\Apps\Tls;

use CaddyPhpSdk\Config\Apps\Tls\SessionTickets\KeySource;

class SessionTickets
{
    /**
     * @var KeySource|null $key_source KeySource is the method by which Caddy produces or obtains TLS session ticket keys (STEKs).
     */
    private ?KeySource $key_source = null;

    /**
     * @var string $rotation_interval How often Caddy rotates STEKs. Default: 12h.
     *
     * Duration can be an integer or a string. An integer is interpreted as nanoseconds. If a string, it is a Go time.Duration value such as 300ms, 1.5h, or 2h45m; valid units are ns, us/µs, ms, s, m, h, and d.
     */
    private string $rotation_interval = '12h';

    /**
     * @var int $max_keys The maximum number of keys to keep in rotation.
     */
    private int $max_keys = 4;

    /**
     * @var bool $disable_rotation Disables STEK rotation.
     */
    private bool $disable_rotation = false;

    /**
     * @var bool $disabled Disables TLS session resumption by tickets.
     */
    private bool $disabled = false;


    public function __construct()
    {
        //
    }
}