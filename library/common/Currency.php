<?php namespace Barion\Common;

use ReflectionClass;

abstract class Currency
{
    public const HUF = "HUF";
    public const EUR = "EUR";
    public const USD = "USD";
    public const CZK = "CZK";

    public static function isValid($name): bool
    {
        $class     = new ReflectionClass(__CLASS__);
        $constants = $class->getConstants();

        return array_key_exists($name, $constants);
    }
}
