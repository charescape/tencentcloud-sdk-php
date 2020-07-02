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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出数据配置
 *
 * @method string getCosOutputBucket() 获取cos桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosOutputBucket(string $CosOutputBucket) 设置cos桶
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosOutputKeyPrefix() 获取cos文件key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosOutputKeyPrefix(string $CosOutputKeyPrefix) 设置cos文件key
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputDataConfig extends AbstractModel
{
    /**
     * @var string cos桶
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosOutputBucket;

    /**
     * @var string cos文件key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosOutputKeyPrefix;

    /**
     * @param string $CosOutputBucket cos桶
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosOutputKeyPrefix cos文件key
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
        if (array_key_exists('CosOutputBucket',$param) and $param['CosOutputBucket'] !== null) {
            $this->CosOutputBucket = $param['CosOutputBucket'];
        }

        if (array_key_exists('CosOutputKeyPrefix',$param) and $param['CosOutputKeyPrefix'] !== null) {
            $this->CosOutputKeyPrefix = $param['CosOutputKeyPrefix'];
        }
    }
}
