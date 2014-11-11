<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="site-contact">
    <h2><?= $title;?></h2>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
    <div class="alert alert-success">
        操作成功
    </div>
    <?php endif;?>
</div>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'customer_code') ?>
                <?= $form->field($model, 'customer_name') ?>
                <?= $form->field($model, 'link_man') ?>
                <?= $form->field($model, 'logo_linkman') ?>
                <?= $form->field($model, 'office_address') ?>
                <?= $form->field($model, 'warehouse_address') ?>
                <?= $form->field($model, 'subscribe') ?>
                <?= $form->field($model, 'odo') ?>
                <?= $form->field($model, 'good_order') ?>
                <?= $form->field($model, 'signature') ?>
                <?= $form->field($model, 'relatived_inspe') ?>
                <?= $form->field($model, 'order_limit') ?>
                <?= $form->field($model, 'good_pay') ?>
                <?= $form->field($model, 'memo') ?>

                <div class="form-group">
                    <?= Html::submitButton('保存', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>