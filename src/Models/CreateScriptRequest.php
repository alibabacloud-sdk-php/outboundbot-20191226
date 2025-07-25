<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateScriptRequest extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var bool
     */
    public $agentLlm;

    /**
     * @example {\\"appKey\\":\\"kknxKIhTTUcpCzYX\\",\\"maxEndSilence\\":\\"400\\",\\"silenceTimeout\\":\\"5\\"}
     *
     * @var string
     */
    public $asrConfig;

    /**
     * @example chatbot-cn-IfaUfqaUnb
     *
     * @var string
     */
    public $chatbotId;

    /**
     * @example true
     *
     * @var bool
     */
    public $emotionEnable;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $industry;

    /**
     * @description This parameter is required.
     *
     * @example c46001bc-3ead-4bfd-9a69-4b5b66a4a3f4
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $longWaitEnable;

    /**
     * @example true
     *
     * @var bool
     */
    public $miniPlaybackEnable;

    /**
     * @example true
     *
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $scene;

    /**
     * @example []
     *
     * @var string[]
     */
    public $scriptContent;

    /**
     * @var string
     */
    public $scriptDescription;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $scriptNluProfileJsonString;

    /**
     * @example []
     *
     * @var string[]
     */
    public $scriptWaveform;

    /**
     * @example {\\"voice\\":\\"aixia\\",\\"volume\\":\\"50\\",\\"speechRate\\":\\"-150\\",\\"pitchRate\\":\\"0\\"}
     *
     * @var string
     */
    public $ttsConfig;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentKey' => 'AgentKey',
        'agentLlm' => 'AgentLlm',
        'asrConfig' => 'AsrConfig',
        'chatbotId' => 'ChatbotId',
        'emotionEnable' => 'EmotionEnable',
        'industry' => 'Industry',
        'instanceId' => 'InstanceId',
        'longWaitEnable' => 'LongWaitEnable',
        'miniPlaybackEnable' => 'MiniPlaybackEnable',
        'newBargeInEnable' => 'NewBargeInEnable',
        'nluAccessType' => 'NluAccessType',
        'nluEngine' => 'NluEngine',
        'scene' => 'Scene',
        'scriptContent' => 'ScriptContent',
        'scriptDescription' => 'ScriptDescription',
        'scriptName' => 'ScriptName',
        'scriptNluProfileJsonString' => 'ScriptNluProfileJsonString',
        'scriptWaveform' => 'ScriptWaveform',
        'ttsConfig' => 'TtsConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->agentLlm) {
            $res['AgentLlm'] = $this->agentLlm;
        }
        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = $this->asrConfig;
        }
        if (null !== $this->chatbotId) {
            $res['ChatbotId'] = $this->chatbotId;
        }
        if (null !== $this->emotionEnable) {
            $res['EmotionEnable'] = $this->emotionEnable;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }
        if (null !== $this->scriptDescription) {
            $res['ScriptDescription'] = $this->scriptDescription;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->scriptNluProfileJsonString) {
            $res['ScriptNluProfileJsonString'] = $this->scriptNluProfileJsonString;
        }
        if (null !== $this->scriptWaveform) {
            $res['ScriptWaveform'] = $this->scriptWaveform;
        }
        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = $this->ttsConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['AgentLlm'])) {
            $model->agentLlm = $map['AgentLlm'];
        }
        if (isset($map['AsrConfig'])) {
            $model->asrConfig = $map['AsrConfig'];
        }
        if (isset($map['ChatbotId'])) {
            $model->chatbotId = $map['ChatbotId'];
        }
        if (isset($map['EmotionEnable'])) {
            $model->emotionEnable = $map['EmotionEnable'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['ScriptContent'])) {
            if (!empty($map['ScriptContent'])) {
                $model->scriptContent = $map['ScriptContent'];
            }
        }
        if (isset($map['ScriptDescription'])) {
            $model->scriptDescription = $map['ScriptDescription'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['ScriptNluProfileJsonString'])) {
            $model->scriptNluProfileJsonString = $map['ScriptNluProfileJsonString'];
        }
        if (isset($map['ScriptWaveform'])) {
            if (!empty($map['ScriptWaveform'])) {
                $model->scriptWaveform = $map['ScriptWaveform'];
            }
        }
        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = $map['TtsConfig'];
        }

        return $model;
    }
}
