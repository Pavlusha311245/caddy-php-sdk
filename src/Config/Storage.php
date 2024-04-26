<?php

namespace CaddyPhpSdk\Config;

use CaddyPhpSdk\Config\Storage\FileSystem;

/**
 * Class Storage
 *
 * @property string $file_system
 */
class Storage
{
    private ?FileSystem $file_system = null;
}