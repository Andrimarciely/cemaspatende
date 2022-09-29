<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TXTALUNO */

$this->title = $model->CODIGO_SIGEAM;
$this->params['breadcrumbs'][] = ['label' => 'Txtalunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="txtaluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CODIGO_SIGEAM], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CODIGO_SIGEAM], [
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
            'CODIGO_SIGEAM',
            'ANO_MATRICULA',
            'BAIRRO_ALUNO',
            'CODIGO_INEP_ALUNO',
            'COR',
            'CPF_DO_ALUNO',
            'CPF_DO_RESPONSAVEL',
            'CURSO',
            'DATA_DE_NASCIMENTO',
            'DATA_DE_OBITO',
            'DISTRITO',
            'EMAIL_INSTITUCIONAL:email',
            'CODIGO_ESCOLA',
            'ESCOLA',
            'FASE',
            'FASE_ORIGEM',
            'GEMEO',
            'INDÍGENA',
            'MUNICIPIO_ESCOLA',
            'MUNICIPIO_NASCIMENTO',
            'NACIONALIDADE',
            'NECESSIDADES',
            'NOME_DA_MAE',
            'NOME_DO_PAI',
            'PROJETO',
            'SEXO',
            'TELEFONE',
            'TURNO',
            'ZONA_DA_ESCOLA',
            'NIS',
            'TIPO_SANGUINEO',
            'LOCALIZACAO',
            'RG',
            'LOCAL_SALA',
            'CARTAO_SUS_ALUNO',
            'BOLSA_FAMILIA',
            'IMC',
        ],
    ]) ?>

</div>
