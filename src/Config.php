<?php

namespace CaddyPhpSdk;

use CaddyPhpSdk\Config\Admin;
use CaddyPhpSdk\Config\Apps;
use CaddyPhpSdk\Config\Logging;
use CaddyPhpSdk\Config\Storage;

class Config
{
    /**
     * AdminConfig configures Caddy's API endpoint, which is used to manage Caddy while it is running.
     *
     * @var Admin $admin
     */
    private Admin $admin;

    /**
     * Logging facilitates logging within Caddy
     *
     * @var Logging $logging
     */
    private Logging $logging;

    /**
     * StorageRaw is a storage module that defines how/where Caddy stores assets (such as TLS certificates)
     *
     * @var Storage $storage
     */
    private Storage $storage;

    /**
     * @var Apps $apps AppsRaw are the apps that Caddy will load and run.
     */
    private Apps $apps;
}