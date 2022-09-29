<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CONPOLOS */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="conpolos-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'COD_POLO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCRICAO_POLO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ENDERECO_POLO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
