<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ALUNO;
use app\models\TIPOALUNO;
use app\models\CURSO;
use app\models\TURMA;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\MATRICULA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matricula-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'MATRICULA_COD_PK')->textInput(['maxlength' => true]) ?>-->

    <?php
        if ($model->isNewRecord){
            $idAluno = $_GET['idAluno'];
            $modelAluno = ALUNO::find()->where(['ALUNO_COD_PK'=>$idAluno])->one();
            $modelTipo = TIPOALUNO::find()->where(['TIPO_ALUNO_COD_PK'=>$modelAluno->TIPO_ALUNO_COD_FK])->one();

            echo '<b>Código:</b>'.$idAluno.'</br>';
            echo '<b>Nome:</b>'.$modelAluno->ALUNO_NOME.'</br>';
            echo '<b>Tipo:</b>'.$modelAluno->TIPO_ALUNO_NOME.'</br>';
    ?>

    <?=$form->field($model, 'ALUNO_COD_FK')->hiddenInput(['value'=>$idAluno])->label(false);?>
    <?php
        }
        else{
            $id = $_GET['id'];
        
            echo '<b>Código: </b>'.$id.'</br>';
            echo '<b>Nome: </b>'.$model->aLUNOCODFK->ALUNO_NOME.'</br>';
            echo '<b>Tipo: </b>'.$model->aLUNOCODFK->tIPOALUNOCODFK->TIPO_ALUNO_NOME.'</br>';
   
    ?>       
    <?=$form->field($model, 'ALUNO_COD_FK')->hiddenInput(['value'=>$model->aLUNOCODFK->ALUNO_COD_PK])->label(false);?>
    <?php         
        }
    ?>

    <?= $form->field($model,'CURSO_COD_FK')->dropDownList(ArrayHelper::map(CURSO::find()->all(),'CURSO_COD_PK','CURSO_NOME'),
                                                            [
                                                                'prompt'=>'-Selecione-',
                                                                'disabled' => !$model->isNewRecord,
                                                                'onChange'=>'
                                                                    $.post("index.php?r=matricula/listar&id= '.'"+ 
                                                                    $(this).val(),function(data){
                                                                                                    $("select#matricula-turma_cod_fk").html(data);
                                                                });' 
                                                            ]);
    ?>
    <?= $form->field($model,'TURMA_COD_FK')->dropDownList(
        ArrayHelper::map(TURMA::find()->all(),'TURMA_COD_PK','TURMA_DT_INICIO'),
                                                ['prompt'=>'-Selecione-','disable'=>"$model->isNewRecord,"
    ]);
    
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
   
    <?php ActiveForm::end(); ?>

    </div>