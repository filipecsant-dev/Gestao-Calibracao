                <th>Instrumento</th>
                    <th>Qntd.</th>
                    <th>Periodicidade</th>
                    <th>Pr&oacute;ximo Vencimento</th>
                    <th>Calibrado por</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    <?php 
                      if(listarinstrumentos()){
                        $listarinstrumentos = listarinstrumentos();
                        foreach ($listarinstrumentos as $in) {
                        
                    ?>
                  
                  <tr>
                    <td><a href="?p=<?php echo $in->instrumento; ?>"><?php echo $in->instrumento; ?></a></td>

                    <td><?php echo qntequip($in->instrumento); ?></td>

                    <td>
                    <?php
                    $i = 1;
                    $minhaperiodicidade = 1;
                    if(listarequipamentos2($in->instrumento)){
                        $listarinstrumentos2 = listarequipamentos2($in->instrumento);
                        foreach ($listarinstrumentos2 as $in2) {

                          if($minhaperiodicidade === $in2->periodicidade){continue;}
                          $minhaperiodicidade = $in2->periodicidade;

                          if($i === 1){ echo $in2->periodicidade;}
                          if($i === 2) {echo '/'.$in2->periodicidade;}
                          
                          $i ++;
                    } } ?>
                  </td>

                  <td>
                      <?php  
                        if(proxvencimento($in->instrumento)){
                        $datavenc = proxvencimento($in->instrumento);
                        echo date('d/m/Y', strtotime($datavenc->proximacalibracao)); 
                      }?>
                    </td>

                    <td>
                        <?php
                        $i2 = 1;
                        $meucalibrar = 1;
                        if(listarequipamentos2($in->instrumento)){
                            $listarinstrumentos3 = listarequipamentos2($in->instrumento);
                            foreach ($listarinstrumentos3 as $in3) {

                              if($meucalibrar === $in3->calibrar){continue;}
                              $meucalibrar = $in3->calibrar;

                              if($i2 === 1){ echo $in3->calibrar;}
                              if($i2 === 2){echo '/'.$in3->calibrar;}
                              
                              $i2 ++;
                        } } ?>
                    
                    </td>


                    <td>


                      <?php 
                      $qtcon = qntconcluido2($in->instrumento); 
                      if($qtcon > 0){
                      ?>
                      <span class="label label-success">Conclu&iacute;do</span>
                      <?php } 
                      $qtcert = qntaguardandocert2($in->instrumento); 
                      if($qtcert > 0){
                      ?>
                      <span class="label label-warning">Aguard. Certificado</span>
                      <?php 
                      }
                      $qtvenc = qntvalidadeprox2($in->instrumento); 
                      if($qtvenc > 0){
                      ?>
                      <span class="label label-danger">Validade Pr&oacute;xima</span>
                      <?php }

                      $qtagendado = qntagendado2($in->instrumento); 
                      if($qtagendado > 0){
                      ?>
                      <span class="label label-primary">Em transito</span>
                      <?php }

                      $qtforadeuso = qtforadeuso2($in->instrumento); 
                      if($qtforadeuso > 0){
                      ?>
                      <span class="badge bg-secondary">Fora de uso</span>
                      <?php } ?>



                    </td>
                    
                    

                  </tr>
                  
                  <?php
                      } 
                    }
                    ?>