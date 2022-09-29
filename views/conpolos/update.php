<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CONPOLOS */

$this->title = 'Update Conpolos: ' . $model->COD_POLO;
$this->params['breadcrumbs'][] = ['label' => 'Conpolos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COD_POLO, 'url' => ['view', 'id' => $model->COD_POLO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="conpolos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
