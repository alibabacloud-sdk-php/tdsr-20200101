<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AddSubSceneRequest extends Model
{
    /**
     * @description 子场景名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 场景ID
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 类型 图片：IMAGE 视频：VIDEO
     *
     * @var string
     */
    public $uploadType;
    protected $_name = [
        'name'       => 'Name',
        'sceneId'    => 'SceneId',
        'uploadType' => 'UploadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSubSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }

        return $model;
    }
}
