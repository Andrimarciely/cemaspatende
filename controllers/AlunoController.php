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
/**
 * AlunoController implements the CRUD actions for ALUNO model.
 */
class AlunoController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ALUNO models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlunoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ALUNO model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ALUNO model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ALUNO();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if(!empty($foto)){
                $model->ALUNO_FOTO = $foto->extension;
                $model->save();
                $foto->saveAs('img/'.$foto->extension);
                //$foto->saveAs('img/'.$model->ALUNO_COD_PK.'.'.$foto->extension);                 
            }

            $model->save();
           // echo '$model->ALUNO_COD_PK: '.$model->ALUNO_COD_PK;
            // die;
            return $this->redirect(['view', 'id' => $model->ALUNO_COD_PK]);
        }

        return $this->render('create', [
            'model' => $model, 
        ]);
    }

    public function actionUploadFoto()
    {
        $model = $this->findModel($id);
        $foto = UploadedFile::getInstance($model,'ALUNO_FOTO');
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if(!empty($foto)){
                $model->ALUNO_FOTO = $foto->extension;
                $model->save();
                $foto->saveAs('img/'.$foto->extension);
                //$foto->saveAs('img/'.$model->ALUNO_COD_PK.'.'.$foto->extension);                 
            }

            $model->save();
           // echo '$model->ALUNO_COD_PK: '.$model->ALUNO_COD_PK;
            // die;
            return $this->redirect(['view', 'id' => $model->ALUNO_COD_PK]);
        }

        return $this->render('create', [
            'model' => $model, 
        ]);
    }
    
    

    /**
     * Updates an existing ALUNO model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $foto = UploadedFile::getInstance($model,'ALUNO_FOTO');
        $nome = '';
        
        $consulta = ALUNO::find()->where(['ALUNO_COD_PK'=>$id])->one();
        $file = $consulta->ALUNO_FOTO;

        if ($model->load(Yii::$app->request->post())) { // && $model->save()) {
            if(!empty($file)){
                @unlink('img/'.$file);
            }

            if(!empty($foto)){
                $model->ALUNO_FOTO = $foto->extension;
            }
            
            $model->save();
            
            $model = $this->findModel($id);
            $model->ALUNO_FOTO = $model->ALUNO_COD_PK.'.'.$model->ALUNO_FOTO;
            $model->save();
 
            $model = $this->findModel($id);
            //$foto-> saveAs('img/'.$nome);
            return $this->redirect(['view', 'id'=>$model->ALUNO_COD_PK]);
            
        }else {
            return $this->render('update',[
                'model'=> $model,
            ]);
        }
    }

    /**
     * Deletes an existing ALUNO model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        
        try{
            $consulta = ALUNO::find()->where(['ALUNO_COD_PK'=>$id])->one();
            $file = $consulta->ALUNO_FOTO;
            @unlink('img/'.$file);
            $this->findModel($id)->delete();
            Yii::$app->session->setFlash('sucess', 'Registro Excluído com Sucesso!');
            return $this->redirect(['index']);
        } catch (Exception $e){
            Yii::$app->db->close(); //fix here
            Yii::$app->session->setFlash('error','Este registro não pode ser excluído pois está sendo utilizado em outro lugar!');
        }
            //return $this->redirect(['view','id'=>id]);
    }

    /**
     * Finds the ALUNO model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return ALUNO the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ALUNO::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
