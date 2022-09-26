<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlunosemedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alunosemed-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CODIGO_SIGEAM') ?>

    <?= $form->field($model, 'ANO_MATRICULA') ?>

    <?= $form->field($model, 'BAIRRO_ALUNO') ?>

    <?= $form->field($model, 'CODIGO_INEP_ALUNO') ?>

    <?= $form->field($model, 'COR') ?>

    <?php // echo $form->field($model, 'CPF_DO_ALUNO') ?>

    <?php // echo $form->field($model, 'CPF_DO_RESPONSAVEL') ?>

    <?php // echo $form->field($model, 'CURSO') ?>

    <?php // echo $form->field($model, 'DATA_DE_NASCIMENTO') ?>

    <?php // echo $form->field($model, 'DATA_DE_OBITO') ?>

    <?php // echo $form->field($model, 'DISTRITO') ?>

    <?php // echo $form->field($model, 'EMAIL_INSTITUCIONAL') ?>

    <?php // echo $form->field($model, 'CODIGO_ESCOLA') ?>

    <?php // echo $form->field($model, 'ESCOLA') ?>

    <?php // echo $form->field($model, 'FASE') ?>

    <?php // echo $form->field($model, 'FASE_ORIGEM') ?>

    <?php // echo $form->field($model, 'GEMEO') ?>

    <?php // echo $form->field($model, 'INDÍGENA') ?>

    <?php // echo $form->field($model, 'MUNICIPIO_ESCOLA') ?>

    <?php // echo $form->field($model, 'MUNICIPIO_NASCIMENTO') ?>

    <?php // echo $form->field($model, 'NACIONALIDADE') ?>

    <?php // echo $form->field($model, 'NECESSIDADES') ?>

    <?php // echo $form->field($model, 'NOME_DA_MAE') ?>

    <?php // echo $form->field($model, 'NOME_DO_PAI') ?>

    <?php // echo $form->field($model, 'PROJETO') ?>

    <?php // echo $form->field($model, 'SEXO') ?>

    <?php // echo $form->field($model, 'TELEFONE') ?>

    <?php // echo $form->field($model, 'TURNO') ?>

    <?php // echo $form->field($model, 'ZONA_DA_ESCOLA') ?>

    <?php // echo $form->field($model, 'NIS') ?>

    <?php // echo $form->field($model, 'TIPO_SANGUINEO') ?>

    <?php // echo $form->field($model, 'LOCALIZACAO') ?>

    <?php // echo $form->field($model, 'RG') ?>

    <?php // echo $form->field($model, 'LOCAL_SALA') ?>

    <?php // echo $form->field($model, 'CARTAO_SUS_ALUNO') ?>

    <?php // echo $form->field($model, 'BOLSA_FAMILIA') ?>

    <?php // echo $form->field($model, 'IMC') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
