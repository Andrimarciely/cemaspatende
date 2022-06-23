<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MatriculaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matriculas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matricula-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Matricula', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MATRICULA_COD_PK',
            [
                'attribute'=>'ALUNO_COD_FK',
                'value'=>function($data){
                            return $data->aLUNOCODFK->ALUNO_NOME;
                }
            ],
            [
                'attribute'=>'CURSO_COD_FK',
                'value'=>function($data){
                            return $data->cURSOCODFK->CURSO_NOME;
                }
            ],
            [
                'attribute'=>'TURMA_COD_FK',
                'value'=>function($data){
                            return $data->tURMACODFK->TURMA_DT_INICIO."-".$data->tURMACODFK->TURMA_DT_FIM;
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
