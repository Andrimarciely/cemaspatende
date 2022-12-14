<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TurmaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Turmas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Turma', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'TURMA_COD_PK',
            [
                'attribute'=>'CURSO_COD_FK',
                'value' =>function($data){
                            return $data->cURSOCODFK->CURSO_NOME;
                }
            ],
            'TURMA_DT_INICIO',
            'TURMA_DT_FIM',
            ['class' => 'yii\grid\ActionColumn']
        ]
    ]); ?>
</div>
