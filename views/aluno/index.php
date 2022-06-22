<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alunos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Aluno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ALUNO_COD_PK',
            'ALUNO_NOME',
            [
                'attribute'=>'TIPO_ALUNO_COD_FK',
                'value'=>function($data){
                    return $data -> TIPO_ALUNO_COD_FK -> TIPO_ALUNO_NOME;}
                ],
            'ALUNO_DT_NASC',
            'ALUNO_ENDERECO',
            'ALUNO_FOTO',
            //'TIPO_ALUNO_COD_FK',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
