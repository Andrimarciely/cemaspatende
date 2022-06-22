<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CURSO */

$this->title = 'Update Curso: ' . $model->CURSO_COD_PK;
$this->params['breadcrumbs'][] = ['label' => 'Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CURSO_COD_PK, 'url' => ['view', 'id' => $model->CURSO_COD_PK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="curso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
