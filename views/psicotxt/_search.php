<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PsicotxtSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="psicotxt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CODIGO_ENCAMINHAMENTO') ?>

    <?= $form->field($model, 'STATUS_ATENDIMENTO') ?>

    <?= $form->field($model, 'ANO_LETIVO') ?>

    <?= $form->field($model, 'NOME_POLO') ?>

    <?= $form->field($model, 'NOME_MOTIVO') ?>

    <?php // echo $form->field($model, 'ZONA') ?>

    <?php // echo $form->field($model, 'CODIGO_ESCOLA') ?>

    <?php // echo $form->field($model, 'NOME_ESCOLA') ?>

    <?php // echo $form->field($model, 'CODIGO_ALUNO') ?>

    <?php // echo $form->field($model, 'NOME_ALUNO') ?>

    <?php // echo $form->field($model, 'ENDERECO_ALUNO') ?>

    <?php // echo $form->field($model, 'BAIRRO_ALUNO') ?>

    <?php // echo $form->field($model, 'MUNICIPIO_ALUNO') ?>

    <?php // echo $form->field($model, 'NOME_ENSINO') ?>

    <?php // echo $form->field($model, 'FASE') ?>

    <?php // echo $form->field($model, 'NOME_PROJETO') ?>

    <?php // echo $form->field($model, 'TURNO') ?>

    <?php // echo $form->field($model, 'TURMA') ?>

    <?php // echo $form->field($model, 'COMUNICOU_PAIS') ?>

    <?php // echo $form->field($model, 'MATRICULA_PEDAGOGO') ?>

    <?php // echo $form->field($model, 'NOME_PEDAGOGO') ?>

    <?php // echo $form->field($model, 'DATA_ENCAMINHAMENTO') ?>

    <?php // echo $form->field($model, 'MES_ENCAMINHAMENTO') ?>

    <?php // echo $form->field($model, 'MATRICULA_PROFESSOR') ?>

    <?php // echo $form->field($model, 'NOME_PROFESSOR') ?>

    <?php // echo $form->field($model, 'DATA_CONVOCACAO_RESP') ?>

    <?php // echo $form->field($model, 'DATA_ORIENTACAO') ?>

    <?php // echo $form->field($model, 'STATUS_ALUNO') ?>

    <?php // echo $form->field($model, 'RECEBE_BOLSA_FAMILIA') ?>

    <?php // echo $form->field($model, 'NOME_PROFISSAO') ?>

    <?php // echo $form->field($model, 'MATRICULA_PROFISSIONAL') ?>

    <?php // echo $form->field($model, 'NOME_PROFISSIONAL') ?>

    <?php // echo $form->field($model, 'DATA_PARECER_TEC') ?>

    <?php // echo $form->field($model, 'QUANT_LIGACAO_TEL') ?>

    <?php // echo $form->field($model, 'QUANT_CONTATO_REDESOCIAL') ?>

    <?php // echo $form->field($model, 'STATUS_VISITA') ?>

    <?php // echo $form->field($model, 'JUSTIF_INFREQUENCIA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
