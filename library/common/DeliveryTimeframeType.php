<?php namespace Barion\Common;

abstract class DeliveryTimeframeType
{
    public const ElectronicDelivery   = "ElectronicDelivery";
    public const SameDayShipping      = "SameDayShipping";
    public const OvernightShipping    = "OvernightShipping";
    public const TwoDayOrMoreShipping = "TwoDayOrMoreShipping";
}
