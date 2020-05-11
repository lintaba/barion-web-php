<?php namespace Barion\Common;

abstract class CardType
{
    public const Unknown         = "Unknown";
    public const Mastercard      = "Mastercard";
    public const Maestro         = "Maestro";
    public const Visa            = "Visa";
    public const Electron        = "Electron";
    public const AmericanExpress = "AmericanExpress";
}
