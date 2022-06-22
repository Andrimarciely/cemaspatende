<?php

/* @var $this yii\web\View */
use app\models\User;
use app\models\SEGUSUARIO;
use app\models\SEGAUTHASSIGNMENT;

$this->title = 'AS_SCURSOS';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>SCURSOS</h1>
        <h2>Sistema de Cursos</h2>
    </div>

    <?php
        if(Yii::$app->user->isGuest){
        }else{
    ?>

    <div class="body-content">

    <?php

        $usuario_segsemed = SEGUSUARIO::findOne(Yii::$app->user->id);

        $consulta = SEGAUTHASSIGNMENT::find()->where(['USER_ID'=>$usuario_segsemed->USU_ID_USUARIO, 'ITEM_NAME'=>"AS_SCURSOS_ADMIN_GERAL"])->one();
        if($consulta){?>
            <div class="row">
                <div class="col-lg-4">
                    <center>

                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=aluno/create">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-education"></i> Cadastro de Aluno &raquo;</div>
                        </a>

                        </br></br>

                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=aluno/index">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-pencil"></i> Gerenciamento de Alunos &raquo;</div>
                        </a>

                    </center>

                </div>
                <div class="col-lg-4">
                    <center>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=curso/create">
                            <div class="btn btn-default" style="width: 300px;"><i class="glyphicon glyphicon-book"></i> Cadastro de Cursos</div>
                        </a>

                        </br></br>

                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=curso/index">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-pencil"></i> Gerenciamento de Cursos &raquo;</div>
                        </a>
                    </center>
                </div>

                <div class="col-lg-4">
                    <center>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=turma/create">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-calendar"></i> Cadastro de Turmas &raquo;</div>
                        </a>

                        </br></br>

                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=turma/index">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-pencil"></i> Gerenciamento de Turmas &raquo;</div>
                        </a>
                    </center>
                </div>

                </br></br></br>
                </br></br></br>

                <div class="col-lg-4">
                    <center>
                        <a href="<?php echo Yii::$app->request->baseUrl;?>/index.php?r=tipoaluno/create">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-paperclip"></i> Cadastro de Tipos de Aluno &raquo;</div>
                        </a>
                        
                        <br><br>
                        
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=tipoaluno/index">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-pencil"></i> Gerenciamento de Tipos de Aluno &raquo;</div>
                        </a>
                    </center>
                </div>
                <div class="col-lg-4">
                    <center>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=matricula/index">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-book"></i> Gerenciamento de Matrículas &raquo;</div>
                        </a>
                    </center>
                    </div>
                </div>
            </div><?php
        }else{?>
            <p align="center" class="lead">Você não tem autorização para acessar o sistema.</p>
        <?php
        }
    }?>
    </div>
</div>
