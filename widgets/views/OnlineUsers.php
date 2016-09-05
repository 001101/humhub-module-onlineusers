<?php

use yii\helpers\Html;
?>

<div class="panel panel-default members" id="online-users-panel">
    <?php echo \humhub\widgets\PanelMenu::widget(array('id' => 'online-users-panel')); ?>

    <div class="panel-heading">
        <?php echo $title; ?>
    </div>
    <div class="panel-body">
        <?php foreach ($OnlineUsers as $user) : ?>
            <a href="<?php echo $user->getUrl(); ?>">
                <img src="<?php echo $user->getProfileImage()->getUrl(); ?>" class="img-rounded tt img_margin"
                     height="40" width="40" alt="40x40" data-src="holder.js/40x40"
                     style="width: 40px; height: 40px;"
                     data-toggle="tooltip" data-placement="top" title=""
                     data-original-title="<?php echo Html::encode($user->displayName); ?>">
            </a>
        <?php endforeach; ?>
    </div>
</div>