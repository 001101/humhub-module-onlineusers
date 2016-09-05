<?php
namespace humhub\modules\onlineusers\forms;
use Yii;

class OnlineUsersConfigureForm extends \yii\base\Model
{

    public $panelTitle;
    public $maxMembers;


    public function rules()
    {
        return array(
            array(['maxMembers', 'panelTitle'], 'required'),
            array('maxMembers', 'integer', 'min' => '0'),

        );
    }

    public function attributeLabels()
    {
        return array(
            'panelTitle' => Yii::t('OnlineusersModule.base', 'The panel title for the dashboard widget.'),
            'maxMembers' => Yii::t('OnlineusersModule.base', 'The number of max. online users that will be shown.'),
        );
    }

}
