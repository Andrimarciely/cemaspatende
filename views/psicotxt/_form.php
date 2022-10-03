<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PSICOTXT */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="psicotxt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CODIGO_ENCAMINHAMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_ATENDIMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ANO_LETIVO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_POLO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_MOTIVO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ZONA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODIGO_ESCOLA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_ESCOLA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODIGO_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ENDERECO_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BAIRRO_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MUNICIPIO_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_ENSINO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FASE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_PROJETO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TURNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TURMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COMUNICOU_PAIS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MATRICULA_PEDAGOGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_PEDAGOGO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_ENCAMINHAMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MES_ENCAMINHAMENTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MATRICULA_PROFESSOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_PROFESSOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_CONVOCACAO_RESP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_ORIENTACAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_ALUNO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RECEBE_BOLSA_FAMILIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_PROFISSAO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MATRICULA_PROFISSIONAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME_PROFISSIONAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_PARECER_TEC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QUANT_LIGACAO_TEL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QUANT_CONTATO_REDESOCIAL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_VISITA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JUSTIF_INFREQUENCIA')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
