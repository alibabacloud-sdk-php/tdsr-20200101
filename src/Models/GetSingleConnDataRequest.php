<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetSingleConnDataRequest extends Model
{
    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $subSceneId;
    protected $_name = [
        'subSceneId' => 'SubSceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSingleConnDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }

        return $model;
    }
}
