<?php

/* @var $this yii\web\View */
use app\models\User;
use app\models\SEGUSUARIO;
use app\models\SEGAUTHASSIGNMENT;

$this->title = 'CEMASP ATENDE';
?>
<div class="site-index">

    <div class="jumbotron">
        <h2>Sistema de Atendimento do CEMASP</h2>
    </div>
    <div class="row">
    <div>    
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
                <div class="col-sm">
                    <center>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=aluno/create">
                            <div class="btn btn-default" style="width: 300px;" ><i class=" 	glyphicon glyphicon-import"></i> Inserção dos Dados SIGEAM &raquo;</div>
                        </a>
                                              
                        </br></br>

                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=aluno/index">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-folder-open"></i> Gerenciamento dos Dados CEMASP &raquo;</div>
                        </a>
                        </br></br>

                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=aluno/index">
                            <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-calendar"></i> Planejamento de Visitas &raquo;</div>
                        </a>

                        </br></br>

                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=curso/create">
                            <div class="btn btn-default" style="width: 300px;"><i class="glyphicon glyphicon-check"></i> Registro de Visita do Dia &raquo;</div>
                        </a>

                        </br></br>

                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=curso/index">
                        <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-road"></i> Gerenciamento de Rotas &raquo;</div>
                        </a>

                        </br></br>
                        
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=curso/index">
                        <div class="btn btn-default" style="width: 300px;" ><i class="glyphicon glyphicon-stats"></i> Relatório &raquo;</div>
                        </a>
                    </center>

                </div>
                
                </br></br></br>
                </br></br></br>
                </div>
            </div><?php
        }else{?>
            <p align="center" class="lead">Você não tem autorização para acessar o sistema.</p>
        <?php
        }
    }?>
        </div>
    </div>
    
	<footer>
		<div class="myfooter" style="background: url('https://www.manaus.am.gov.br/wp-content/themes/ppm/dist/imagens/2021/bg-rodape.png') repeat-x bottom left; ">
			<div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
						<div style="text-align: center; font-family: Calibri; color: #6c757d; font-size: 0.9em;">
							<img src=https://www.manaus.am.gov.br/wp-content/themes/ppm/dist/imagens/2021/logo-pmm-rodape.png ><br>
							<p>COPYRIGHT 2021. TODOS OS DIREITOS RESERVADOS</p>
             			</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

