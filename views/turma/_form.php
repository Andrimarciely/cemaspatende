<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TURMA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="turma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TURMA_COD_PK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TURMA_DT_INICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TURMA_DT_FIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURSO_COD_FK')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
