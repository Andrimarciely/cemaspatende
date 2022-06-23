<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MATRICULA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matricula-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php

        if ($model->isNewRecord){
            $idAluno = $_GET['idAluno'];
            $modelAluno = ALUNO::find()->where(['ALUNO_COD_PK'=>$idAluno])->one();
            $modelTipo = TIPOALUNO::find()->where(['TIPO_ALUNO_COD_PK'=>$modelAluno->TIPO_ALUNO_COD_FK])->one();
            echo '<b>Código:</b>'.$idAluno.'</br>';
            echo '<b>Nome:</b>'.$modelAluno->ALUNO_NOME.'</br>';
            echo '<b>Tipo:</b>'.$modelTipo->TIPO_ALUNO_NOME.'</br>';
            echo '<b>Tipo:</b>'.$modelTipo->TIPO_ALUNO_NOME.'</br>';
            echo $form->field($model, 'ALUNO_COD_FK')->hiddenInput(['value'=>$idAluno])->label(false);

        }else{
        
            $id = $_GET['id'];
            echo '<b>Código: </b>'.$id.'</br>';
            echo '<b>Nome: </b>'.$model->aLUNOCODFK->ALUNO_NOME.'</br>';
            echo '<b>Tipo: </b>'.$model->aLUNOCODFK->tIPOALUNOCODFK->TIPO_ALUNO_NOME.'</br>';
            echo $form->field($model, 'ALUNO_COD_FK')->hiddenInput(['value'=>$model->aLUNOCODFK->ALUNO_COD_PK])->label(false);
        }
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
   
    <?php ActiveForm::end(); ?>

</div>
