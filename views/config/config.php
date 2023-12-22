<?php

use humhub\modules\ui\form\widgets\SortOrderField;
use humhub\modules\ui\form\widgets\ActiveForm;
use humhub\libs\Html;
use yii\helpers\Url;
?>

<div class="panel panel-default">
    <div class="panel-heading"><?= Yii::t('OnlineusersModule.base', '<strong>Online Users</strong> Module Configuration'); ?></div>
    <div class="panel-body">

        <br>

        <?php $form = ActiveForm::begin(); ?>

        <div class="form-group">
            <?= $form->field($model, 'panelTitle'); ?>
            <?= $form->field($model, 'maxMembers'); ?>
            <?= $form->field($model, 'sortOrder')->widget(SortOrderField::class) ?>
        </div>

        <hr>
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>
        <a class="btn btn-default" href="<?= Url::to(['/admin/module']); ?>"><?= Yii::t('OnlineusersModule.base', 'Back to modules'); ?></a>

        <?php ActiveForm::end(); ?>
    </div>
</div>