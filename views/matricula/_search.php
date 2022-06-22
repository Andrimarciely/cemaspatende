<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MatriculaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matricula-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MATRICULA_COD_PK') ?>

    <?= $form->field($model, 'ALUNO_COD_FK') ?>

    <?= $form->field($model, 'CURSO_COD_FK') ?>

    <?= $form->field($model, 'TURMA_COD_FK') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
