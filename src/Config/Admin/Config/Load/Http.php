<?php

namespace CaddyPhpSdk\Config\Admin\Config\Load;

use CaddyPhpSdk\Config\Admin\Config\Load\Http\Tls;

/**
 * HTTPLoader can load Caddy configs over HTTP(S).
 *
 * If the response is not a JSON config, a config adapter must be specified either in the loader config (adapter), or in the Content-Type HTTP header returned in the HTTP response from the server. The Content-Type header is read just like the admin API's /load endpoint. Uf you don't have control over the HTTP server (but can still trust its response), you can override the Content-Type header by setting the adapter property in this config.
 *
 * @property string $method The method for the request.
 * @property string $url The URL of the request.
 * @property $header Http headers to add to the request
 * @property string $timeout Maximum time allowed for a complete connection and request. Duration can be an integer or a string. An integer is interpreted as nanoseconds. If a string, it is a Go time.Duration value such as 300ms, 1.5h, or 2h45m; valid units are ns, us/µs, ms, s, m, h, and d.
 * @property string $adapter The name of the config adapter to use, if any. Only needed if the HTTP response is not a JSON config and if the server's Content-Type header is missing or incorrect.
 * @property Tls|null $tls Options for TLS client configuration.
 */
class Http
{
    public const MODULE = "http";

    /**
     * @var string $method The method for the request.
     */
    private string $method = "GET";

    /**
     * @var string $url The URL of the request.
     */
    private string $url = "";

    /**
     * @var $header Http headers to add to the request
     */
    private $header;

    /**
     * @var string|int $timeout Maximum time allowed for a complete connection and request. Duration can be an integer or a string. An integer is interpreted as nanoseconds. If a string, it is a Go time.Duration value such as 300ms, 1.5h, or 2h45m; valid units are ns, us/µs, ms, s, m, h, and d.
     */
    private string|int $timeout = 0;

    /**
     * @var string $adapter The name of the config adapter to use, if any. Only needed if the HTTP response is not a JSON config and if the server's Content-Type header is missing or incorrect.
     */
    private string $adapter = "";

    private ?Tls $tls = null;
}