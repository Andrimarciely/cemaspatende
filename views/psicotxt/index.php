<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Psicotxt';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psicotxt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Psicotxt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CODIGO_ENCAMINHAMENTO',
            'STATUS_ATENDIMENTO',
            'ANO_LETIVO',
            'NOME_POLO',
            'NOME_MOTIVO',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
