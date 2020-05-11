<?php namespace Barion\Common;

abstract class ShippingAddressIndicator
{
    public const ShipToCardholdersBillingAddress = "ShipToCardholdersBillingAddress";
    public const ShipToAnotherVerifiedAddress    = "ShipToAnotherVerifiedAddress";
    public const ShipToDifferentAddress          = "ShipToDifferentAddress";
    public const ShipToStore                     = "ShipToStore";
    public const DigitalGoods                    = "DigitalGoods";
    public const TravelAndEventTickets           = "TravelAndEventTickets";
    public const Other                           = "Other";
}
