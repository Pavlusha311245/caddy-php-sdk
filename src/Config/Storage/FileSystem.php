<?php

namespace CaddyPhpSdk\Config\Storage;

class FileSystem
{
    public const MODULE = 'file_system';

    public function __construct(
        private string $root = ''
    )
    {
        //
    }

    /**
     * @param string $root
     */
    public function setRoot(string $root): void
    {
        $this->root = $root;
    }

    /**
     * @return string
     */
    public function getRoot(): string
    {
        return $this->root;
    }
}