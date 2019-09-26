<?php

namespace Omexon\Test;

class Installer
{
    public static function postPackageInstall()
    {
        print(__CLASS__ . '::' . __FUNCTION__ . "\n");
    }
}