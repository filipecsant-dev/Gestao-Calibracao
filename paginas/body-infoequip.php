
<?php
if(infoequipamento($infoequip)){
                      $ie = infoequipamento($infoequip);
                        $datainfo1 = date("Y-m-d"); 
                            $minhadatainfo = date('Y-m-d', strtotime("+2 month",strtotime($datainfo1)));
                  ?>
                </tbody>
              </table>

              <table class="table no-margin" style="width: 100%;">
                <tbody >
                  <tr>

                    <th style="width: 33%;">Instrumento</th>

                    <th style="width: 33%;">TAG</th>
                    <th style="width: 33%;">Periodicidade</th>
                  </tr>
                  <tr style="width: 33%;">
                    <td><?php echo $ie->instrumento; ?></td>
                    <td><?php echo $ie->tag; ?></td>
                    <td><?php echo $ie->periodicidade; ?></td>
                  </tr>
                </tbody>
              </table>


              <br /><br />
              <table class="table no-margin" style="width: 100%;">
                <tbody >
                  <tr >
                    <th style="width: 33%;">Faixa de Trabalho</th>
                    <th style="width: 33%;">Crit&eacute;rio de Aceita&ccedil;&atilde;o</th>
                    <th style="width: 33%;">Localiza&ccedil;&atilde;o  
                    &nbsp;
                    <span style="cursor: pointer;" id="edit" data-id="<?php echo $ie->id; ?>" data-info="localizacao">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                    </span>

                  </th>
                  </tr>
                  <tr style="width: 33%;">
                    <td><?php $faixatrabalho = $ie->faixatrabalhomin.' &agrave; '.$ie->faixatrabalhomax;
                    echo $faixatrabalho; ?></td>
                    <td><?php echo $ie->criterio; ?></td>
                    <td><?php echo $ie->localizacao; ?></td>
                  </tr>
              </tbody>
            </table>



            <br /><br />
              <table class="table no-margin">
                <tbody style="width: 100%;">
                  <tr>
                    <th style="width: 33%;">Marca</th>
                    <th style="width: 33%;">Modelo</th>
                    <th style="width: 33%;">S&eacute;rie</th>
                  </tr>
                  <tr style="width: 33%;">
                    <td><?php if($ie->marca === ''){echo '-';} else{ echo $ie->marca; } ?></td>
                    <td><?php if($ie->modelo === ''){echo '-';} else{echo $ie->modelo;} ?></td>
                    <td><?php if($ie->serie === ''){echo '-';} else{echo $ie->serie;} ?></td>
                  </tr>
                </tbody>
              </table>


            <br /><br />
              <table class="table no-margin" style="width: 100%;">
                <tbody>
                  <tr>
                    <th style="width: 33%;">&Uacute;ltima Calibra&ccedil;&atilde;o </th>
                    <th style="width: 33%;">Pr&oacute;xima Calibra&ccedil;&atilde;o</th>
                    <th style="width: 33%;">Certificado</th>
                  </tr>
                  <tr style="width: 33%;">
                    <?php 
                    if(listarcertificados($ie->id)){
                      $cert = listarcertificados($ie->id);
                        if($ie->certificado != '0'){
                    ?>

                    <td><?php if($cert->ultimacalibracao === '0000-00-00'){echo '-';}
                              else{echo date('d/m/Y', strtotime($cert->ultimacalibracao));} 
                        ?>
                    </td>
                    <td><?php if($cert->proximacalibracao === '0000-00-00'){echo '-';}
                              else{echo date('d/m/Y', strtotime($cert->proximacalibracao));} 
                        ?></td>
                    <td><?php if($cert->certificado === '-' || $cert->certificado === '0'){echo '-';}
                              else{echo $cert->certificado.'/'.$cert->ano;} 
                        ?></td>
                    <?php
                        }else{
                        ?>
                          <td>-</td>
                          <td>-</td>
                          <td>-</td>
                        <?php
                        }
                    }else{
                      ?>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <?php
                    }
                    ?>
                  </tr>
                </tbody>
              </table>



              <br /><br />
              <table class="table no-margin" style="width: 100%;">
                <tbody>
                  <tr>
                    <th style="width: 33%;">Respons&aacute;vel por Calibrar</th>
                    <th style="width: 33%;">Status</th>
                  </tr>
                  <tr style="width: 33%;">
                    <td><?php echo $ie->calibrar; ?></td>


                    <td><?php 

                      if($ie->foradeuso === '1'){ ?>
                        <span class="badge bg-secondary">Fora de uso</span>
                      <?php }else{


                      if($ie->certificado != '' && $ie->certificado != '0'){
                          if($ie->agendado != '1'){
                       ?>
                        <span class="label label-success">Conclu&iacute;do</span>
                      <?php } } 

                      if($ie->agendado === '1'){ ?>
                        <span class="label label-primary">Em transito</span>
                      <?php }
                       
                      if($ie->certificado === '' || $ie->certificado === '0'){
                        if($ie->agendado != '1'){
                       ?>
                        <span class="label label-warning">Aguard. Certificado</span>
                      <?php } }
                        
                       if($minhadatainfo >= $ie->proximacalibracao && $ie->proximacalibracao != '0000-00-00' && $ie->agendado === '0'){ ?>
                        <span class="label label-danger">Validade Pr&oacute;xima</span>
                      <?php }

                      

                      }
                      ?></td>


                  </tr>
                </tbody>
              </table>

              <?php
                    if(listarobs($ie->id)){
              ?>
              <br /><br />
                <table class="table no-margin" style="width: 100%;">
                  <tbody>
                    <tr>
                      <th>Observa&ccedil;&otilde;es:</th>
                    </tr>

                    <tr>
                      <td>
                        <?php
                         $listarobs = listarobs($ie->id);
                          foreach ($listarobs as $l) {
                        ?>
                        <li><?php echo $l->obs; ?></li>
                        <?php } ?>
                      </td>
                      
                    </tr>
                  </tbody>
                </table>
              <?php
                        
                      }

                    }
                    ?>

                    <br /><br />