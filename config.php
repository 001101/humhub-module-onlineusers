<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'onlineusers',
    'class' => 'humhub\modules\onlineusers\Module',
    'namespace' => 'humhub\modules\onlineusers',
    'events' => array(
        array('class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => array('humhub\modules\onlineusers\Module', 'onSidebarInit')),
    ),
];
?>
