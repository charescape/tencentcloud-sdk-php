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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AutoRewrite请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID。
 * @method string getListenerId() 获取HTTPS:443监听器的ID。
 * @method void setListenerId(string $ListenerId) 设置HTTPS:443监听器的ID。
 * @method array getDomains() 获取HTTPS:443监听器下需要重定向的域名，若不填，对HTTPS:443监听器下的所有域名都设置重定向。
 * @method void setDomains(array $Domains) 设置HTTPS:443监听器下需要重定向的域名，若不填，对HTTPS:443监听器下的所有域名都设置重定向。
 */
class AutoRewriteRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID。
     */
    public $LoadBalancerId;

    /**
     * @var string HTTPS:443监听器的ID。
     */
    public $ListenerId;

    /**
     * @var array HTTPS:443监听器下需要重定向的域名，若不填，对HTTPS:443监听器下的所有域名都设置重定向。
     */
    public $Domains;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID。
     * @param string $ListenerId HTTPS:443监听器的ID。
     * @param array $Domains HTTPS:443监听器下需要重定向的域名，若不填，对HTTPS:443监听器下的所有域名都设置重定向。
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
        if (array_key_exists('LoadBalancerId',$param) and $param['LoadBalancerId'] !== null) {
            $this->LoadBalancerId = $param['LoadBalancerId'];
        }

        if (array_key_exists('ListenerId',$param) and $param['ListenerId'] !== null) {
            $this->ListenerId = $param['ListenerId'];
        }

        if (array_key_exists('Domains',$param) and $param['Domains'] !== null) {
            $this->Domains = $param['Domains'];
        }
    }
}
