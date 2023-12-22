<?php

namespace humhub\modules\onlineusers;

use Yii;
use yii\helpers\Url;
use humhub\modules\onlineusers\widgets\OnlineUsersSidebarWidget;

class Module extends \humhub\components\Module
{

    public static function onSidebarInit($event)
    {
        $module = Yii::$app->getModule('onlineusers');

        $event->sender->addWidget(OnlineUsersSidebarWidget::class, [], ['sortOrder' => $module->settings->get('sortOrder')]);
    }

    public function getConfigUrl()
    {
        return Url::to(['/onlineusers/config/config']);
    }

    public function enable()
    {
        parent::enable();
        $this->settings->set('panelTitle');
        $this->settings->set('maxMembers', 70);
    }

}

?>
