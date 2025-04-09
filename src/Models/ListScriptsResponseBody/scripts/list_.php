<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptsResponseBody\scripts;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var bool
     */
    public $agentLlm;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $debugStatus;

    /**
     * @var bool
     */
    public $emotionEnable;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var bool
     */
    public $isDebugDrafted;

    /**
     * @var bool
     */
    public $isDrafted;

    /**
     * @var bool
     */
    public $isPreset;

    /**
     * @var bool
     */
    public $longWaitEnable;

    /**
     * @var bool
     */
    public $miniPlaybackEnable;

    /**
     * @var bool
     */
    public $newBargeInEnable;

    /**
     * @var string
     */
    public $nluAccessType;

    /**
     * @var string
     */
    public $nluEngine;

    /**
     * @var string
     */
    public $rejectReason;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $scriptDescription;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $agentId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'agentLlm' => 'AgentLlm',
        'createTime' => 'CreateTime',
        'debugStatus' => 'DebugStatus',
        'emotionEnable' => 'EmotionEnable',
        'industry' => 'Industry',
        'isDebugDrafted' => 'IsDebugDrafted',
        'isDrafted' => 'IsDrafted',
        'isPreset' => 'IsPreset',
        'longWaitEnable' => 'LongWaitEnable',
        'miniPlaybackEnable' => 'MiniPlaybackEnable',
        'newBargeInEnable' => 'NewBargeInEnable',
        'nluAccessType' => 'NluAccessType',
        'nluEngine' => 'NluEngine',
        'rejectReason' => 'RejectReason',
        'scene' => 'Scene',
        'scriptDescription' => 'ScriptDescription',
        'scriptId' => 'ScriptId',
        'scriptName' => 'ScriptName',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'agentId' => 'agentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->agentLlm) {
            $res['AgentLlm'] = $this->agentLlm;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->debugStatus) {
            $res['DebugStatus'] = $this->debugStatus;
        }

        if (null !== $this->emotionEnable) {
            $res['EmotionEnable'] = $this->emotionEnable;
        }

        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }

        if (null !== $this->isDebugDrafted) {
            $res['IsDebugDrafted'] = $this->isDebugDrafted;
        }

        if (null !== $this->isDrafted) {
            $res['IsDrafted'] = $this->isDrafted;
        }

        if (null !== $this->isPreset) {
            $res['IsPreset'] = $this->isPreset;
        }

        if (null !== $this->longWaitEnable) {
            $res['LongWaitEnable'] = $this->longWaitEnable;
        }

        if (null !== $this->miniPlaybackEnable) {
            $res['MiniPlaybackEnable'] = $this->miniPlaybackEnable;
        }

        if (null !== $this->newBargeInEnable) {
            $res['NewBargeInEnable'] = $this->newBargeInEnable;
        }

        if (null !== $this->nluAccessType) {
            $res['NluAccessType'] = $this->nluAccessType;
        }

        if (null !== $this->nluEngine) {
            $res['NluEngine'] = $this->nluEngine;
        }

        if (null !== $this->rejectReason) {
            $res['RejectReason'] = $this->rejectReason;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->scriptDescription) {
            $res['ScriptDescription'] = $this->scriptDescription;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['AgentLlm'])) {
            $model->agentLlm = $map['AgentLlm'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DebugStatus'])) {
            $model->debugStatus = $map['DebugStatus'];
        }

        if (isset($map['EmotionEnable'])) {
            $model->emotionEnable = $map['EmotionEnable'];
        }

        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }

        if (isset($map['IsDebugDrafted'])) {
            $model->isDebugDrafted = $map['IsDebugDrafted'];
        }

        if (isset($map['IsDrafted'])) {
            $model->isDrafted = $map['IsDrafted'];
        }

        if (isset($map['IsPreset'])) {
            $model->isPreset = $map['IsPreset'];
        }

        if (isset($map['LongWaitEnable'])) {
            $model->longWaitEnable = $map['LongWaitEnable'];
        }

        if (isset($map['MiniPlaybackEnable'])) {
            $model->miniPlaybackEnable = $map['MiniPlaybackEnable'];
        }

        if (isset($map['NewBargeInEnable'])) {
            $model->newBargeInEnable = $map['NewBargeInEnable'];
        }

        if (isset($map['NluAccessType'])) {
            $model->nluAccessType = $map['NluAccessType'];
        }

        if (isset($map['NluEngine'])) {
            $model->nluEngine = $map['NluEngine'];
        }

        if (isset($map['RejectReason'])) {
            $model->rejectReason = $map['RejectReason'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['ScriptDescription'])) {
            $model->scriptDescription = $map['ScriptDescription'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        return $model;
    }
}
