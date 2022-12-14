<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TURMA */

$this->title = 'Update Turma: ' . $model->TURMA_COD_PK;
$this->params['breadcrumbs'][] = ['label' => 'Turmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TURMA_COD_PK, 'url' => ['view', 'id' => $model->TURMA_COD_PK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="turma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
