<?php

namespace CaddyPhpSdk\Config\Logging\Writer;

class File
{
    private string $output = "file";

    private string $filename = "";

    private int $mode = 0;

    private bool $roll = false;

    private int $roll_size_mb = 0;

    private bool $roll_gzip = false;

    private bool $roll_local_time = false;

    private int $roll_keep = 0;

    private int $roll_keep_days = 0;


}