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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateService请求参数结构体
 *
 * @method string getServiceId() 获取服务Id
 * @method void setServiceId(string $ServiceId) 设置服务Id
 * @method Scaler getScaler() 获取扩缩容配置
 * @method void setScaler(Scaler $Scaler) 设置扩缩容配置
 * @method string getServiceConfigId() 获取服务配置Id
 * @method void setServiceConfigId(string $ServiceConfigId) 设置服务配置Id
 * @method string getScaleMode() 获取支持AUTO, MANUAL，分别表示自动扩缩容，手动扩缩容
 * @method void setScaleMode(string $ScaleMode) 设置支持AUTO, MANUAL，分别表示自动扩缩容，手动扩缩容
 * @method string getServiceAction() 获取支持STOP(停止) RESUME(重启)
 * @method void setServiceAction(string $ServiceAction) 设置支持STOP(停止) RESUME(重启)
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method string getGpuType() 获取GPU卡类型
 * @method void setGpuType(string $GpuType) 设置GPU卡类型
 * @method integer getCpu() 获取处理器配置，单位为 1/1000 核
 * @method void setCpu(integer $Cpu) 设置处理器配置，单位为 1/1000 核
 * @method integer getMemory() 获取内存配置，单位为1M
 * @method void setMemory(integer $Memory) 设置内存配置，单位为1M
 * @method integer getGpu() 获取显卡配置，单位为 1/1000 卡
 * @method void setGpu(integer $Gpu) 设置显卡配置，单位为 1/1000 卡
 * @method string getLogTopicId() 获取Cls日志主题ID
 * @method void setLogTopicId(string $LogTopicId) 设置Cls日志主题ID
 */
class UpdateServiceRequest extends AbstractModel
{
    /**
     * @var string 服务Id
     */
    public $ServiceId;

    /**
     * @var Scaler 扩缩容配置
     */
    public $Scaler;

    /**
     * @var string 服务配置Id
     */
    public $ServiceConfigId;

    /**
     * @var string 支持AUTO, MANUAL，分别表示自动扩缩容，手动扩缩容
     */
    public $ScaleMode;

    /**
     * @var string 支持STOP(停止) RESUME(重启)
     */
    public $ServiceAction;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var string GPU卡类型
     */
    public $GpuType;

    /**
     * @var integer 处理器配置，单位为 1/1000 核
     */
    public $Cpu;

    /**
     * @var integer 内存配置，单位为1M
     */
    public $Memory;

    /**
     * @var integer 显卡配置，单位为 1/1000 卡
     */
    public $Gpu;

    /**
     * @var string Cls日志主题ID
     */
    public $LogTopicId;

    /**
     * @param string $ServiceId 服务Id
     * @param Scaler $Scaler 扩缩容配置
     * @param string $ServiceConfigId 服务配置Id
     * @param string $ScaleMode 支持AUTO, MANUAL，分别表示自动扩缩容，手动扩缩容
     * @param string $ServiceAction 支持STOP(停止) RESUME(重启)
     * @param string $Description 备注
     * @param string $GpuType GPU卡类型
     * @param integer $Cpu 处理器配置，单位为 1/1000 核
     * @param integer $Memory 内存配置，单位为1M
     * @param integer $Gpu 显卡配置，单位为 1/1000 卡
     * @param string $LogTopicId Cls日志主题ID
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
        if (array_key_exists('ServiceId',$param) and $param['ServiceId'] !== null) {
            $this->ServiceId = $param['ServiceId'];
        }

        if (array_key_exists('Scaler',$param) and $param['Scaler'] !== null) {
            $this->Scaler = new Scaler();
            $this->Scaler->deserialize($param['Scaler']);
        }

        if (array_key_exists('ServiceConfigId',$param) and $param['ServiceConfigId'] !== null) {
            $this->ServiceConfigId = $param['ServiceConfigId'];
        }

        if (array_key_exists('ScaleMode',$param) and $param['ScaleMode'] !== null) {
            $this->ScaleMode = $param['ScaleMode'];
        }

        if (array_key_exists('ServiceAction',$param) and $param['ServiceAction'] !== null) {
            $this->ServiceAction = $param['ServiceAction'];
        }

        if (array_key_exists('Description',$param) and $param['Description'] !== null) {
            $this->Description = $param['Description'];
        }

        if (array_key_exists('GpuType',$param) and $param['GpuType'] !== null) {
            $this->GpuType = $param['GpuType'];
        }

        if (array_key_exists('Cpu',$param) and $param['Cpu'] !== null) {
            $this->Cpu = $param['Cpu'];
        }

        if (array_key_exists('Memory',$param) and $param['Memory'] !== null) {
            $this->Memory = $param['Memory'];
        }

        if (array_key_exists('Gpu',$param) and $param['Gpu'] !== null) {
            $this->Gpu = $param['Gpu'];
        }

        if (array_key_exists('LogTopicId',$param) and $param['LogTopicId'] !== null) {
            $this->LogTopicId = $param['LogTopicId'];
        }
    }
}
