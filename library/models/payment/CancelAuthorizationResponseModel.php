<?php
namespace Barion\Models\Payment;

use Barion\Models\BaseResponseModel;

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
class CancelAuthorizationResponseModel extends BaseResponseModel
{
    public $IsSuccessful;
    public $PaymentId;
    public $PaymentRequestId;
    public $Status;
    public $Transactions;

    public function __construct()
    {
        parent::__construct();
        $this->IsSuccessful     = false;
        $this->PaymentId        = "";
        $this->PaymentRequestId = "";
        $this->Status           = "";
        $this->Transactions     = [];
    }

    public function fromJson($json)
    {
        if (!empty($json)) {
            parent::fromJson($json);

            $this->IsSuccessful     = $this->jget($json, 'IsSuccessful');
            $this->PaymentId        = $this->jget($json, 'PaymentId');
            $this->PaymentRequestId = $this->jget($json, 'PaymentRequestId');
            $this->Status           = $this->jget($json, 'Status');

            $this->Transactions = [];

            if (!empty($json['Transactions'])) {
                foreach ($json['Transactions'] as $key => $value) {
                    $tr = new TransactionResponseModel();
                    $tr->fromJson($value);
                    $this->Transactions[] = $tr;
                }
            }
        }
    }
}
