<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Trinket';
?>


<div class="site-index">

    

    <div class="jumbotron">


        <div id="logo"><?php echo "<img src=\"image/logo.jpg\">"; ?></div>


        <h1>Bem vindo a Trinket</h1>

        <p class="lead">Um site feito para trocas de forma rápida, segura e inteligente.</p>

    ola l
        <p>
            <?= Html::a('Cadastre-se', ['usuario/create'], ['class' => 'btn  btn-lg btn-primary']) ?>
        </p>




    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2></h2>

                <p></p>




            </div>
            <div class="col-lg-4">
                <h2></h2>

                <p></p>


            </div>
            <div class="col-lg-4">
                <h2></h2>

                <p>


                </p>

                
            </div>
        </div>

    </div>
</div>
