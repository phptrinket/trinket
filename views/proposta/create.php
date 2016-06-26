<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Proposta */

$this->title = 'Fazer Proposta';
$this->params['breadcrumbs'][] = ['label' => 'Propostas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proposta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
