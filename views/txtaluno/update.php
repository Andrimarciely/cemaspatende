<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TXTALUNO */

$this->title = 'Update Txtaluno: ' . $model->CODIGO_SIGEAM;
$this->params['breadcrumbs'][] = ['label' => 'Txtalunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CODIGO_SIGEAM, 'url' => ['view', 'id' => $model->CODIGO_SIGEAM]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="txtaluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
