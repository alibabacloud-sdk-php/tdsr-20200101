<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetSceneBuildTaskStatusResponseBody extends Model
{
    /**
     * @description 返回码
     *
     * @var int
     */
    public $code;

    /**
     * @description 任务失败错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 任务失败错误消息
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description 错误消息
     *
     * @var string
     */
    public $message;

    /**
     * @description 请求ID，与入参requestId对应
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 场景ID
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 未开始  init 处理中 失败     failed   processing  完成     succeed 取消     canceled
     *
     * @var string
     */
    public $status;

    /**
     * @description 是否请求成功
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'errorCode' => 'ErrorCode',
        'errorMsg'  => 'ErrorMsg',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'sceneId'   => 'SceneId',
        'status'    => 'Status',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSceneBuildTaskStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
