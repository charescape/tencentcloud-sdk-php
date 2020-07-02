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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlowLogs返回参数结构体
 *
 * @method array getFlowLog() 获取流日志实例集合
 * @method void setFlowLog(array $FlowLog) 设置流日志实例集合
 * @method integer getTotalNum() 获取流日志总数目
 * @method void setTotalNum(integer $TotalNum) 设置流日志总数目
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFlowLogsResponse extends AbstractModel
{
    /**
     * @var array 流日志实例集合
     */
    public $FlowLog;

    /**
     * @var integer 流日志总数目
     */
    public $TotalNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FlowLog 流日志实例集合
     * @param integer $TotalNum 流日志总数目
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists('FlowLog',$param) and $param['FlowLog'] !== null) {
            $this->FlowLog = [];
            foreach ($param['FlowLog'] as $key => $value){
                $obj = new FlowLog();
                $obj->deserialize($value);
                array_push($this->FlowLog, $obj);
            }
        }

        if (array_key_exists('TotalNum',$param) and $param['TotalNum'] !== null) {
            $this->TotalNum = $param['TotalNum'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
