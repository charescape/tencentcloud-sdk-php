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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内容审核 Asr 文字鉴政、敏感任务结果类型
 *
 * @method string getStatus() 获取任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
 * @method void setStatus(string $Status) 设置任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
 * @method integer getErrCode() 获取错误码，0：成功，其他值：失败。
 * @method void setErrCode(integer $ErrCode) 设置错误码，0：成功，其他值：失败。
 * @method string getMessage() 获取错误信息。
 * @method void setMessage(string $Message) 设置错误信息。
 * @method AiReviewPoliticalAsrTaskInput getInput() 获取内容审核 Asr 文字鉴政任务输入。
 * @method void setInput(AiReviewPoliticalAsrTaskInput $Input) 设置内容审核 Asr 文字鉴政任务输入。
 * @method AiReviewPoliticalAsrTaskOutput getOutput() 获取内容审核 Asr 文字鉴政任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(AiReviewPoliticalAsrTaskOutput $Output) 设置内容审核 Asr 文字鉴政任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiReviewTaskPoliticalAsrResult extends AbstractModel
{
    /**
     * @var string 任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
     */
    public $Status;

    /**
     * @var integer 错误码，0：成功，其他值：失败。
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $Message;

    /**
     * @var AiReviewPoliticalAsrTaskInput 内容审核 Asr 文字鉴政任务输入。
     */
    public $Input;

    /**
     * @var AiReviewPoliticalAsrTaskOutput 内容审核 Asr 文字鉴政任务输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @param string $Status 任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
     * @param integer $ErrCode 错误码，0：成功，其他值：失败。
     * @param string $Message 错误信息。
     * @param AiReviewPoliticalAsrTaskInput $Input 内容审核 Asr 文字鉴政任务输入。
     * @param AiReviewPoliticalAsrTaskOutput $Output 内容审核 Asr 文字鉴政任务输出。
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
        if (array_key_exists('Status',$param) and $param['Status'] !== null) {
            $this->Status = $param['Status'];
        }

        if (array_key_exists('ErrCode',$param) and $param['ErrCode'] !== null) {
            $this->ErrCode = $param['ErrCode'];
        }

        if (array_key_exists('Message',$param) and $param['Message'] !== null) {
            $this->Message = $param['Message'];
        }

        if (array_key_exists('Input',$param) and $param['Input'] !== null) {
            $this->Input = new AiReviewPoliticalAsrTaskInput();
            $this->Input->deserialize($param['Input']);
        }

        if (array_key_exists('Output',$param) and $param['Output'] !== null) {
            $this->Output = new AiReviewPoliticalAsrTaskOutput();
            $this->Output->deserialize($param['Output']);
        }
    }
}
