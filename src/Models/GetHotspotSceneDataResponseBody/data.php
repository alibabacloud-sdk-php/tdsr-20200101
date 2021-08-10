<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotSceneDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 3D模型：MODEL_3D 全景图片：PIC 全景视频：VIDEO
     *
     * @var string
     */
    public $sceneType;

    /**
     * @description 预览token
     *
     * @var string
     */
    public $previewToken;

    /**
     * @description html转译后的预览数据，包含图片、子场景ID等信息
     *
     * @var string
     */
    public $previewData;

    /**
     * @description 模型token（sgm token）
     *
     * @var string
     */
    public $modelToken;
    protected $_name = [
        'sceneType'    => 'SceneType',
        'previewToken' => 'PreviewToken',
        'previewData'  => 'PreviewData',
        'modelToken'   => 'ModelToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->previewToken) {
            $res['PreviewToken'] = $this->previewToken;
        }
        if (null !== $this->previewData) {
            $res['PreviewData'] = $this->previewData;
        }
        if (null !== $this->modelToken) {
            $res['ModelToken'] = $this->modelToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['PreviewToken'])) {
            $model->previewToken = $map['PreviewToken'];
        }
        if (isset($map['PreviewData'])) {
            $model->previewData = $map['PreviewData'];
        }
        if (isset($map['ModelToken'])) {
            $model->modelToken = $map['ModelToken'];
        }

        return $model;
    }
}
