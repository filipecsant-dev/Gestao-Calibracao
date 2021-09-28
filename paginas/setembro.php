<?php
if($eq->proximacalibracao >= '2021-09-01' && $eq->proximacalibracao < '2021-10-01'){
                    ?>
                  
                      <tr>
                        <td><a href="?p=<?php echo $minhapagina ?>&e=<?php echo $eq->tag; ?>"><?php echo $eq->tag; ?></a></td>
                        <td><?php echo $eq->periodicidade; ?></td>
                        <td><?php echo $eq->certificado; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($eq->ultimacalibracao)); ?></td>
                        <td><?php echo date('d/m/Y', strtotime($eq->proximacalibracao)); ?></td>
                        <td>
                          <?php if($eq->certificado != '' && $eq->certificado != '0' && $eq->agendado === '0'){ ?>
                            <span class="label label-success">Conclu&iacute;do</span>
                          <?php } 
                          if($eq->certificado == '' || $eq->certificado == '0' && $eq->agendado === '0'){ ?>
                            <span class="label label-warning">Aguard. Certificado</span>
                          <?php }
                           if($minhadata2 >= $eq->proximacalibracao && $eq->agendado === '0'){ ?>
                            <span class="label label-danger">Validade Pr&oacute;xima</span>
                          <?php }  

                          if($eq->agendado === '1'){ ?>
                            <span class="label label-primary">Em transito</span>
                          <?php } ?>
                        </td>
                      </tr>
                  
                  <?php
                        }