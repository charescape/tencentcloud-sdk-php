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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageTranslate请求参数结构体
 *
 * @method string getSessionUuid() 获取唯一id，返回时原样返回
 * @method void setSessionUuid(string $SessionUuid) 设置唯一id，返回时原样返回
 * @method string getScene() 获取doc:文档扫描
 * @method void setScene(string $Scene) 设置doc:文档扫描
 * @method string getData() 获取图片数据的Base64字符串，图片大小上限为4M，建议对源图片进行一定程度压缩
 * @method void setData(string $Data) 设置图片数据的Base64字符串，图片大小上限为4M，建议对源图片进行一定程度压缩
 * @method string getSource() 获取源语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setSource(string $Source) 设置源语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method string getTarget() 获取目标语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method void setTarget(string $Target) 设置目标语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
 * @method integer getProjectId() 获取项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0
 * @method void setProjectId(integer $ProjectId) 设置项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0
 */
class ImageTranslateRequest extends AbstractModel
{
    /**
     * @var string 唯一id，返回时原样返回
     */
    public $SessionUuid;

    /**
     * @var string doc:文档扫描
     */
    public $Scene;

    /**
     * @var string 图片数据的Base64字符串，图片大小上限为4M，建议对源图片进行一定程度压缩
     */
    public $Data;

    /**
     * @var string 源语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     */
    public $Source;

    /**
     * @var string 目标语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     */
    public $Target;

    /**
     * @var integer 项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0
     */
    public $ProjectId;

    /**
     * @param string $SessionUuid 唯一id，返回时原样返回
     * @param string $Scene doc:文档扫描
     * @param string $Data 图片数据的Base64字符串，图片大小上限为4M，建议对源图片进行一定程度压缩
     * @param string $Source 源语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param string $Target 目标语言，支持语言列表<li> zh : 中文 </li> <li> en : 英文 </li>
     * @param integer $ProjectId 项目ID，可以根据控制台-账号中心-项目管理中的配置填写，如无配置请填写默认项目ID:0
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
        if (array_key_exists('SessionUuid',$param) and $param['SessionUuid'] !== null) {
            $this->SessionUuid = $param['SessionUuid'];
        }

        if (array_key_exists('Scene',$param) and $param['Scene'] !== null) {
            $this->Scene = $param['Scene'];
        }

        if (array_key_exists('Data',$param) and $param['Data'] !== null) {
            $this->Data = $param['Data'];
        }

        if (array_key_exists('Source',$param) and $param['Source'] !== null) {
            $this->Source = $param['Source'];
        }

        if (array_key_exists('Target',$param) and $param['Target'] !== null) {
            $this->Target = $param['Target'];
        }

        if (array_key_exists('ProjectId',$param) and $param['ProjectId'] !== null) {
            $this->ProjectId = $param['ProjectId'];
        }
    }
}
