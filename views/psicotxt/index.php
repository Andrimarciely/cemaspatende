<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PsicotxtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Psicotxts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psicotxt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Psicotxt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CODIGO_ENCAMINHAMENTO',
            'STATUS_ATENDIMENTO',
            'ANO_LETIVO',
            'NOME_POLO',
            'NOME_MOTIVO',
            //'ZONA',
            //'CODIGO_ESCOLA',
            //'NOME_ESCOLA',
            //'CODIGO_ALUNO',
            //'NOME_ALUNO',
            //'ENDERECO_ALUNO',
            //'BAIRRO_ALUNO',
            //'MUNICIPIO_ALUNO',
            //'NOME_ENSINO',
            //'FASE',
            //'NOME_PROJETO',
            //'TURNO',
            //'TURMA',
            //'COMUNICOU_PAIS',
            //'MATRICULA_PEDAGOGO',
            //'NOME_PEDAGOGO',
            //'DATA_ENCAMINHAMENTO',
            //'MES_ENCAMINHAMENTO',
            //'MATRICULA_PROFESSOR',
            //'NOME_PROFESSOR',
            //'DATA_CONVOCACAO_RESP',
            //'DATA_ORIENTACAO',
            //'STATUS_ALUNO',
            //'RECEBE_BOLSA_FAMILIA',
            //'NOME_PROFISSAO',
            //'MATRICULA_PROFISSIONAL',
            //'NOME_PROFISSIONAL',
            //'DATA_PARECER_TEC',
            //'QUANT_LIGACAO_TEL',
            //'QUANT_CONTATO_REDESOCIAL',
            //'STATUS_VISITA',
            //'JUSTIF_INFREQUENCIA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
