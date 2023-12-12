<?php

namespace humhub\modules\onlineusers\forms;

use Yii;

class OnlineUsersConfigureForm extends \yii\base\Model
{

    public $panelTitle;
    public $maxMembers;
    public $sortOrder;


    public function rules()
    {
        return [
            [['maxMembers', 'panelTitle'], 'required'],
            [['maxMembers', 'sortOrder'], 'integer', 'min' => '0'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'panelTitle' => Yii::t('OnlineusersModule.base', 'The panel title for the dashboard widget.'),
            'maxMembers' => Yii::t('OnlineusersModule.base', 'The number of max. online users that will be shown.'),
        ];
    }

    public function loadSettings()
    {
        /** @var Module $module */
        $module = Yii::$app->getModule('onlineusers');
        $settings = $module->settings;

        $this->maxMembers = $settings->get('maxMembers');
        $this->panelTitle = $settings->get('panelTitle');
        $this->sortOrder = $settings->get('sortOrder');

        return true;
    }

    public function saveSettings()
    {
        /** @var Module $module */
        $module = Yii::$app->getModule('onlineusers');
        $settings = $module->settings;

        $settings->set('maxMembers', $this->maxMembers);
        $settings->set('panelTitle', $this->panelTitle);
        $settings->set('sortOrder', $this->sortOrder);
        
        return true;
    }
}
