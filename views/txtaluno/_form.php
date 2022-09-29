<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TXTALUNO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="txtaluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CODIGO_SIGEAM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ANO_MATRICULA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BAIRRO_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODIGO_INEP_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CPF_DO_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CPF_DO_RESPONSAVEL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURSO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_DE_NASCIMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_DE_OBITO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DISTRITO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL_INSTITUCIONAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODIGO_ESCOLA')->textInput() ?>

    <?= $form->field($model, 'ESCOLA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FASE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FASE_ORIGEM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GEMEO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'INDÍGENA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MUNICIPIO_ESCOLA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MUNICIPIO_NASCIMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NACIONALIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NECESSIDADES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_DA_MAE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_DO_PAI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROJETO')->textInput() ?>

    <?= $form->field($model, 'SEXO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TURNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ZONA_DA_ESCOLA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIPO_SANGUINEO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOCALIZACAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOCAL_SALA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CARTAO_SUS_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BOLSA_FAMILIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IMC')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
