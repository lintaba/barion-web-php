<?php namespace Barion\Common;

abstract class PurchaseType
{
    public const GoodsAndServicePurchase = "GoodsAndServicePurchase";
    public const CheckAcceptance         = "CheckAcceptance";
    public const AccountFunding          = "AccountFunding";
    public const QuasiCashTransaction    = "QuasiCashTransaction";
    public const PrePaidVacationAndLoan  = "PrePaidVacationAndLoan";
}
