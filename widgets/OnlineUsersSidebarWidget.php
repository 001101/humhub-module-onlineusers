<?php

namespace humhub\modules\onlineusers\widgets;

use Yii;
use yii\helpers\Url;
use humhub\modules\user\models\User;
use humhub\modules\user\components\Session;
use yii\web\HttpException;

/**
 * Shows online users as a sidebar widget on the dashboard
 *
 * originally coded from Andreas Strobel on humhub-new-members-module
 *
 * @package humhub.modules_core.directory.widgets
 * @since 0.11
 * @author 001101
 */
class OnlineUsersSidebarWidget extends \yii\base\Widget
{

    /**
     * Execute widget
     */
    public function run()
    {
        $maxMembers = (int) Yii::$app->getModule('onlineusers')->settings->get('maxMembers');
        $panelTitle = Yii::$app->getModule('onlineusers')->settings->get('panelTitle');

        $OnlineUsersQuery = Session::getOnlineUsers();
        $OnlineUsersQuery->limit($maxMembers);
        $OnlineUsersQuery->andWhere(['user.status' => User::STATUS_ENABLED]);

        $OnlineUsers = $OnlineUsersQuery->all();

        if (count($OnlineUsers) == 0) {
            return;
        }

        return $this->render('onlineusers', ['OnlineUsers' => $OnlineUsers, 'title' => $panelTitle]);
    }

}
