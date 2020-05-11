<?php
namespace Barion\Models\Payment;

use Barion\Models\BaseResponseModel;
use Barion\Models\Common\FundingInformationModel;

/**
 * Copyright 2016 Barion Payment Inc. All Rights Reserved.
 * <p/>
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * <p/>
 * http://www.apache.org/licenses/LICENSE-2.0
 * <p/>
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
class PaymentStateResponseModel extends BaseResponseModel
{
    public $PaymentId;
    public $PaymentRequestId;
    public $OrderNumber;
    public $POSId;
    public $POSName;
    public $POSOwnerEmail;
    public $Status;
    public $PaymentType;
    public $FundingSource;
    public $FundingInformation;
    public $AllowedFundingSources;
    public $GuestCheckout;
    public $CreatedAt;
    public $ValidUntil;
    public $CompletedAt;
    public $ReservedUntil;
    public $Total;
    public $Currency;
    public $Transactions;
    public $RecurrenceResult;
    public $SuggestedLocale;
    public $FraudRiskScore;
    public $RedirectUrl;
    public $CallbackUrl;

    public function __construct()
    {
        parent::__construct();
        $this->PaymentId             = "";
        $this->PaymentRequestId      = "";
        $this->OrderNumber           = "";
        $this->POSId                 = "";
        $this->POSName               = "";
        $this->POSOwnerEmail         = "";
        $this->Status                = "";
        $this->PaymentType           = "";
        $this->FundingSource         = "";
        $this->FundingInformation    = new FundingInformationModel();
        $this->AllowedFundingSources = "";
        $this->GuestCheckout         = "";
        $this->CreatedAt             = "";
        $this->ValidUntil            = "";
        $this->CompletedAt           = "";
        $this->ReservedUntil         = "";
        $this->Total                 = 0;
        $this->Currency              = "";
        $this->Transactions          = [];
        $this->RecurrenceResult      = "";
        $this->SuggestedLocale       = "";
        $this->FraudRiskScore        = 0;
        $this->RedirectUrl           = "";
        $this->CallbackUrl           = "";
    }

    public function fromJson($json)
    {
        if (!empty($json)) {
            parent::fromJson($json);

            $this->PaymentId        = $this->jget($json, 'PaymentId');
            $this->PaymentRequestId = $this->jget($json, 'PaymentRequestId');
            $this->OrderNumber      = $this->jget($json, 'OrderNumber');
            $this->POSId            = $this->jget($json, 'POSId');
            $this->POSName          = $this->jget($json, 'POSName');
            $this->POSOwnerEmail    = $this->jget($json, 'POSOwnerEmail');
            $this->Status           = $this->jget($json, 'Status');
            $this->PaymentType      = $this->jget($json, 'PaymentType');
            $this->FundingSource    = $this->jget($json, 'FundingSource');
            if (!empty($json['FundingInformation'])) {
                $this->FundingInformation = new FundingInformationModel();
                $this->FundingInformation->fromJson($this->jget($json, 'FundingInformation'));
            }
            $this->AllowedFundingSources = $this->jget($json, 'AllowedFundingSources');
            $this->GuestCheckout         = $this->jget($json, 'GuestCheckout');
            $this->CreatedAt             = $this->jget($json, 'CreatedAt');
            $this->ValidUntil            = $this->jget($json, 'ValidUntil');
            $this->CompletedAt           = $this->jget($json, 'CompletedAt');
            $this->ReservedUntil         = $this->jget($json, 'ReservedUntil');
            $this->Total                 = $this->jget($json, 'Total');
            $this->Currency              = $this->jget($json, 'Currency');
            $this->RecurrenceResult      = $this->jget($json, 'RecurrenceResult');
            $this->SuggestedLocale       = $this->jget($json, 'SuggestedLocale');
            $this->FraudRiskScore        = $this->jget($json, 'FraudRiskScore');
            $this->RedirectUrl           = $this->jget($json, 'RedirectUrl');
            $this->CallbackUrl           = $this->jget($json, 'CallbackUrl');

            $this->Transactions = [];

            if (!empty($json['Transactions'])) {
                foreach ($json['Transactions'] as $key => $value) {
                    $tr = new TransactionDetailModel();
                    $tr->fromJson($value);
                    $this->Transactions[] = $tr;
                }
            }

        }
    }
}
