<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CURSO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CURSO_NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURSO_CARGA_HORARIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURSO_COD_PK')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
