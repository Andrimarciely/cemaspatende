<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlunoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ALUNO_COD_PK') ?>

    <?= $form->field($model, 'ALUNO_NOME') ?>

    <?= $form->field($model, 'ALUNO_DT_NASC') ?>

    <?= $form->field($model, 'ALUNO_ENDERECO') ?>

    <?= $form->field($model, 'ALUNO_FOTO') ?>

    <?php // echo $form->field($model, 'TIPO_ALUNO_COD_FK') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
