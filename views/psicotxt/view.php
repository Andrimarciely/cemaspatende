<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PSICOTXT */

$this->title = $model->CODIGO_ENCAMINHAMENTO;
$this->params['breadcrumbs'][] = ['label' => 'Psicotxts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="psicotxt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CODIGO_ENCAMINHAMENTO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CODIGO_ENCAMINHAMENTO], [
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
            'CODIGO_ENCAMINHAMENTO',
            'STATUS_ATENDIMENTO',
            'ANO_LETIVO',
            'NOME_POLO',
            'NOME_MOTIVO',
            'ZONA',
            'CODIGO_ESCOLA',
            'NOME_ESCOLA',
            'CODIGO_ALUNO',
            'NOME_ALUNO',
            'ENDERECO_ALUNO',
            'BAIRRO_ALUNO',
            'MUNICIPIO_ALUNO',
            'NOME_ENSINO',
            'FASE',
            'NOME_PROJETO',
            'TURNO',
            'TURMA',
            'COMUNICOU_PAIS',
            'MATRICULA_PEDAGOGO',
            'NOME_PEDAGOGO',
            'DATA_ENCAMINHAMENTO',
            'MES_ENCAMINHAMENTO',
            'MATRICULA_PROFESSOR',
            'NOME_PROFESSOR',
            'DATA_CONVOCACAO_RESP',
            'DATA_ORIENTACAO',
            'STATUS_ALUNO',
            'RECEBE_BOLSA_FAMILIA',
            'NOME_PROFISSAO',
            'MATRICULA_PROFISSIONAL',
            'NOME_PROFISSIONAL',
            'DATA_PARECER_TEC',
            'QUANT_LIGACAO_TEL',
            'QUANT_CONTATO_REDESOCIAL',
            'STATUS_VISITA',
            'JUSTIF_INFREQUENCIA',
        ],
    ]) ?>

</div>
