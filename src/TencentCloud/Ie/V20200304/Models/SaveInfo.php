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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务存储信息
 *
 * @method integer getType() 获取存储类型，可选值： 
1：CosInfo。
 * @method void setType(integer $Type) 设置存储类型，可选值： 
1：CosInfo。
 * @method CosInfo getCosInfo() 获取Cos形式存储信息，当Type等于1时必选。
 * @method void setCosInfo(CosInfo $CosInfo) 设置Cos形式存储信息，当Type等于1时必选。
 */
class SaveInfo extends AbstractModel
{
    /**
     * @var integer 存储类型，可选值： 
1：CosInfo。
     */
    public $Type;

    /**
     * @var CosInfo Cos形式存储信息，当Type等于1时必选。
     */
    public $CosInfo;

    /**
     * @param integer $Type 存储类型，可选值： 
1：CosInfo。
     * @param CosInfo $CosInfo Cos形式存储信息，当Type等于1时必选。
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

        if (array_key_exists('CosInfo',$param) and $param['CosInfo'] !== null) {
            $this->CosInfo = new CosInfo();
            $this->CosInfo->deserialize($param['CosInfo']);
        }
    }
}
