<?php
namespace Barion\Models\Threedsecure;

use Barion\Helpers\BarionModel;

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
class ShippingAddressModel extends BarionModel
{
    public $Country;
    public $Region;
    public $City;
    public $Zip;
    public $Street;
    public $Street2;
    public $Street3;
    public $FullName;

    public function __construct()
    {
        $this->Country  = "";
        $this->Region   = "";
        $this->City     = "";
        $this->Zip      = "";
        $this->Street   = "";
        $this->Street2  = "";
        $this->Street3  = "";
        $this->FullName = "";
    }

    public function fromJson($json)
    {
        if (!empty($json)) {
            $this->Country  = $this->jget($json, 'Country');
            $this->Region   = $this->jget($json, 'Region');
            $this->City     = $this->jget($json, 'City');
            $this->Zip      = $this->jget($json, 'Zip');
            $this->Street   = $this->jget($json, 'Street');
            $this->Street2  = $this->jget($json, 'Street2');
            $this->Street3  = $this->jget($json, 'Street3');
            $this->FullName = $this->jget($json, 'FullName');
        }
    }
}
