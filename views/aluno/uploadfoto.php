<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;


use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\ALUNO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

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
    
    
   
  
    <div class="form-group">
        <?= Html::submitButton('Próximo', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>