<?php
//ob_start(); session_start();
require 'funcoes/banco/conexao.php';
require 'funcoes/crud/crud.php';
//require 'funcoes/login/login.php';
//logado();

//if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
//    session_destroy();
 //   header("Location: index.php");
//}

header("Content-type: text/html; charset=utf-8"); // SOLUÇÃO 2 CARACTERES
//$fun = $_SESSION['logado'];
$minhapagina = @$_GET['p'];
$filtro = @$_GET['s'];
$infoequip = @$_GET['e'];
/*
if(listarequipamentos()){
  $listarequipamentos = listarequipamentos();
  foreach ($listarequipamentos as $e) {
    if(listarcertificados($e->id)){
      $l = listarcertificados($e->id);
      attequipcert($l->id, $l->ultimacalibracao,$l->proximacalibracao,$l->certificado);
    }
  }
}
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- SOLUÇÃO 1 CARACTERES -->
  <title>Gest&atilde;o de calibra&ccedil;&atilde;o - Norpack</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="Gestão de calibração - Norpack By: Filipe Castro">
  <meta name="author" content="Filipe Castro | filipecsant@gmail.com">
  <meta name="generator" content="Gestão de calibração - Norpack By: Filipe Castro">
  <link rel="apple-touch-icon" href="img/icone2.nestweb.png" sizes="180x180">
  <link rel="icon" href="img/icone.nestweb.png" sizes="32x32" type="image/png">
  <link rel="icon" href="img/icone3.nestweb.png" sizes="16x16" type="image/png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/1.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/2.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/3.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="css/4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/5.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/6.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        
        
        
        <script type="text/javascript" src="js/jquery-3.5.0.js"></script>
        <script type="text/javascript" src="js/index27.js">
          


        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="img/norpack.png"/></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="img/norpack.png"/></span>
    </a>

    <nav class="navbar navbar-static-top">
      
     <span style="text-align: center; color: #fff;float: left; width: 100%; text-align: center; height: 100%; margin-top: 7px; font-size: 25px;"><b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> &nbsp;&nbsp;Gest&atilde;o de calibra&ccedil;&atilde;o</b></span>
     

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
    
      <!-- search form -->
      <form method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Pesquisar Equip. (TAG)">
          <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVEGAÇÃO</li>
  
        <?php
        if(listarinstrumentos()){
          $instrumentos = listarinstrumentos();
          foreach ($instrumentos as $in) {

        ?>
        
        <li>
          <a href="?p=<?php echo $in->instrumento; ?>">
             <span><?php echo $in->instrumento; ?></span>
            <span class="pull-right-container">

              <?php 
              $qtcert = qntaguardandocert2($in->instrumento); 
              if($qtcert > 0){
              ?>
              <small class="label pull-right bg-yellow"><?php echo $qtcert; ?></small>
              <?php }
/*
              $qtcon = qntconcluido2($in->instrumento); 
              if($qtcon > 0){
              ?>
              <small class="label pull-right bg-green"><?php echo $qtcon; ?></small>
              <?php 
              }
*/
              $qtvenc = qntvalidadeprox2($in->instrumento); 
              if($qtvenc > 0){
              ?>
              <small class="label pull-right bg-red"><?php echo $qtvenc; ?></small>
              <?php }

              $qtagendado = qntagendado2($in->instrumento); 
              if($qtagendado > 0){
              ?>
              <small class="label pull-right bg-blue"><?php echo $qtagendado; ?></small>
              <?php } ?>
    
            </span>
          </a>
        </li>
        
        <?php
          }
        }
        ?>


        <li class="header">GUIA</li>
        <li><a href="?p=Validade Próxima"><small class="label pull-left bg-red">&nbsp;</small> <span style="margin-left: 5px;">VALIDADE PR&Oacute;XIMA</span></a></li>

        <li><a href="?p=Aguardando Certificado"><small class="label pull-left bg-yellow">&nbsp;</small> <span style="margin-left: 5px;">AGUARDANDO CERTIFICADO</span></a></li>

        <li><a href="?p=Concluídos"><small class="label pull-left bg-green">&nbsp;</small> <span style="margin-left: 5px;">CONCLU&Iacute;DOS</span></a></li>

        <li><a href="?p=Em transito"><small class="label pull-left bg-blue">&nbsp;</small> <span style="margin-left: 5px;">EM TRANSITO</span></a></li>

        <li><a href="?p=Vencido"><small class="label pull-left bg-purple">&nbsp;</small> <span style="margin-left: 5px;">CERTIFICADOS VENCIDOS</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<!-- ----------------------------------- CORPO ----------------------------------------- >







  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Calibra&ccedil;&atilde;o
        <small><?php if(!isset($minhapagina)){echo "In&iacute;cio";}else { echo $minhapagina;} ?></small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">

<?php if(!isset($minhapagina)){ 
  require 'paginas/inicio-top.php';
}
?>

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8" style="width: 100%;">


<!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">
                <?php 
                if(!isset($minhapagina)){echo "Informa&ccedil;&otilde;es gerais";} 
                else {if(!isset($infoequip)){echo $minhapagina;}else{echo $infoequip;} if(isset($filtro) && !isset($infoequip)){echo '&nbsp;&nbsp;<small>'.$filtro.'</small>';}
                } 
                  ?>
              </h3>
              <?php
                if(listarinstrumentos()){
                  $listarinstrumentos = listarinstrumentos();
                  foreach ($listarinstrumentos as $in) {


                    if($in->instrumento === $minhapagina && !isset($infoequip)){
                      ?>
                        <a href="?p=<?php echo $in->instrumento; ?>&s=Em transito"><span class="label label-primary" style="padding:5px 8px 5px 8px;float:right; margin-right: 15px;">Em transito</span></a>
                        <a href="?p=<?php echo $in->instrumento; ?>&s=Validade Próxima"><span class="label label-danger" style="padding:5px 8px 5px 8px;float:right; margin-right: 15px;">Validade Pr&oacute;xima</span></a>
                        <a href="?p=<?php echo $in->instrumento; ?>&s=Aguard. Certificados"><span class="label label-warning" style="padding:5px 8px 5px 8px;float:right; margin-right: 15px;">Aguard. Certificado</span></a>
                        <a href="?p=<?php echo $in->instrumento; ?>&s=Concluído"><span class="label label-success" style="padding:5px 8px 5px 8px;float:right; margin-right: 15px;">Conclu&iacute;do</span></a>
                        <span class="box-title" style="font-size:15px;float: right; margin-right: 15px;">Filtros: </span>

                        <?php if(isset($filtro)){ ?>
                        <a href="?p=<?php echo $in->instrumento; ?>"><span class="box-title" style="font-size:15px;float: right; margin-right: 15px;">Remover filtro</span></a>

                      <?php
                        }
                    }
                  }
                }
              ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <?php
                    if(!isset($minhapagina)){
                      require 'paginas/inicio-body.php';

                  }else if(isset($infoequip)){
//----------------------------- FIM INFORACOES GERAIS -> INICIO INFO CERT. --------------
                    
                  require 'paginas/body-infoequip.php';
                  
                  
//----------------------------- FIM INFO EQUIP. -> INICIO CERTIFICADOS ---------------------
                  }else{
                  ?>

                    <th>TAG</th>
                    <th>Periodicidade</th>
                    <th>Certificado</th>
                    <th>&Uacute;ltima Calibra&ccedil;&atilde;o</th>
                    <th>Pr&oacute;ximo Vencimento</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    <?php
                      require 'paginas/body-equip.php'; 
              
                }
                  ?>

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <?php
              if(!isset($minhapagina)){
               ?>
              <a id="addinst" class="btn btn-sm btn-info btn-flat pull-left" style="margin-right: 15px;">Adicionar novo instrumento</a>

              <a href="paginas/controle.php" target="_blank" class="btn btn-sm btn-success btn-flat pull-left"  style="margin-right: 15px;">Abrir controle calibração</a>

              <a id="openinst" class="btn btn-sm btn-warning btn-flat pull-left" style="margin-right: 15px;">Abrir lista detalhes instrumentos</a>
              <!--
              <a href="paginas/foradeuso.php" target="_blank" class="btn btn-sm btn-danger btn-flat pull-left">Abrir equipamentos fora de uso</a>
              -->

             <!-- <a href="?p=certificados" style="margin-left: 15px;" class="btn btn-sm btn-info btn-flat pull-left">Ver todos certificados</a> -->
             <?php 


              } else{
                ?>
                  

                  <?php
                  if(isset($infoequip)){
                    if(infoequipamento($infoequip)){
                      $ie = infoequipamento($infoequip);

                      $ano = date('Y', strtotime($ie->ultimacalibracao));
                      $mes = date('m', strtotime($ie->ultimacalibracao));
                      if($mes >= '01' && $mes <= '06'){$semestre = '1';}
                      else{$semestre = '2';}
                  
                    if($ie->certificado != '' && $ie->certificado != '0'){
                  ?>

                    <a href="Certificados/<?php echo $minhapagina; ?>/<?php echo $ano.'.'.$semestre ?>/<?php echo $infoequip; ?>.pdf" target="_blank" class="btn btn-sm btn-info btn-flat pull-left" style="margin-right: 15px;">Visualizar certificado</a>
                    <?php
                    }
                    ?>

                    <a id="addobs" data-equip="<?php echo $ie->id; ?>" class="btn btn-sm btn-warning btn-flat pull-left">Adicionar observa&ccedil;&atilde;o</a>

                    <?php 
                    $data2 = date("Y-m-d");
                    $minhadata2 = date('Y-m-d', strtotime("+2 month",strtotime($data2)));
                    if($minhadata2 >= $ie->proximacalibracao && $ie->foradeuso === '0'){
                      if($ie->agendado === '0' || $ie->agendado === NULL || $ie->agendado === ''){
                    ?>
                      <a id="agendado" data-status="1" data-equip="<?php echo $ie->id; ?>" data-instrumento="<?php echo $ie->instrumento; ?>" class="btn btn-sm btn-success btn-flat pull-left" style="margin-left: 15px;">Em transito</a>
                    <?php } else {
                    ?>
                    <a id="agendado" data-status="0" data-equip="<?php echo $ie->id; ?>" data-instrumento="<?php echo $ie->instrumento; ?>" class="btn btn-sm btn-success btn-flat pull-left" style="margin-left: 15px;">Entregue</a>


                    <?php } } ?>

                    

                    <a href="?p=<?php echo $minhapagina; ?>" class="btn btn-sm btn-info btn-flat pull-right">Retornar</a>
                  <?php
                    }
                  }else{
                  ?>
                  <?php 
                  if($minhapagina != 'Validade Próxima' && $minhapagina != 'Aguardando Certificado' && $minhapagina != 'Concluídos' && $minhapagina != 'Em transito' && $minhapagina != 'Vencido' && $minhapagina != 'Janeiro' && $minhapagina != 'Fevereiro' && $minhapagina != 'Março' && $minhapagina != 'Abril' && $minhapagina != 'Maio' && $minhapagina != 'Junho' && $minhapagina != 'Julho' && $minhapagina != 'Agosto' && $minhapagina != 'Setembro' && $minhapagina != 'Outubro' && $minhapagina != 'Novembro' && $minhapagina != 'Dezembro'){ ?>

                    <a id="addequip" data-equip="<?php echo $minhapagina; ?>" class="btn btn-sm btn-info btn-flat pull-left">Adicionar novo equipamento</a>
            
                    <a id="addcert" data-equip="<?php echo $minhapagina; ?>" class="btn btn-sm btn-success btn-flat pull-left" style="margin-left: 15px;">Adicionar novo certificado</a>
                  <?php }
                  if($minhapagina === 'Vencido'){
                    ?>
                    <a id="removcert" data-1="<?php echo $data2; ?>" data-2="<?php echo $minhadata3; ?>" class="btn btn-sm btn-danger btn-flat pull-left">Remover certificados</a>
                    <?php
                  }
                   ?>

                    <a href="index.php" class="btn btn-sm btn-info btn-flat pull-right">Retornar ao In&iacute;cio</a>

                    <?php if($minhapagina === 'Validade Próxima'){ ?>
                    <a id="agendadosinloco" data-status="1" style="margin-right: 15px;" class="btn btn-sm btn-success btn-flat pull-right">Agendados in-loco</a>
                    <?php }

                    if($minhapagina === 'Em transito'){ ?>
                    <a id="calibradosinloco" data-status="1" style="margin-right: 15px;" class="btn btn-sm btn-success btn-flat pull-right">Calibrados in-loco</a>
                    <?php } ?>

                <?php
                  }
              }
             ?>
            </div>
            <!-- /.box-footer -->
          </div>



          <?php
          if(!isset($minhapagina)){
          ?>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">
                Legendas:
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <tbody>
                    <tr style="font-size: 16px;">
                      <small class="label pull-left bg-blue">&nbsp;</small> &nbsp;&nbsp;&nbsp;Em transito: Equipamento agendado/preparado para calibra&ccedil;&atilde;o / envio ou enviado e aguardando chegada.<br><br>
                      <small class="label pull-left bg-red">&nbsp;</small> &nbsp;&nbsp;&nbsp;Validade Pr&oacute;xima: Equipamento com vencimento do certificado at&eacute; 2 m&ecirc;s da data atual.<br><br>
                    <small class="label pull-left bg-yellow">&nbsp;</small> &nbsp;&nbsp;&nbsp;Aguard. Certificado: Equipamento com calibrado, com pend&ecirc;ncia na emiss&atilde;o/arquivamento do certificado.<br><br>
                   <small class="label pull-left bg-green">&nbsp;</small> &nbsp;&nbsp;&nbsp;Conclu&iacute;dos: Equipamento calibrado e com certificado emitido/arquivado.<br><br>
                   <small class="label pull-left bg-purple">&nbsp;</small> &nbsp;&nbsp;&nbsp;Certificados Vencidos: Certificados fora de validade necessitando ser removido da pasta e do informatizado. Conforme procedimento.
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          <?php } ?>

          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->











<!-- ------------------------------ FIM CORPO -------------------------------------->

    </section>
          
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Vers&atilde;o 1.0
    </div>
    Developed by: Filipe Castro </footer>

</div>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Adicionar Preventiva</h5>
              </div>
              <div class="modal-body"></div>
            </div>
          </div>
        </div>


<!-- jQuery 3 -->
<script src="js/1.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/2.js"></script>
<!-- FastClick -->
<script src="js/3.js"></script>
<!-- AdminLTE App -->
<script src="js/4.js"></script>
<!-- Sparkline -->
<script src="js/5.js"></script>
<!-- jvectormap  -->
<script src="js/6.js"></script>
<script src="js/7.js"></script>
<!-- SlimScroll -->
<script src="js/8.js"></script>
<!-- ChartJS -->
<script src="js/9.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="10.js"></script>
<!-- AdminLTE for demo purposes -->


</body>
</html>
