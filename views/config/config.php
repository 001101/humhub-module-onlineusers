<?php

use yii\helpers\Url;
use yii\helpers\Html;
use humhub\compat\CActiveForm;
?>

<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('OnlineusersModule.base', '<strong>Online Users</strong> Module Configuration'); ?></div>
    <div class="panel-body">

        <br>

        <?php $form = CActiveForm::begin(); ?>
        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'panelTitle'); ?>
            <?php echo $form->textField($model, 'panelTitle', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'panelTitle'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'maxMembers'); ?>
            <?php echo $form->textField($model, 'maxMembers', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'maxMembers'); ?>
        </div>


        <hr>
        <?php echo Html::submitButton(Yii::t('OnlineusersModule.base', 'Save'), array('class' => 'btn btn-primary')); ?>
        <a class="btn btn-default"
           href="<?php echo Url::to(['/admin/module']); ?>"><?php echo Yii::t('OnlineusersModule.base', 'Back to modules'); ?></a>

        <!-- show flash message after saving -->
        <?php echo humhub\widgets\DataSaved::widget(); ?>

        <?php CActiveForm::end(); ?>
    </div>
</div>