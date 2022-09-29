<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TXTALUNO */

$this->title = 'Create Txtaluno';
$this->params['breadcrumbs'][] = ['label' => 'Txtalunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="txtaluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
