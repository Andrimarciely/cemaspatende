<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ALUNO */

$this->title = 'Update Aluno: ' . $model->ALUNO_COD_PK;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ALUNO_COD_PK, 'url' => ['view', 'id' => $model->ALUNO_COD_PK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
