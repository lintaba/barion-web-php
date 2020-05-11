<?php
namespace Barion\Models\Refund;

use Barion\Models\BaseRequestModel;
use Barion\Models\Payment\TransactionToRefundModel;
use Barion\Models\Payment\TransactionToRefundModel;

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
class RefundRequestModel extends BaseRequestModel
{
    public $PaymentId;
    public $TransactionsToRefund;

    public function __construct($paymentId)
    {
        $this->PaymentId = $paymentId;
    }

    public function AddTransaction(TransactionToRefundModel $transaction): void
    {
        if ($this->TransactionsToRefund == null) {
            $this->TransactionsToRefund = [];
        }
        $this->TransactionsToRefund[] = $transaction;
    }

    public function AddTransactions($transactions): void
    {
        if (!empty($transactions)) {
            foreach ($transactions as $transaction) {
                if ($transaction instanceof TransactionToRefundModel) {
                    $this->AddTransaction($transaction);
                }
            }
        }
    }

}
