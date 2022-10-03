<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ROTA */

$this->title = 'Update Rota: ' . $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'Rotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NAME, 'url' => ['view', 'id' => $model->NAME]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
