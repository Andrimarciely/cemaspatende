<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CONPOLOS */

$this->title = 'Create Conpolos';
$this->params['breadcrumbs'][] = ['label' => 'Conpolos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conpolos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
