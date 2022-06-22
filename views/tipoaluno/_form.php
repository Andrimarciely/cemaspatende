<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOALUNO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipoaluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TIPO_ALUNO_COD_PK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIPO_ALUNO_NOME')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
