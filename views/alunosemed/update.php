<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ALUNOSEMED */

$this->title = 'Update Alunosemed: ' . $model->CODIGO_SIGEAM;
$this->params['breadcrumbs'][] = ['label' => 'Alunosemeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CODIGO_SIGEAM, 'url' => ['view', 'id' => $model->CODIGO_SIGEAM]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alunosemed-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
