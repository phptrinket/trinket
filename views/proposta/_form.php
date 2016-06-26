<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proposta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proposta-form">

    <?php $form = ActiveForm::begin() ?>

    <?= $model->id_usuario = Yii::$app->user->id ?>

    <?= $model-> id_produto = Yii::$app->request->get('id_produto') ?>

    <?= $form->field($model, 'comentario')->textInput(['maxlength' => true]) ?>

    <?php
        // Formatando a data para que seja legivel
        $data = getdate();

        $dia = $data['mday'];
        $mes = $data['mon'];
        $ano = $data['year'];

        $model->data_oferta = $dia.'-'.$mes.'-'.$ano;

    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Enviar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
