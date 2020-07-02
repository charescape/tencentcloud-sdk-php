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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookInstance请求参数结构体
 *
 * @method string getNotebookInstanceName() 获取Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
 * @method void setNotebookInstanceName(string $NotebookInstanceName) 设置Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
 */
class DescribeNotebookInstanceRequest extends AbstractModel
{
    /**
     * @var string Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
     */
    public $NotebookInstanceName;

    /**
     * @param string $NotebookInstanceName Notebook实例名称
规则：“^\[a-zA-Z0-9\](-\*\[a-zA-Z0-9\])\*$”
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
        if (array_key_exists('NotebookInstanceName',$param) and $param['NotebookInstanceName'] !== null) {
            $this->NotebookInstanceName = $param['NotebookInstanceName'];
        }
    }
}
