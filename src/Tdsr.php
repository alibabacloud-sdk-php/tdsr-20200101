<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddMosaicsRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddMosaicsResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddRelativePositionRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddRelativePositionResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\AddSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CheckResourceRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CheckResourceResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\CreateSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DeleteProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DeleteProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\DropSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetConnDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetConnDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotSceneDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotSceneDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotTagRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotTagResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetLayoutDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetLayoutDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOriginLayoutDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOriginLayoutDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOssPolicyRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetOssPolicyResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetPolicyRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetPolicyResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetRectifyImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetRectifyImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneBuildTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSceneBuildTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewInfoRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewInfoResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSingleConnDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSingleConnDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSubSceneTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSubSceneTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetTaskStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetTaskStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetWindowConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetWindowConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LabelBuildRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LabelBuildResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LinkImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\LinkImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListScenesRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListScenesResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\OptimizeRightAngleRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\OptimizeRightAngleResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredictionWallLineRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredictionWallLineResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PredImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishHotspotResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\PublishStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RecoveryOriginImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RecoveryOriginImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectifyImageRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectifyImageResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectVerticalRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RectVerticalResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RollbackSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\RollbackSubSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotConfigRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotConfigResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\SaveHotspotTagResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ScenePublishRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\ScenePublishResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewStatusRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\TempPreviewStatusResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateConnDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateConnDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateLayoutDataRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateLayoutDataResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateProjectRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateProjectResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSceneResponse;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSubSceneRequest;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\UpdateSubSceneResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Tdsr extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou' => 'lyj.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('tdsr', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddMosaicsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddMosaicsResponse
     */
    public function addMosaicsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['MarkPosition'] = $request->markPosition;
        $query['SubSceneId']   = $request->subSceneId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddMosaics',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddMosaicsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddMosaicsRequest $request
     *
     * @return AddMosaicsResponse
     */
    public function addMosaics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMosaicsWithOptions($request, $runtime);
    }

    /**
     * @param AddProjectRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddProjectResponse
     */
    public function addProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['BusinessId'] = $request->businessId;
        $query['Name']       = $request->name;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddProjectRequest $request
     *
     * @return AddProjectResponse
     */
    public function addProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addProjectWithOptions($request, $runtime);
    }

    /**
     * @param AddRelativePositionRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddRelativePositionResponse
     */
    public function addRelativePositionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                     = [];
        $query['RelativePosition'] = $request->relativePosition;
        $query['SceneId']          = $request->sceneId;
        $req                       = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddRelativePosition',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddRelativePositionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddRelativePositionRequest $request
     *
     * @return AddRelativePositionResponse
     */
    public function addRelativePosition($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRelativePositionWithOptions($request, $runtime);
    }

    /**
     * @param AddSceneRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddSceneResponse
     */
    public function addSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Name']      = $request->name;
        $query['ProjectId'] = $request->projectId;
        $query['Type']      = $request->type;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSceneRequest $request
     *
     * @return AddSceneResponse
     */
    public function addScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSceneWithOptions($request, $runtime);
    }

    /**
     * @param AddSubSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddSubSceneResponse
     */
    public function addSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Name']       = $request->name;
        $query['SceneId']    = $request->sceneId;
        $query['UploadType'] = $request->uploadType;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSubSceneRequest $request
     *
     * @return AddSubSceneResponse
     */
    public function addSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSubSceneWithOptions($request, $runtime);
    }

    /**
     * @param CheckResourceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckResourceResponse
     */
    public function checkResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['Bid']            = $request->bid;
        $query['Country']        = $request->country;
        $query['GmtWakeup']      = $request->gmtWakeup;
        $query['Hid']            = $request->hid;
        $query['Interrupt']      = $request->interrupt;
        $query['Invoker']        = $request->invoker;
        $query['Level']          = $request->level;
        $query['Message']        = $request->message;
        $query['Pk']             = $request->pk;
        $query['Prompt']         = $request->prompt;
        $query['Success']        = $request->success;
        $query['TaskExtraData']  = $request->taskExtraData;
        $query['TaskIdentifier'] = $request->taskIdentifier;
        $query['Url']            = $request->url;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CheckResource',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CheckResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckResourceRequest $request
     *
     * @return CheckResourceResponse
     */
    public function checkResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkResourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                       = [];
        $query['BuilderUserIdList']  = $request->builderUserIdList;
        $query['BusinessId']         = $request->businessId;
        $query['BusinessUserIdList'] = $request->businessUserIdList;
        $query['GatherUserIdList']   = $request->gatherUserIdList;
        $query['Name']               = $request->name;
        $req                         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSceneResponse
     */
    public function createSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Name']      = $request->name;
        $query['ProjectId'] = $request->projectId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSceneRequest $request
     *
     * @return CreateSceneResponse
     */
    public function createScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSceneWithOptions($request, $runtime);
    }

    /**
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ParamFile']    = $request->paramFile;
        $query['SubSceneUuid'] = $request->subSceneUuid;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteFile',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProjectResponse
     */
    public function deleteProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['ProjectId'] = $request->projectId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProjectRequest $request
     *
     * @return DeleteProjectResponse
     */
    public function deleteProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProjectWithOptions($request, $runtime);
    }

    /**
     * @param DetailProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetailProjectResponse
     */
    public function detailProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query       = [];
        $query['Id'] = $request->id;
        $req         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetailProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DetailProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetailProjectRequest $request
     *
     * @return DetailProjectResponse
     */
    public function detailProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailProjectWithOptions($request, $runtime);
    }

    /**
     * @param DetailSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DetailSceneResponse
     */
    public function detailSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query       = [];
        $query['Id'] = $request->id;
        $req         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetailScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DetailSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetailSceneRequest $request
     *
     * @return DetailSceneResponse
     */
    public function detailScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailSceneWithOptions($request, $runtime);
    }

    /**
     * @param DetailSubSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DetailSubSceneResponse
     */
    public function detailSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query       = [];
        $query['Id'] = $request->id;
        $req         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DetailSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DetailSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetailSubSceneRequest $request
     *
     * @return DetailSubSceneResponse
     */
    public function detailSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detailSubSceneWithOptions($request, $runtime);
    }

    /**
     * @param DropProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DropProjectResponse
     */
    public function dropProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['ProjectId'] = $request->projectId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DropProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DropProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DropProjectRequest $request
     *
     * @return DropProjectResponse
     */
    public function dropProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropProjectWithOptions($request, $runtime);
    }

    /**
     * @param DropSceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DropSceneResponse
     */
    public function dropSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query       = [];
        $query['Id'] = $request->id;
        $req         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DropScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DropSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DropSceneRequest $request
     *
     * @return DropSceneResponse
     */
    public function dropScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSceneWithOptions($request, $runtime);
    }

    /**
     * @param DropSubSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DropSubSceneResponse
     */
    public function dropSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query       = [];
        $query['Id'] = $request->id;
        $req         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DropSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DropSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DropSubSceneRequest $request
     *
     * @return DropSubSceneResponse
     */
    public function dropSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSubSceneWithOptions($request, $runtime);
    }

    /**
     * @param GetConnDataRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetConnDataResponse
     */
    public function getConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['SceneId'] = $request->sceneId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetConnData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConnDataRequest $request
     *
     * @return GetConnDataResponse
     */
    public function getConnData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnDataWithOptions($request, $runtime);
    }

    /**
     * @param GetHotspotConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetHotspotConfigResponse
     */
    public function getHotspotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['Domain']       = $request->domain;
        $query['Enabled']      = $request->enabled;
        $query['PreviewToken'] = $request->previewToken;
        $query['Type']         = $request->type;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotspotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotspotConfigRequest $request
     *
     * @return GetHotspotConfigResponse
     */
    public function getHotspotConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotspotConfigWithOptions($request, $runtime);
    }

    /**
     * @param GetHotspotSceneDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetHotspotSceneDataResponse
     */
    public function getHotspotSceneDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['Domain']       = $request->domain;
        $query['Enabled']      = $request->enabled;
        $query['PreviewToken'] = $request->previewToken;
        $query['Type']         = $request->type;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotSceneData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotspotSceneDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotspotSceneDataRequest $request
     *
     * @return GetHotspotSceneDataResponse
     */
    public function getHotspotSceneData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotspotSceneDataWithOptions($request, $runtime);
    }

    /**
     * @param GetHotspotTagRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetHotspotTagResponse
     */
    public function getHotspotTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['Domain']       = $request->domain;
        $query['Enabled']      = $request->enabled;
        $query['PreviewToken'] = $request->previewToken;
        $query['SubSceneUuid'] = $request->subSceneUuid;
        $query['Type']         = $request->type;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetHotspotTag',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetHotspotTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHotspotTagRequest $request
     *
     * @return GetHotspotTagResponse
     */
    public function getHotspotTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHotspotTagWithOptions($request, $runtime);
    }

    /**
     * @param GetLayoutDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetLayoutDataResponse
     */
    public function getLayoutDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['SubSceneId'] = $request->subSceneId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetLayoutData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLayoutDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLayoutDataRequest $request
     *
     * @return GetLayoutDataResponse
     */
    public function getLayoutData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLayoutDataWithOptions($request, $runtime);
    }

    /**
     * @param GetOriginLayoutDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetOriginLayoutDataResponse
     */
    public function getOriginLayoutDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['SubSceneId'] = $request->subSceneId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetOriginLayoutData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOriginLayoutDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOriginLayoutDataRequest $request
     *
     * @return GetOriginLayoutDataResponse
     */
    public function getOriginLayoutData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOriginLayoutDataWithOptions($request, $runtime);
    }

    /**
     * @param GetOssPolicyRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetOssPolicyResponse
     */
    public function getOssPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['SubSceneId'] = $request->subSceneId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetOssPolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOssPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOssPolicyRequest $request
     *
     * @return GetOssPolicyResponse
     */
    public function getOssPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetPolicyRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetPolicyResponse
     */
    public function getPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['SubSceneUuid'] = $request->subSceneUuid;
        $query['Type']         = $request->type;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetPolicy',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPolicyRequest $request
     *
     * @return GetPolicyResponse
     */
    public function getPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPolicyWithOptions($request, $runtime);
    }

    /**
     * @param GetRectifyImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetRectifyImageResponse
     */
    public function getRectifyImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['SubSceneId'] = $request->subSceneId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetRectifyImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetRectifyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRectifyImageRequest $request
     *
     * @return GetRectifyImageResponse
     */
    public function getRectifyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRectifyImageWithOptions($request, $runtime);
    }

    /**
     * @param GetSceneBuildTaskStatusRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetSceneBuildTaskStatusResponse
     */
    public function getSceneBuildTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['SceneId'] = $request->sceneId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetSceneBuildTaskStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSceneBuildTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSceneBuildTaskStatusRequest $request
     *
     * @return GetSceneBuildTaskStatusResponse
     */
    public function getSceneBuildTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSceneBuildTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetScenePreviewInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetScenePreviewInfoResponse
     */
    public function getScenePreviewInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['Domain']     = $request->domain;
        $query['Enabled']    = $request->enabled;
        $query['ModelToken'] = $request->modelToken;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetScenePreviewInfo',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetScenePreviewInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetScenePreviewInfoRequest $request
     *
     * @return GetScenePreviewInfoResponse
     */
    public function getScenePreviewInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScenePreviewInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetSingleConnDataRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSingleConnDataResponse
     */
    public function getSingleConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['SubSceneId'] = $request->subSceneId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetSingleConnData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSingleConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSingleConnDataRequest $request
     *
     * @return GetSingleConnDataResponse
     */
    public function getSingleConnData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSingleConnDataWithOptions($request, $runtime);
    }

    /**
     * @param GetSubSceneTaskStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetSubSceneTaskStatusResponse
     */
    public function getSubSceneTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['SubSceneId'] = $request->subSceneId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetSubSceneTaskStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSubSceneTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSubSceneTaskStatusRequest $request
     *
     * @return GetSubSceneTaskStatusResponse
     */
    public function getSubSceneTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubSceneTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query           = [];
        $query['TaskId'] = $request->taskId;
        $req             = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetTaskStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTaskStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskStatusRequest $request
     *
     * @return GetTaskStatusResponse
     */
    public function getTaskStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetWindowConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWindowConfigResponse
     */
    public function getWindowConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['PreviewToken'] = $request->previewToken;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetWindowConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetWindowConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWindowConfigRequest $request
     *
     * @return GetWindowConfigResponse
     */
    public function getWindowConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWindowConfigWithOptions($request, $runtime);
    }

    /**
     * @param LabelBuildRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return LabelBuildResponse
     */
    public function labelBuildWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['Mode']    = $request->mode;
        $query['SceneId'] = $request->sceneId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'LabelBuild',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LabelBuildResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LabelBuildRequest $request
     *
     * @return LabelBuildResponse
     */
    public function labelBuild($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->labelBuildWithOptions($request, $runtime);
    }

    /**
     * @param LinkImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return LinkImageResponse
     */
    public function linkImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['CameraHeight'] = $request->cameraHeight;
        $query['FileName']     = $request->fileName;
        $query['Platform']     = $request->platform;
        $query['SubSceneId']   = $request->subSceneId;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'LinkImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return LinkImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LinkImageRequest $request
     *
     * @return LinkImageResponse
     */
    public function linkImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->linkImageWithOptions($request, $runtime);
    }

    /**
     * @param ListProjectRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListProjectResponse
     */
    public function listProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['Name']     = $request->name;
        $query['PageNum']  = $request->pageNum;
        $query['PageSize'] = $request->pageSize;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProjectRequest $request
     *
     * @return ListProjectResponse
     */
    public function listProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProjectWithOptions($request, $runtime);
    }

    /**
     * @param ListSceneRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListSceneResponse
     */
    public function listSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query              = [];
        $query['Name']      = $request->name;
        $query['PageNum']   = $request->pageNum;
        $query['PageSize']  = $request->pageSize;
        $query['ProjectId'] = $request->projectId;
        $req                = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSceneRequest $request
     *
     * @return ListSceneResponse
     */
    public function listScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSceneWithOptions($request, $runtime);
    }

    /**
     * @param ListScenesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListScenesResponse
     */
    public function listScenesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['IsPublishQuery'] = $request->isPublishQuery;
        $query['ProjectId']      = $request->projectId;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListScenes',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListScenesRequest $request
     *
     * @return ListScenesResponse
     */
    public function listScenes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScenesWithOptions($request, $runtime);
    }

    /**
     * @param ListSubSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSubSceneResponse
     */
    public function listSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                   = [];
        $query['PageNum']        = $request->pageNum;
        $query['PageSize']       = $request->pageSize;
        $query['SceneId']        = $request->sceneId;
        $query['ShowLayoutData'] = $request->showLayoutData;
        $req                     = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSubSceneRequest $request
     *
     * @return ListSubSceneResponse
     */
    public function listSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubSceneWithOptions($request, $runtime);
    }

    /**
     * @param OptimizeRightAngleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return OptimizeRightAngleResponse
     */
    public function optimizeRightAngleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['SubSceneId'] = $request->subSceneId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'OptimizeRightAngle',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return OptimizeRightAngleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OptimizeRightAngleRequest $request
     *
     * @return OptimizeRightAngleResponse
     */
    public function optimizeRightAngle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->optimizeRightAngleWithOptions($request, $runtime);
    }

    /**
     * @param PredImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PredImageResponse
     */
    public function predImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['CorrectVertical'] = $request->correctVertical;
        $query['CountDetectDoor'] = $request->countDetectDoor;
        $query['DetectDoor']      = $request->detectDoor;
        $query['SubSceneId']      = $request->subSceneId;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PredImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PredImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PredImageRequest $request
     *
     * @return PredImageResponse
     */
    public function predImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predImageWithOptions($request, $runtime);
    }

    /**
     * @param PredictionWallLineRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PredictionWallLineResponse
     */
    public function predictionWallLineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['CameraHeight'] = $request->cameraHeight;
        $query['Url']          = $request->url;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PredictionWallLine',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PredictionWallLineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PredictionWallLineRequest $request
     *
     * @return PredictionWallLineResponse
     */
    public function predictionWallLine($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->predictionWallLineWithOptions($request, $runtime);
    }

    /**
     * @param PublishHotspotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return PublishHotspotResponse
     */
    public function publishHotspotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ParamTag']     = $request->paramTag;
        $query['SubSceneUuid'] = $request->subSceneUuid;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PublishHotspot',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishHotspotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishHotspotRequest $request
     *
     * @return PublishHotspotResponse
     */
    public function publishHotspot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishHotspotWithOptions($request, $runtime);
    }

    /**
     * @param PublishSceneRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PublishSceneResponse
     */
    public function publishSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['SceneId'] = $request->sceneId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PublishScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishSceneRequest $request
     *
     * @return PublishSceneResponse
     */
    public function publishScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishSceneWithOptions($request, $runtime);
    }

    /**
     * @param PublishStatusRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PublishStatusResponse
     */
    public function publishStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['SceneId'] = $request->sceneId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'PublishStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PublishStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PublishStatusRequest $request
     *
     * @return PublishStatusResponse
     */
    public function publishStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->publishStatusWithOptions($request, $runtime);
    }

    /**
     * @param RecoveryOriginImageRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RecoveryOriginImageResponse
     */
    public function recoveryOriginImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['SubSceneId'] = $request->subSceneId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RecoveryOriginImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecoveryOriginImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecoveryOriginImageRequest $request
     *
     * @return RecoveryOriginImageResponse
     */
    public function recoveryOriginImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoveryOriginImageWithOptions($request, $runtime);
    }

    /**
     * @param RectVerticalRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RectVerticalResponse
     */
    public function rectVerticalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                    = [];
        $query['CountDetectDoor'] = $request->countDetectDoor;
        $query['DetectDoor']      = $request->detectDoor;
        $query['SubSceneId']      = $request->subSceneId;
        $query['VerticalRect']    = $request->verticalRect;
        $req                      = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RectVertical',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RectVerticalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RectVerticalRequest $request
     *
     * @return RectVerticalResponse
     */
    public function rectVertical($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rectVerticalWithOptions($request, $runtime);
    }

    /**
     * @param RectifyImageRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return RectifyImageResponse
     */
    public function rectifyImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['CameraHeight'] = $request->cameraHeight;
        $query['Url']          = $request->url;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RectifyImage',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RectifyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RectifyImageRequest $request
     *
     * @return RectifyImageResponse
     */
    public function rectifyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rectifyImageWithOptions($request, $runtime);
    }

    /**
     * @param RollbackSubSceneRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return RollbackSubSceneResponse
     */
    public function rollbackSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query       = [];
        $query['Id'] = $request->id;
        $req         = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'RollbackSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RollbackSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackSubSceneRequest $request
     *
     * @return RollbackSubSceneResponse
     */
    public function rollbackSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackSubSceneWithOptions($request, $runtime);
    }

    /**
     * @param SaveHotspotConfigRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SaveHotspotConfigResponse
     */
    public function saveHotspotConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ParamTag']     = $request->paramTag;
        $query['PreviewToken'] = $request->previewToken;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SaveHotspotConfig',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SaveHotspotConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveHotspotConfigRequest $request
     *
     * @return SaveHotspotConfigResponse
     */
    public function saveHotspotConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveHotspotConfigWithOptions($request, $runtime);
    }

    /**
     * @param SaveHotspotTagRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SaveHotspotTagResponse
     */
    public function saveHotspotTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ParamTag']     = $request->paramTag;
        $query['SubSceneUuid'] = $request->subSceneUuid;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SaveHotspotTag',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SaveHotspotTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveHotspotTagRequest $request
     *
     * @return SaveHotspotTagResponse
     */
    public function saveHotspotTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveHotspotTagWithOptions($request, $runtime);
    }

    /**
     * @param ScenePublishRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ScenePublishResponse
     */
    public function scenePublishWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['SceneId'] = $request->sceneId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ScenePublish',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ScenePublishResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ScenePublishRequest $request
     *
     * @return ScenePublishResponse
     */
    public function scenePublish($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scenePublishWithOptions($request, $runtime);
    }

    /**
     * @param TempPreviewRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return TempPreviewResponse
     */
    public function tempPreviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['SceneId'] = $request->sceneId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TempPreview',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TempPreviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TempPreviewRequest $request
     *
     * @return TempPreviewResponse
     */
    public function tempPreview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempPreviewWithOptions($request, $runtime);
    }

    /**
     * @param TempPreviewStatusRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return TempPreviewStatusResponse
     */
    public function tempPreviewStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query            = [];
        $query['SceneId'] = $request->sceneId;
        $req              = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TempPreviewStatus',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TempPreviewStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TempPreviewStatusRequest $request
     *
     * @return TempPreviewStatusResponse
     */
    public function tempPreviewStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tempPreviewStatusWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConnDataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateConnDataResponse
     */
    public function updateConnDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query             = [];
        $query['ConnData'] = $request->connData;
        $query['SceneId']  = $request->sceneId;
        $req               = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateConnData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateConnDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConnDataRequest $request
     *
     * @return UpdateConnDataResponse
     */
    public function updateConnData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConnDataWithOptions($request, $runtime);
    }

    /**
     * @param UpdateLayoutDataRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateLayoutDataResponse
     */
    public function updateLayoutDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['LayoutData'] = $request->layoutData;
        $query['SubSceneId'] = $request->subSceneId;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateLayoutData',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateLayoutDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLayoutDataRequest $request
     *
     * @return UpdateLayoutDataResponse
     */
    public function updateLayoutData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLayoutDataWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProjectResponse
     */
    public function updateProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query               = [];
        $query['BusinessId'] = $request->businessId;
        $query['Id']         = $request->id;
        $query['Name']       = $request->name;
        $req                 = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateProject',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProjectRequest $request
     *
     * @return UpdateProjectResponse
     */
    public function updateProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSceneRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateSceneResponse
     */
    public function updateSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query         = [];
        $query['Id']   = $request->id;
        $query['Name'] = $request->name;
        $req           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSceneRequest $request
     *
     * @return UpdateSceneResponse
     */
    public function updateScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSceneWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSubSceneRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateSubSceneResponse
     */
    public function updateSubSceneWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query         = [];
        $query['Id']   = $request->id;
        $query['Name'] = $request->name;
        $req           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UpdateSubScene',
            'version'     => '2020-01-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSubSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSubSceneRequest $request
     *
     * @return UpdateSubSceneResponse
     */
    public function updateSubScene($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSubSceneWithOptions($request, $runtime);
    }
}
