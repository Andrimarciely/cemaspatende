<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PSICOTXT */

$this->title = 'Update Psicotxt: ' . $model->CODIGO_ENCAMINHAMENTO;
$this->params['breadcrumbs'][] = ['label' => 'Psicotxts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CODIGO_ENCAMINHAMENTO, 'url' => ['view', 'id' => $model->CODIGO_ENCAMINHAMENTO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="psicotxt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
