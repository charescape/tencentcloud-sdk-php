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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AcceptDirectConnectTunnel请求参数结构体
 *
 * @method string getDirectConnectTunnelId() 获取物理专线拥有者接受共享专用通道申请
 * @method void setDirectConnectTunnelId(string $DirectConnectTunnelId) 设置物理专线拥有者接受共享专用通道申请
 */
class AcceptDirectConnectTunnelRequest extends AbstractModel
{
    /**
     * @var string 物理专线拥有者接受共享专用通道申请
     */
    public $DirectConnectTunnelId;

    /**
     * @param string $DirectConnectTunnelId 物理专线拥有者接受共享专用通道申请
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
        if (array_key_exists('DirectConnectTunnelId',$param) and $param['DirectConnectTunnelId'] !== null) {
            $this->DirectConnectTunnelId = $param['DirectConnectTunnelId'];
        }
    }
}
