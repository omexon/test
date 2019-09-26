<?php

namespace Omexon\Test;

class Installer
{
    public static function postPackageInstall()
    {
        print(__CLASS__ . '::' . __FUNCTION__ . "\n");
    }

    public static function postPackageUpdate()
    {
        print(__CLASS__ . '::' . __FUNCTION__ . "\n");
    }

    public static function postAutoloadDump()
    {
        print(__CLASS__ . '::' . __FUNCTION__ . "\n");
    }

    public static function postUpdate()
    {
        print(__CLASS__ . '::' . __FUNCTION__ . "\n");
    }
}