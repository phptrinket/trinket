<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   <?php foreach($dataProvider->models as $produto): ?>
       <?php if($produto->status != "Vendido") { ?>
            <div class="col-md-4 portfolio-item">
                <a href="?r=proposta%2Fcreate&id_produto=<?=$produto->id?>">
                    <?php
                        $placeholder = "http://placehold.it/700x400";
                        $file = 'image/' . $produto->imagem;
                    ?>
                    <img class="img-responsive" src="<?= file_exists($file) ? $file : $placeholder ?>" alt="Imagem não disponivel"/>
                </a>
                <h3>
                    <?= Html::a($produto->nome,['proposta/create','id_produto' => $produto->id]) ?>
                </h3>
                <p><?=$produto->descricao?></p>
            </div>
        <?php } ?>
    <?php endforeach; ?>
</div>
