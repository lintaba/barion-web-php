<?php namespace Barion\Common;

abstract class PaymentType
{
    public const Immediate      = "Immediate";
    public const Reservation    = "Reservation";
    public const DelayedCapture = "DelayedCapture";
}
