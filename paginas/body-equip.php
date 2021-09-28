<?php
            if(listarequipamentos()){
                        $listarequipamentos = listarequipamentos();
                        foreach ($listarequipamentos as $eq) {
                          $data2 = date("Y-m-d");
                            $minhadata2 = date('Y-m-d', strtotime("+2 month",strtotime($data2)));
                        if($eq->instrumento === $minhapagina){

                          if(isset($filtro)){
                            if($filtro === "Concluído"){
                              if($eq->certificado === '' || $eq->certificado === '0' || $eq->agendado === '1'){
                                continue;
                              }
                            }else if($filtro === "Aguard. Certificados"){
                              if($eq->certificado != '' && $eq->certificado != '0' || $eq->agendado === '1' || $eq->foradeuso != '0'){
                                continue;
                              }
                            }else if($filtro === "Validade Próxima"){
                              if($eq->proximacalibracao === '0000-00-00' || $eq->agendado === '1'){
                                  continue;
                              }
                              if($minhadata2 < $eq->proximacalibracao){
                                continue;
                              }
                            }else if($filtro === "Em transito"){
                              if($eq->agendado === '0'){
                                continue;
                              }
                            }

                          }
                    ?>
                    
                  <tr>
                    <td><a href="?p=<?php echo $minhapagina ?>&e=<?php echo $eq->tag; ?>"><?php echo $eq->tag; ?></a></td>

                    <td><?php echo $eq->periodicidade; ?></td>

                    <td><?php if($eq->certificado === ''  || $eq->certificado === '0' || $eq->certificado === NULL){echo '-';} else{echo $eq->certificado;} ?></td>


                    <td><?php if($eq->ultimacalibracao === '0000-00-00' || $eq->ultimacalibracao === NULL){echo '-';}
                              else{echo date('d/m/Y', strtotime($eq->ultimacalibracao));} ?></td>


                    <td><?php if($eq->proximacalibracao === '0000-00-00' || $eq->proximacalibracao === NULL){echo '-';}
                              else{ echo date('d/m/Y', strtotime($eq->proximacalibracao));} ?></td>
                    <td>
                      <?php 
                      if($eq->foradeuso === '1'){
                      ?>
                        <span class="badge bg-secondary">Fora de uso</span>
                      <?php
                      }else{

                      if($eq->certificado != '' && $eq->certificado != '0'  && $eq->agendado === '0'){ ?>
                        <span class="label label-success">Conclu&iacute;do</span>
                      <?php } 

                      if($eq->agendado === '1'){ ?>
                        <span class="label label-primary">Em transito</span>
                      <?php }

                      if($eq->certificado === '' || $eq->certificado === '0'  && $eq->agendado === '0'){ ?>
                        <span class="label label-warning">Aguard. Certificado</span>
                      <?php }
                        
                       if($minhadata2 >= $eq->proximacalibracao  && $eq->agendado === '0'){ 
                          if($eq->proximacalibracao === '0000-00-00'){
                            continue;
                          }
                        ?>

                        <span class="label label-danger">Validade Pr&oacute;xima</span>
                      <?php } 

                      

                      } ?>
                    </td>
                  </tr>
                  
                  <?php
                      } 


                      

                      if($minhapagina === "Aguardando Certificado"){
                        require 'aguardandocertificado.php';
                      }

                      if($minhapagina === "Concluídos"){
                        
                        require 'concluidos.php';
                      }

                      if($minhapagina === "Vencido"){
                        if($eq->proximacalibracao === '0000-00-00'){
                            continue;
                        }
                        require 'vencido.php';
                      }

                      if($minhapagina === "Em transito"){
                        
                        require 'agendado.php';
                      }

                      if($minhapagina === "Janeiro"){
                        
                        require 'janeiro.php';
                      }

                      if($minhapagina === "Fevereiro"){
                        
                        require 'fevereiro.php';
                      }

                      if($minhapagina === "Março"){
                        
                        require 'marco.php';
                      }

                      if($minhapagina === "Abril"){
                        
                        require 'abril.php';
                      }

                      if($minhapagina === "Maio"){
                        
                        require 'maio.php';
                      }

                      if($minhapagina === "Junho"){
                        
                        require 'junho.php';
                      }

                      if($minhapagina === "Julho"){
                        
                        require 'julho.php';
                      }

                      if($minhapagina === "Agosto"){
                        
                        require 'agosto.php';
                      }

                      if($minhapagina === "Setembro"){
                        
                        require 'setembro.php';
                      }

                      if($minhapagina === "Outubro"){
                        
                        require 'outubro.php';
                      }

                      if($minhapagina === "Novembro"){
                        
                        require 'novembro.php';
                      }

                      if($minhapagina === "Dezembro"){
                        
                        require 'dezembro.php';
                      }

                      
                      /*
                      if($minhapagina === "certificados"){
                      if(listarcert()){
                        $listarcert = listarcert();
                        foreach ($listarcert as $l) {

                    ?>
                  
                      <tr>
                        <td><?php echo $l->certificado; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                  
                  <?php


                            }
                          }
    
                        }
                      */
                      

                      
                    }
                  }

                  if($minhapagina === "Validade Próxima"){
                        
                        require 'validadeproxima.php';
                      }

                  ?>