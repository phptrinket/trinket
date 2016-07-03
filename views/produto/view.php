<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Proposta */


$this->params['breadcrumbs'][] = ['label' => 'Propostas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proposta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-md-9" style="margin-left: 150px">

        <div class="thumbnail">
            <img class="img-responsive" src="image/<?=$model->imagem?>">
            <div class="caption-full">

                <h4><b><?=$model->nome?></b></h4>
                <p><?=$model->descricao?></p>
            </div>
        </div>

        <?php foreach($model->propostas as $proposta): ?>
        <div class="well">

            <p>
            <div class="text-left">
                <b><?= 'Anônimo '.$proposta->id_usuario ?></b>
                <b style="float: right"><?= $proposta->data_oferta ?></b>
            </div>
            </p>
            <hr>
            <p><?= $proposta->comentario ?></p>
            <?php if((Yii::$app->user->id) == ($proposta->id_usuario)) { ?>
                <div class="text-left">
                    <?= Html::a('Excluir proposta', Url::to(['proposta/delete', 'id' => $proposta->id]), [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Tem certeza que quer excluir essa proposta?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </div>
            <?php } ?>
        </div>
        <?php endforeach; ?>
    </div>

</div>
