<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ALUNO */

$this->title = $model->ALUNO_COD_PK;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ALUNO_COD_PK], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ALUNO_COD_PK], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ALUNO_COD_PK',
            'ALUNO_NOME',
            'ALUNO_DT_NASC',
            'ALUNO_ENDERECO',
            'ALUNO_FOTO',
            [
               'attribute'=>'TIPO_ALUNO_COD_FK',
               'value'=>function($data){ 
                   return '('.$data ->tIPOALUNOCODFK->TIPO_ALUNO_COD_PK.') '.$data ->tIPOALUNOCODFK->TIPO_ALUNO_NOME;
                        }
            ],
        ],
    ]) ?>

</div>
