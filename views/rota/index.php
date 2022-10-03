<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RodaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rota-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FID',
            'NAME',
            'SEQUENCE',
            'LATITUDE',
            'LONGITUDE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
