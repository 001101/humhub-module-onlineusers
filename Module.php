<?php

namespace humhub\modules\onlineusers;

use yii\helpers\Url;
use humhub\models\Setting;
use humhub\modules\onlineusers\widgets\OnlineUsersSidebarWidget;

class Module extends \humhub\components\Module
{

    public static function onSidebarInit($event)
    {
        $event->sender->addWidget(OnlineUsersSidebarWidget::className(), array(), array('sortOrder' => 250));
    }

    public function getConfigUrl()
    {
        return Url::to(['/onlineusers/config/config']);
    }

    public function enable()
    {
        parent::enable();
        Setting::Set('panelTitle', 'Online Users', 'onlineusers');
        Setting::Set('maxMembers', 100, 'onlineusers');
    }

}

?>
