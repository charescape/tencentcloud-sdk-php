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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateJob请求参数结构体
 *
 * @method string getJobId() 获取任务 Id
 * @method void setJobId(string $JobId) 设置任务 Id
 * @method string getJobAction() 获取任务更新动作，支持：Cancel
 * @method void setJobAction(string $JobAction) 设置任务更新动作，支持：Cancel
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 */
class UpdateJobRequest extends AbstractModel
{
    /**
     * @var string 任务 Id
     */
    public $JobId;

    /**
     * @var string 任务更新动作，支持：Cancel
     */
    public $JobAction;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @param string $JobId 任务 Id
     * @param string $JobAction 任务更新动作，支持：Cancel
     * @param string $Description 备注
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
        if (array_key_exists('JobId',$param) and $param['JobId'] !== null) {
            $this->JobId = $param['JobId'];
        }

        if (array_key_exists('JobAction',$param) and $param['JobAction'] !== null) {
            $this->JobAction = $param['JobAction'];
        }

        if (array_key_exists('Description',$param) and $param['Description'] !== null) {
            $this->Description = $param['Description'];
        }
    }
}
