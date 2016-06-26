<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropostaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Propostas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proposta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Proposta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_usuario',
            'id_produto',
            'comentario',
            'data_oferta',
            // 'data_conclusao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
