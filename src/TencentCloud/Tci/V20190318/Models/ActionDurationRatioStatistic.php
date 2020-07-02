<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时长占比统计结果
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method float getRatio() 获取比例
 * @method void setRatio(float $Ratio) 设置比例
 */
class ActionDurationRatioStatistic extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var float 比例
     */
    public $Ratio;

    /**
     * @param string $Name 名称
     * @param float $Ratio 比例
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
        if (array_key_exists('Name',$param) and $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Ratio',$param) and $param['Ratio'] !== null) {
            $this->Ratio = $param['Ratio'];
        }
    }
}
