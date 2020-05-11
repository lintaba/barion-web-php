<?php namespace Barion\Common;

// --------------------
// 3D Secure properties
// --------------------

abstract class AccountCreationIndicator
{
    public const NoAccount                    = "NoAccount";
    public const CreatedDuringThisTransaction = "CreatedDuringThisTransaction";
    public const LessThan30Days               = "LessThan30Days";
    public const Between30And60Days           = "Between30And60Days";
    public const MoreThan60Days               = "MoreThan60Days";
}
