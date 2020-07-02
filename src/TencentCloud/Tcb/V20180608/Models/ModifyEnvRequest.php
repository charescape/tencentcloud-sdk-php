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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEnv请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getAlias() 获取环境备注名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
 * @method void setAlias(string $Alias) 设置环境备注名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
 */
class ModifyEnvRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 环境备注名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
     */
    public $Alias;

    /**
     * @param string $EnvId 环境ID
     * @param string $Alias 环境备注名，要以a-z开头，不能包含 a-zA-z0-9- 以外的字符
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
        if (array_key_exists('EnvId',$param) and $param['EnvId'] !== null) {
            $this->EnvId = $param['EnvId'];
        }

        if (array_key_exists('Alias',$param) and $param['Alias'] !== null) {
            $this->Alias = $param['Alias'];
        }
    }
}
