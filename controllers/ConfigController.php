<?php

namespace humhub\modules\onlineusers\controllers;

use Yii;
use humhub\modules\admin\components\Controller;
use humhub\modules\onlineusers\forms\OnlineUsersConfigureForm;
use humhub\models\Setting;

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
        $form = new OnlineUsersConfigureForm();
        $form->panelTitle = Setting::Get('panelTitle', 'onlineusers');
        $form->maxMembers = Setting::Get('maxMembers', 'onlineusers');

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $form->panelTitle = Setting::Set('panelTitle', $form->panelTitle, 'onlineusers');
            $form->maxMembers = Setting::Set('maxMembers', $form->maxMembers, 'onlineusers');

/* ToDo: integrate list from most-active-users at a specific user amount */

            Yii::$app->getSession()->setFlash('data-saved', Yii::t('AdminModule.controllers_SettingController', 'Saved'));
            $this->redirect(['/onlineusers/config/config']);
        }

        return $this->render('config', array('model' => $form));
    }

}

?>
