<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetWindowConfigResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @var string
     */
    public $objectString;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errMessage;
    protected $_name = [
        'data'         => 'Data',
        'objectString' => 'ObjectString',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'errMessage'   => 'ErrMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->objectString) {
            $res['ObjectString'] = $this->objectString;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWindowConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ObjectString'])) {
            $model->objectString = $map['ObjectString'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        return $model;
    }
}
