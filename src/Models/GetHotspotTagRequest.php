<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetHotspotTagRequest extends Model
{
    /**
     * @var string
     */
    public $previewToken;

    /**
     * @var string
     */
    public $subSceneUuid;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $domain;
    protected $_name = [
        'previewToken' => 'PreviewToken',
        'subSceneUuid' => 'SubSceneUuid',
        'type'         => 'Type',
        'enabled'      => 'Enabled',
        'domain'       => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->previewToken) {
            $res['PreviewToken'] = $this->previewToken;
        }
        if (null !== $this->subSceneUuid) {
            $res['SubSceneUuid'] = $this->subSceneUuid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotspotTagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreviewToken'])) {
            $model->previewToken = $map['PreviewToken'];
        }
        if (isset($map['SubSceneUuid'])) {
            $model->subSceneUuid = $map['SubSceneUuid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
