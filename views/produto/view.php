<?php

use yii\helpers\Html;
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
            <p><?= $proposta->comentario ?></p>

            <div class="text-left">
                <a class="btn btn-primary">Aceitar Proposta</a>
                <a class="btn btn-danger">Rejeitar Proposta</a>
            </div>

        </div>
        <?php endforeach; ?>
    </div>

</div>
