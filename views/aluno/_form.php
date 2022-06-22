<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TIPOALUNO;
//use yii\jui\DatePicker;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\ALUNO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'ALUNO_NOME')->textInput(['maxlength' => true]) ?>
    <?php 
    echo '<label>Data de Nascimento</label>';
    echo DatePicker::widget([
        'name' => 'ALUNO_DT_NASC', 
        'value' => date('d/m/Y'),
        'options' => ['placeholder' => 'Select issue date ...'],
        'pluginOptions' => [
            'format' => 'dd/mm/yyyy',
            'todayHighlight' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'ALUNO_ENDERECO')->textInput(['maxlength' => true]) ?>

    <?php
    ?>
    
    <?= $form->field($model, 'TIPO_ALUNO_COD_FK')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(TIPOALUNO::find()->asArray()->all(), 'TIPO_ALUNO_COD_PK', 'TIPO_ALUNO_NOME'),

                        'pluginOptions' => [
                            'placeholder' => '- Selecione - ',
                            'allowClear' => true,
                        ]
                    ]);
                    ?>

    <?= $form->field($model,'ALUNO_FOTO')->fileInput() ?>
  
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
