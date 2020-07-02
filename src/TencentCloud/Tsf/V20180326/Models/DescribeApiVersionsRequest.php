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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiVersions请求参数结构体
 *
 * @method string getMicroserviceId() 获取微服务ID
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务ID
 * @method string getPath() 获取API 请求路径
 * @method void setPath(string $Path) 设置API 请求路径
 * @method string getMethod() 获取请求方法
 * @method void setMethod(string $Method) 设置请求方法
 */
class DescribeApiVersionsRequest extends AbstractModel
{
    /**
     * @var string 微服务ID
     */
    public $MicroserviceId;

    /**
     * @var string API 请求路径
     */
    public $Path;

    /**
     * @var string 请求方法
     */
    public $Method;

    /**
     * @param string $MicroserviceId 微服务ID
     * @param string $Path API 请求路径
     * @param string $Method 请求方法
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
        if (array_key_exists('MicroserviceId',$param) and $param['MicroserviceId'] !== null) {
            $this->MicroserviceId = $param['MicroserviceId'];
        }

        if (array_key_exists('Path',$param) and $param['Path'] !== null) {
            $this->Path = $param['Path'];
        }

        if (array_key_exists('Method',$param) and $param['Method'] !== null) {
            $this->Method = $param['Method'];
        }
    }
}
