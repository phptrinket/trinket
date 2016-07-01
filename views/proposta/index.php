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


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [

            'id_produto',
            //'id',
            //'id_usuario',
            //'id_produto',
            'comentario',
            'data_oferta',
            // 'data_conclusao',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
