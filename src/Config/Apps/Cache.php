<?php

namespace CaddyPhpSdk\Config\Apps;

class Cache
{
    /**
     * @var int $capacity Maximum number of certificates to allow in the cache. If reached, certificates will be randomly evicted to make room for new ones.
     */
    private int $capacity = 10000;
}