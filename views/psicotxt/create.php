<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PSICOTXT */

$this->title = 'Create Psicotxt';
$this->params['breadcrumbs'][] = ['label' => 'Psicotxts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psicotxt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
