<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TIPOALUNO */

$this->title = 'Create Tipoaluno';
$this->params['breadcrumbs'][] = ['label' => 'Tipoalunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoaluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
