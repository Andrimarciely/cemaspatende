<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOALUNO */

$this->title = 'Update Tipoaluno: ' . $model->TIPO_ALUNO_COD_PK;
$this->params['breadcrumbs'][] = ['label' => 'Tipoalunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TIPO_ALUNO_COD_PK, 'url' => ['view', 'id' => $model->TIPO_ALUNO_COD_PK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipoaluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
