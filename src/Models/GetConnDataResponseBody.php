<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetConnDataResponseBody\list_;
use AlibabaCloud\Tea\Model;

class GetConnDataResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 返回码
     *
     * @var int
     */
    public $code;

    /**
     * @description 是否请求成功
     *
     * @var bool
     */
    public $success;

    /**
     * @description 错误消息
     *
     * @var string
     */
    public $message;

    /**
     * @description 版本
     *
     * @var string
     */
    public $version;

    /**
     * @description 扩展信息
     *
     * @var string
     */
    public $extend;

    /**
     * @description 关联信息
     *
     * @var list_[]
     */
    public $list;
    protected $_name = [
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'success'   => 'Success',
        'message'   => 'Message',
        'version'   => 'Version',
        'extend'    => 'Extend',
        'list'      => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConnDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
