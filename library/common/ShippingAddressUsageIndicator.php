<?php namespace Barion\Common;

abstract class ShippingAddressUsageIndicator
{
    public const ThisTransaction    = "ThisTransaction";
    public const LessThan30Days     = "LessThan30Days";
    public const Between30And60Days = "Between30And60Days";
    public const MoreThan60Days     = "MoreThan60Days";
}
