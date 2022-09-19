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
                            return '('.$data ->tIPOALUNOCODFK->TIPO_ALUNO_COD_PK.') '.$data ->tIPOALUNOCODFK->TIPO_ALUNO_NOME;
                        }
             ],
            'ALUNO_DT_NASC',
            'ALUNO_ENDERECO',
            [
                'attribute'=>'ALUNO_FOTO',
                'format'=>'html',
                'label'=>'Foto do Aluno',
                'headerOptions'=>[
                    'style'=>'widh:90px;'
                ],
                'value'=> function($data){
                    return Html::img(Yii::getAlias('@web').'/img/'.$data['ALUNO_FOTO'],['width' =>'100px']);
                }
            ],
            ['class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update} {delete} {matricula} ',
                        'header'=>'Ações',
                        'headerOptions'=>[
                            'style'=>'width:90px; text-align: center;'
                        ],
                        'buttons' => [
                        'matricula' => function ($url, $model, $key) {
                                        return Html::a( '<span class="glyphicon glyphicon-plus" ></span>',
                                                        'index.php?r=matricula/create&id='.$model->ALUNO_COD_PK,
                                                        ['title' => 'Matrícula']);
                                        },
                                    ],
            ],
          ],
       ]);
    ?>
</div>
