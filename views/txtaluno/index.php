<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TxtAlunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Txtalunos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="txtaluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Txtaluno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CODIGO_SIGEAM',
            'ANO_MATRICULA',
            'BAIRRO_ALUNO',
            'CODIGO_INEP_ALUNO',
            'COR',
            //'CPF_DO_ALUNO',
            //'CPF_DO_RESPONSAVEL',
            //'CURSO',
            //'DATA_DE_NASCIMENTO',
            //'DATA_DE_OBITO',
            //'DISTRITO',
            //'EMAIL_INSTITUCIONAL:email',
            //'CODIGO_ESCOLA',
            //'ESCOLA',
            //'FASE',
            //'FASE_ORIGEM',
            //'GEMEO',
            //'INDÍGENA',
            //'MUNICIPIO_ESCOLA',
            //'MUNICIPIO_NASCIMENTO',
            //'NACIONALIDADE',
            //'NECESSIDADES',
            //'NOME_DA_MAE',
            //'NOME_DO_PAI',
            //'PROJETO',
            //'SEXO',
            //'TELEFONE',
            //'TURNO',
            //'ZONA_DA_ESCOLA',
            //'NIS',
            //'TIPO_SANGUINEO',
            //'LOCALIZACAO',
            //'RG',
            //'LOCAL_SALA',
            //'CARTAO_SUS_ALUNO',
            //'BOLSA_FAMILIA',
            //'IMC',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
