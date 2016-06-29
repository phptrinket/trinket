<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\DataAtual;

/* @var $this yii\web\View */
/* @var $model app\models\Proposta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proposta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'comentario')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    
    <?= $form->field($model, 'id_usuario')->hiddenInput(['value' => Yii::$app->user->getId()])->label('') ?>

    <?= $form->field($model, 'id_produto')->hiddenInput(['value' =>  Yii::$app->getRequest()->getQueryParam('id_produto')])->label('') ?>

    <?= $form->field($model, 'data_oferta')->hiddenInput(['value' => DataAtual::getData()])->label('') ?>

    <?php ActiveForm::end(); ?>

</div>
