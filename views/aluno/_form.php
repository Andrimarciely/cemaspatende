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
    ?>
    <?php echo $form->field($model, 'ALUNO_DT_NASC')->widget(DatePicker::className(),[
                        'name'=>'ALUNO_DT_NASC',
                       // 'type' => DatePicker::TYPE_INPUT,
                        'pluginOptions' => [
                            'format' => 'dd/mm/yyyy',
                            'autoclose'=>true,
                            'todayHighlight' => true
                        ],
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
    
    
   
  
    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
