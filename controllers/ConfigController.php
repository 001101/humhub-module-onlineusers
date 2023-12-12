<?php

namespace humhub\modules\onlineusers\controllers;

use Yii;
use humhub\modules\admin\components\Controller;
use humhub\modules\onlineusers\forms\OnlineUsersConfigureForm;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.onlineusers.controllers
 * @author Marjana Pesic
 */

class ConfigController extends Controller
{

    /**
     * Configuration Action for Super Admins
     */
    public function actionConfig()
    {
        $model = new OnlineUsersConfigureForm();
        $model->loadSettings();

        if ($model->load(Yii::$app->request->post()) && $model->saveSettings()) {
            $this->view->saved();
        }

        return $this->render('config', ['model' => $model]);
    }

}
