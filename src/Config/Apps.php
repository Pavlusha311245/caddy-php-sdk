<?php

namespace CaddyPhpSdk\Config;

use CaddyPhpSdk\Config\Apps\Events;

class Apps
{
    private Events $events;
    private $http;
    private $pki;
    private $tls;
}