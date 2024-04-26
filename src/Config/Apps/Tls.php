<?php

namespace CaddyPhpSdk\Config\Apps;

use CaddyPhpSdk\Config\Apps\Tls\Automation;
use CaddyPhpSdk\Config\Apps\Tls\SessionTickets;

class Tls
{
    /**
     * @var Automation|null $automation Configures certificate automation.
     */
    private ?Automation $automation = null;

    /**
     * @var SessionTickets|null $session_tickets Configures session ticket ephemeral keys (STEKs).
     */
    private ?SessionTickets $session_tickets = null;

    /**
     * @var Cache|null $cache Configures the in-memory certificate cache.
     */
    private ?Cache $cache = null;

    /**
     * @var bool $disable_ocsp_stapling Disables OCSP stapling for manually-managed certificates only.
     */
    private bool $disable_ocsp_stapling = false;

    public function __construct()
    {
        //
    }
}