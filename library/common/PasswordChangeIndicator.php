<?php namespace Barion\Common;

abstract class PasswordChangeIndicator
{
    public const NoChange                     = "NoChange";
    public const ChangedDuringThisTransaction = "ChangedDuringThisTransaction";
    public const LessThan30Days               = "LessThan30Days";
    public const Between30And60Days           = "Between30And60Days";
    public const MoreThan60Days               = "MoreThan60Days";
}
