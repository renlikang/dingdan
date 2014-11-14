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
                <?= $form->field($model, 'cw_csode') ?>
                <?= $form->field($model, 'shop_name') ?>
                <?= $form->field($model, 'souhuoren') ?>
                <?= $form->field($model, 'souhuo_address') ?>
                <?= $form->field($model, 'lianxifangshi') ?>
                <?= $form->field($model, 'customer_type')->dropDownList(yii::$app->params['customer_type'],['prompt' => '--请选择客户类型--']); ?>
                <?= $form->field($model, 'rebate_type')->dropDownList(yii::$app->params['rebate_type'],['prompt' => '--请选择返利类型--']); ?>
                <?= $form->field($model, 'rebate')->textInput(['class'=>"form-control",'placeholder'=>'%']); ?>
                <?= $form->field($model, 'account') ?>
                <?= $form->field($model, 'file_address') ?>
                <?= $form->field($model, 'memo')->textarea(['class'=>"form-control",'rows'=>"5"]); ?>
                <div class="form-group">
                    <?= Html::submitButton('保存', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>