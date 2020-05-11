<?php namespace Barion\Common;

abstract class PaymentStatus
{
    // 10
    public const Prepared = "Prepared";
    // 20
    public const Started = "Started";
    // 21
    public const InProgress = "InProgress";
    // 22
    public const Waiting = "Waiting";
    // 25
    public const Reserved = "Reserved";
    // 26
    public const Authorized = "Authorized";
    // 30
    public const Canceled = "Canceled";
    // 40
    public const Succeeded = "Succeeded";
    // 50
    public const Failed = "Failed";
    // 60
    public const PartiallySucceeded = "PartiallySucceeded";
    // 70
    public const Expired = "Expired";
}
