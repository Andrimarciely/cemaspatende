<?php

namespace app\controllers;

use Yii;
use app\models\ALUNO;
use app\models\AlunoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile; //namespace
use yii\db\Exception; //namespace

public function actionCreate(){
    
    if (!Yii::$app->user->isGuest) {
        $model = new REGISTRODIARIO();

        $anexo = UploadedFile::getInstance($model,'ANEXO');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if(!empty($anexo)){
                $model->REG_ANEXO = $anexo->extension;
                $model->save();
                $anexo->saveAs('anexos/evidencias/'.$model->REG_COD_PK.'.'.$anexo->extension);
            }
            $usuario_segsemed = SEGUSUARIO::findOne(Yii::$app->user->id);
            if($usuario_segsemed->USU_EMAIL){
                // ENVIO DE EMAIL
                $message = '<CENTER><B><U>REGISTRO INSERIDO!</U></B></CENTER><br>
                            <b>Cód.: </b>'.$model->REG_COD_PK.'<br>
                            <b>Data da Inserção: </b>'.$model->REG_DATA_HORA.'<br>
                            <b>Data da Atividade: </b>'.$model->REG_DATA_ATIVIDADE.'<br>
                            <b>Resumo: </b>'.$model->REG_RESUMO.'<br>
                            <b>Usuário: </b>'.mb_strtoupper($model->usuariofk->USU_APELIDO, 'UTF-8').' - '.$model->usuariofk->USU_NOME.'<br>
                            <b>Local de Trabalho: </b>'.mb_strtoupper($model->usuariolocaldetrab->UNID_ADM_NOME, 'UTF-8').'<br>
                            ';
                $xLink = "http://".$_SERVER['HTTP_HOST'].Yii::$app->homeUrl;

                $consultaemail = ENVIOEMAIL::find()->where(['ENVIO_COD_PK'=>8])->one();
                REGISTRODIARIO::enviaremail($model->REG_COD_PK,$consultaemail->ENVIO_COD_PK,$consultaemail->ENVIO_TITULO, $message, $model->usuariofk->USU_EMAIL, $xLink);
            }
            return $this->redirect(['view', 'id' => $model->REG_COD_PK]);
        }else{
            Yii::$app->session->setFlash('error' , 'Atenção: Campos "Data da Atividade", "Resumo" e "Local de Trabalho" são Obrigatórios!');
            return $this->render('create', [
                                'model' => $model,
                                ]);
            }

        return $this->render('create', [
                            'model' => $model,
                            ]);
    }else{
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
                             'model' => $model,
                            ]);
        }
} 