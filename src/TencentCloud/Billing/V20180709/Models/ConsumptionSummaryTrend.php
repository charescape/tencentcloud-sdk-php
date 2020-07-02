<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消耗费用趋势
 *
 * @method string getType() 获取趋势类型，upward上升/downward下降/none无
 * @method void setType(string $Type) 设置趋势类型，upward上升/downward下降/none无
 * @method string getValue() 获取趋势值，Type为none是该字段值为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置趋势值，Type为none是该字段值为null
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConsumptionSummaryTrend extends AbstractModel
{
    /**
     * @var string 趋势类型，upward上升/downward下降/none无
     */
    public $Type;

    /**
     * @var string 趋势值，Type为none是该字段值为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Type 趋势类型，upward上升/downward下降/none无
     * @param string $Value 趋势值，Type为none是该字段值为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Type',$param) and $param['Type'] !== null) {
            $this->Type = $param['Type'];
        }

        if (array_key_exists('Value',$param) and $param['Value'] !== null) {
            $this->Value = $param['Value'];
        }
    }
}
