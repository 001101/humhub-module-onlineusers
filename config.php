<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'onlineusers',
    'class' => 'humhub\modules\onlineusers\Module',
    'namespace' => 'humhub\modules\onlineusers',
    'events' => [
        ['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => ['humhub\modules\onlineusers\Module', 'onSidebarInit']],
    ],
];
