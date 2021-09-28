    <?php
                        
                   

                          if(listarequipamentosval()){
                            $listarequipamentosval = listarequipamentosval();
                            foreach ($listarequipamentosval as $val) {

                              if($val->proximacalibracao === '0000-00-00'){
                                    continue;
                                }

                              if($minhadata2 >= $val->proximacalibracao && $val->proximacalibracao != NULL && $val->agendado != '1'){


                            
                            
                    ?>
                  
                      <tr>
                        <td><a href="?p=<?php echo $minhapagina ?>&e=<?php echo $val->tag; ?>"><?php echo $val->tag; ?></a></td>
                        <td><?php echo $val->periodicidade; ?></td>
                        <td><?php if($val->certificado === ''  || $val->certificado === '0'){echo '-';} else{echo $val->certificado;} ?><?php if($val->calibrar != 'Senai'){ echo ' ('.$val->calibrar.')'; } ?></td>
                        <td><?php if($val->ultimacalibracao === '0000-00-00'){echo '-';}else{ echo date('d/m/Y', strtotime($val->ultimacalibracao)); } ?></td>
                        <td><?php if($val->proximacalibracao === '0000-00-00'){echo '-';}else{ echo date('d/m/Y', strtotime($val->proximacalibracao)); } ?></td>
                        <td>
                          <?php if($val->certificado != '' && $val->certificado != '0' && $val->agendado === '0'){ ?>
                            <span class="label label-success">Conclu&iacute;do</span>
                          <?php } 
                          if($val->certificado == '' || $val->certificado == '0' && $val->agendado === '0'){ ?>
                            <span class="label label-warning">Aguard. Certificado</span>
                          <?php }
                           
                           if($minhadata2 >= $val->proximacalibracao && $val->agendado === '0'){ ?>
                            <span class="label label-danger">Validade Pr&oacute;xima</span>
                          <?php }

                          if($val->agendado === '1'){ ?>
                            <span class="label label-primary">Em transito</span>
                          <?php } ?>
                        </td>
                      </tr>
                  
                  <?php
                        
                        }
                      }
                    }