<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */


$this->params['breadcrumbs'][] = ['label' => 'Produto', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nome',
            'descricao',
            
            [
                'attribute'=>'imagem',
                'value'=>'image/' .$model->imagem,
                'format' => ['image',['width'=>'300','height'=>'300']],
            ],
        ],
    ]) ?>
  <!--  <p>
        <?/*= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) */?>
        <?/*= Html::a('Deletar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Excluir produto?',
                'method' => 'post',
            ],
        ]) */?>
    </p>-->

    <p style="text-align: right">
        <?= Html::a('Fazer proposta!!', ['proposta/create', $model->propostas, 'id_produto' => $model->id ], ['class' => 'btn btn-primary']) ?>
    </p>

</div>


