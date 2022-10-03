<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RodaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rota-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'FID') ?>

    <?= $form->field($model, 'NAME') ?>

    <?= $form->field($model, 'SEQUENCE') ?>

    <?= $form->field($model, 'LATITUDE') ?>

    <?= $form->field($model, 'LONGITUDE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
