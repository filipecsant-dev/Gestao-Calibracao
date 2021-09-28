    
      <div class="row">
        
        <div class="col-md-3 col-sm-6 col-xs-12" >
          <a href="?p=Em transito" style="text-decoration: none; color: #363636;" title="Equipamentos com validade pr&oacute;xima agendados para calibração.">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
          </svg></span>

            <div class="info-box-content">
              <span class="info-box-text">Em transito</span>
              <span class="info-box-number"><?php echo qntagendado(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
      

        <!-- /.col -->
        
        <div class="col-md-3 col-sm-6 col-xs-12" >
          <a href="?p=Validade Próxima" style="text-decoration: none; color: #363636;" title="Equipamentos com vencimento pr&oacute;ximo sem agendamento">
          <div class="info-box">
            <span class="info-box-icon bg-red"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-exclamation-diamond" viewBox="0 0 16 16">
  <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
</svg></span>
          
            <div class="info-box-content">
              <span class="info-box-text">Validade Pr&oacute;xima</span>
              <span class="info-box-number"><?php echo qntvalidadeprox(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
      
        <!-- /.col -->

        <!-- fix for small devices only -->
        
        <div class="col-md-3 col-sm-6 col-xs-12" >
          <a href="?p=Concluídos" style="text-decoration: none; color: #363636;" title="Equipamentos finalizados calibração, emissão, validação e arquivamento.">
          <div class="info-box">
            <span class="info-box-icon bg-green"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
</svg></span>
          
            <div class="info-box-content">
              <span class="info-box-text">Conclu&iacute;dos</span>
              <span class="info-box-number"><?php echo qntconcluido(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
      


      
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12" >
          <a href="?p=Aguardando Certificado" style="text-decoration: none; color: #363636;" title="Equipamentos calibrados. Sem emissão do certificado.">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg></span>

            <div class="info-box-content">
              <span class="info-box-text">Aguard. Certificado</span>
              <span class="info-box-number"><?php echo qntaguardandocert(); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
      
        <!-- /.col -->
    </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Relat&oacute;rio geral - 2021</h3>

       
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong style="font-size: 16px;">Contrato Senai 2021</strong>
                  </p>

                  <div class="chart">

                    <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Instrumento</th>
                    <th>Qntd. Total</th>
                    <th>Qntd. Atual</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if(listarinstrumentos()){
                        $listarinstrumentos = listarinstrumentos();
                        foreach ($listarinstrumentos as $lis) {
                          if($lis->contrato >= '1'){
                     ?>

                    <tr>                  
                      <td><?php echo $lis->instrumento; ?></td>
                      <td><?php echo $lis->contrato; ?></td>
                      <td><?php
                      //DATA DE CONTRATO SENAI
                      $data1 = '2021-07-01'; //INICIO DE CONTRATO
                      $data2 = '2022-07-01'; //FINAL DE CONTRATO
                      $qntcert = qntcert($lis->instrumento,$data1,$data2);
                      $qntdatual = $lis->contrato - $qntcert;
                       echo $qntdatual; ?></td>
                    </tr>
                    <?php } } } ?>
                    
                  </tbody>
                </table>              
                    
                  </div>
               
                 </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Progresso dos Instrumentos</strong>
                  </p>
                  <?php
                  if(listarinstrumentos()){
                    $instrumentos = listarinstrumentos();
                    foreach ($instrumentos as $in) {
                      if($in->instrumento === 'Multimetro Digital' || $in->instrumento === 'Alicate Amperimetro'){
                        continue;
                      }

                      $qntequip = qntequipprog($in->instrumento);
                      $qntconcluido = qntconcluido2($in->instrumento);
                  ?>
                  <div class="progress-group">
                    <span class="progress-text"><?php echo $in->instrumento; ?></span>
                    <span class="progress-number"><b><?php echo $qntconcluido; ?></b>/<?php echo $qntequip; ?></span>
                    <?php if($qntequip != 0){
                          $qnt1 = $qntconcluido * 100;
                          $qnt2 = $qnt1 / $qntequip; 
                        }

                    ?>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-<?php if($qnt2 >= 1 && $qnt2 < 40){echo 'red';}else if($qnt2 >= 40 && $qnt2 < 70){echo 'warning';}else if($qnt2 >= 70 && $qnt2 < 99){echo 'alert';}if($qnt2 === 100){echo 'green';} ?>" style="width: <?php echo $qnt2."%"; ?>"></div>
                    </div>
                  </div>
                <?php } } ?>
                 
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <?php if(qntequip2('2021-01-01','2021-02-01') > 0){ ?>
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg><?php echo qntequip2('2021-01-01','2021-02-01'); ?> Equip.</span>
                    <h5 class="description-header">Janeiro</h5>
                    <?php ?>
                    <span class="description-text"><a href="?p=Janeiro">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
              <?php } if(qntequip2('2021-02-01','2021-03-01') > 0){ ?>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-02-01','2021-03-01'); ?> Equip.</span>
                    <h5 class="description-header">Fevereiro</h5>
                    <span class="description-text"><a href="?p=Fevereiro">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-03-01','2021-04-01') > 0){ ?>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-03-01','2021-04-01'); ?> Equip.</span>
                    <h5 class="description-header">Março</h5>
                    <span class="description-text"><a href="?p=Março">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-04-01','2021-05-01') > 0){ ?>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-red"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-04-01','2021-05-01'); ?> Equip.</span>
                    <h5 class="description-header">Abril</h5>
                    <span class="description-text"><a href="?p=Abril">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-05-01','2021-06-01') > 0){ ?>
                 <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-warning"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-05-01','2021-06-01'); ?> Equip.</span>
                    <h5 class="description-header">Maio</h5>
                    <span class="description-text"><a href="?p=Maio">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-06-01','2021-07-01') > 0){ ?>
                 <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-blue"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-06-01','2021-07-01'); ?> Equip.</span>
                    <h5 class="description-header">Junho</h5>
                    <span class="description-text"><a href="?p=Junho">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-07-01','2021-08-01') > 0){ ?>
                 <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-07-01','2021-08-01'); ?> Equip.</span>
                    <h5 class="description-header">Julho</h5>
                    <span class="description-text"><a href="?p=Julho">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-08-01','2021-09-01') > 0){ ?>
                 <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-08-01','2021-09-01'); ?> Equip.</span>
                    <h5 class="description-header">Agosto</h5>
                    <span class="description-text"><a href="?p=Agosto">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-09-01','2021-10-01') > 0){ ?>
                 <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-purple"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-09-01','2021-10-01'); ?> Equip.</span>
                    <h5 class="description-header">Setembro</h5>
                    <span class="description-text"><a href="?p=Setembro">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-10-01','2021-11-01') > 0){ ?>
                 <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-orange"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-10-01','2021-11-01'); ?> Equip.</span>
                    <h5 class="description-header">Outubro</h5>
                    <span class="description-text"><a href="?p=Outubro">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-11-01','2021-12-01') > 0){ ?>
                 <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-red"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-11-01','2021-12-01'); ?> Equip.</span>
                    <h5 class="description-header">Novembro</h5>
                    <span class="description-text"><a href="?p=Novembro">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <?php } if(qntequip2('2021-12-01','2022-01-01') > 0){ ?>
                 <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-info"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-rulers" viewBox="0 0 16 16">
                    <path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1H1z"/>
                  </svg> <?php echo qntequip2('2021-12-01','2022-01-01'); ?> Equip.</span>
                    <h5 class="description-header">Dezembro</h5>
                    <span class="description-text"><a href="?p=Dezembro">Visualizar</a></span>
                  </div>
                  <!-- /.description-block -->
                </div>
              <?php } ?>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->