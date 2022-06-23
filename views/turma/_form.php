<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TURMA;

/* @var $this yii\web\View */
/* @var $model app\models\TURMA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="turma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TURMA_COD_PK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TURMA_DT_INICIO')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'TURMA_DT_INICIO')->widget(DatePicker::className(),[
                        'name'=>'TURMA_DT_INICIO',
                       // 'type' => DatePicker::TYPE_INPUT,
                        'pluginOptions' => [
                            'format' => 'dd/mm/yyyy',
                            'autoclose'=>true,
                            'todayHighlight' => true
                        ],
                    ]); 
        ?>

    <?php echo $form->field($model, 'TURMA_DT_FIM')->widget(DatePicker::className(),[
                        'name'=>'TURMA_DT_FIM',
                       // 'type' => DatePicker::TYPE_INPUT,
                        'pluginOptions' => [
                            'format' => 'dd/mm/yyyy',
                            'autoclose'=>true,
                            'todayHighlight' => true
                        ],
                    ]); 
        ?>

    
    <?= $form->field($model, 'CURSO_COD_FK')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(TIPOALUNO::find()->asArray()->all(), 'CURSO_COD_PK', 'CURSO_NOME'),

                        'pluginOptions' => [
                            'placeholder' => '- Selecione - ',
                            'allowClear' => true,
                        ]
                    ]);
                    ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
