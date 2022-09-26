<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ALUNOSEMED */

$this->title = 'Create Alunosemed';
$this->params['breadcrumbs'][] = ['label' => 'Alunosemeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alunosemed-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
