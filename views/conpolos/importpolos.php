<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<div class="row">
        <h3>Import de Polos do CEMASP</h3>
        Para realizar o import é necessário:<br>
        1 - Entrar no SIGEAM e executar o comando <b>CONLOTES</b>

    </div>
    
<?php ActiveForm::end() ?>

