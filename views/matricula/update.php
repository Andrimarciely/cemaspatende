<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MATRICULA */

$this->title = 'Update Matricula: ' . $model->MATRICULA_COD_PK;
$this->params['breadcrumbs'][] = ['label' => 'Matriculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MATRICULA_COD_PK, 'url' => ['view', 'id' => $model->MATRICULA_COD_PK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matricula-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
