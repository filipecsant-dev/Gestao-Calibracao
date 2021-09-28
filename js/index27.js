
	$(document).ready(function(){
    

            var conteudo = $('.modal-body');

            //------------------------------ INSTRUMENTOS -----------------------------------
            $('.box').on("click", '#addinst', function(){
              $.post('ajax/controle.php', {acao: 'add_inst'}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Adicionar instrumento</i></b></h4>');
                  conteudo.html(retorno);
              });
            });

            $('#ExemploModalCentralizado').on('submit', 'form[name="form_addinst"]', function(){
                var form = $(this);
                var botao = form.find(':button');

                $.ajax({
                  url: 'ajax/controle.php',
                  type: "POST",
                  data: 'acao=adicionarinst&'+form.serialize(),
                  beforeSend: function(){
                    botao.attr('disable', true);
                    $('#load').fadeIn('slow');
                  },
                  success: function(retorno){
                    botao.attr('disabled', false);
                    $('#load').fadeOut('slow');

                    if(retorno === 'sucesso'){
                      form.fadeOut('slow', function(){
                        msgfun('Instrumento adicionado com sucesso! Atualiza&ccedil;&atilde;o em 2 segundos..','sucesso');
                        setTimeout(function(){
                          location.reload();
                        }, 2000);
                      });
                    }else if(retorno === 'faltou'){
                      msgfun('Nenhum instrumento identificado!','alerta');
                    }else if(retorno === 'existe'){
                      msgfun('Este instrumento j&aacute; existe!','alerta');
                    } else {
                      msgfun('Erro ao adicionar instrumento. Tente novamente!','alerta');
                    }
                  }

                });
                return false;
              });


            //--------------------------------- EQUIPAMENTOS ------------------------------

            $('.box').on("click", '#addequip', function(){
              var instrumento = $(this).attr('data-equip');
              $.post('ajax/controle.php', {acao: 'add_equip', instrumento: instrumento}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Adicionar equipamento</i></b></h4>');
                  conteudo.html(retorno);
                  $('#locali3').hide();
              });
            });

            $('#ExemploModalCentralizado').on('change', '#locali1', function(){
              var value = $(this).val();
              
              if(value === 'Extrusora 1' || value === 'Extrusora 2' || value === 'Extrusora 3' || value === 'Extrusora 4' 
                || value === 'Extrusora 5' || value === 'Extrusora 6' || value === 'Extrusora 7' || value === 'Extrusora 8' 
                ||  value === 'Extrusora 9' || value === 'Extrusora 10'){

                $.post('ajax/controle.php', {acao: 'att_equip2', value: value},function(retorno){
                  $('#locali2').html(retorno);
                  $('#locali3').show();
                });

              }else{
                $('#locali3').hide();
                $('#locali2').html('');
              }

            });

            $('#ExemploModalCentralizado').on('submit', 'form[name="form_addequip"]', function(){
                var form = $(this);
                var botao = form.find(':button');
                $.ajax({
                  url: 'ajax/controle.php',
                  type: "POST",
                  data: 'acao=adicionarequip&'+form.serialize(),
                  beforeSend: function(){
                    botao.attr('disable', true);
                    $('#load').fadeIn('slow');
                  },
                  success: function(retorno){
                    botao.attr('disabled', false);
                    $('#load').fadeOut('slow');

                    if(retorno === 'sucesso'){
                      form.fadeOut('slow', function(){
                        msgfun('Equipamento adicionado com sucesso! Atualiza&ccedil;&atilde;o em 2 segundos..','sucesso');
                        setTimeout(function(){
                          location.reload();
                        }, 2000);
                      });
                    }else if(retorno === 'faltou'){
                      
                      msgfun('Dados necess&aacute;rios (<span style="color:red;">*</span>) incompletos!','alerta');
                      setTimeout(function(){
                          $('html, body').animate({scrollTop:0}, 'fast');
                        }, 3000);
                      
                    }else if(retorno === 'existe'){
                      msgfun('Este equipamento j&aacute; existe!','alerta');
                      $('html, body').animate({scrollTop:0}, 'fast');
                    } else {
                      msgfun('Erro ao adicionar equipamento. Tente novamente!','alerta');
                      $('html, body').animate({scrollTop:0}, 'fast');
                    }
                  }

                });
                return false;
              });

            //------------------------------ ATUALIZAR EQUIPAMENTO ------------------------

            $('.box').on("click", '#edit', function(){
              var id = $(this).attr('data-id');
              var info = $(this).attr('data-info');
              var info2;
              if(info === 'ultimacalibracao'){info2 = '&uacute;ltima calibra&ccedil;&atilde;o';}
              if(info === 'proximacalibracao'){info2 = 'próxima calibra&ccedil;&atilde;o';}
              if(info === 'certificado'){info2 = 'certificado';}
              if(info === 'localizacao'){info2 = 'Localização';}

              $.post('ajax/controle.php', {acao: 'att_equip', id: id, info: info}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Atualizar '+info2+'</i></b></h4>');
                  conteudo.html(retorno);
                  $('#local3').hide();
              });
            });

            $('#ExemploModalCentralizado').on('change', '#local', function(){
              var value = $(this).val();
              
              if(value === 'Extrusora 1' || value === 'Extrusora 2' || value === 'Extrusora 3' || value === 'Extrusora 4' 
                || value === 'Extrusora 5' || value === 'Extrusora 6' || value === 'Extrusora 7' || value === 'Extrusora 8' 
                ||  value === 'Extrusora 9' || value === 'Extrusora 10'){

                $.post('ajax/controle.php', {acao: 'att_equip2', value: value},function(retorno){
                  $('#local2').html(retorno);
                  $('#local3').show();
                });

              }else{
                $('#local3').hide();
                $('#local2').html('');
              }

            });


            $('#ExemploModalCentralizado').on('submit', 'form[name="form_attequip"]', function(){
                var form = $(this);
                var botao = form.find(':button');
                $.ajax({
                  url: 'ajax/controle.php',
                  type: "POST",
                  data: 'acao=atualizarequip&'+form.serialize(),
                  beforeSend: function(){
                    botao.attr('disable', true);
                    $('#load').fadeIn('slow');
                  },
                  success: function(retorno){
                    botao.attr('disabled', false);
                    $('#load').fadeOut('slow');

                    if(retorno === 'sucesso'){
                      form.fadeOut('slow', function(){
                        msgfun('Equipamento atualizado com sucesso! Atualiza&ccedil;&atilde;o em 2 segundos..','sucesso');
                        setTimeout(function(){
                          location.reload();
                        }, 2000);
                      });
                    }else if(retorno === 'faltou'){
                      
                      msgfun('Dados incompletos!','alerta');
                      setTimeout(function(){
                          $('html, body').animate({scrollTop:0}, 'fast');
                        }, 3000);
                      
                    } else {
                      msgfun('Erro ao atualizar equipamento. Tente novamente!','alerta');
                      $('html, body').animate({scrollTop:0}, 'fast');
                    }
                  }

                });
                return false;
              });


            //------------------------------ ADD CERTIFICADO ------------------------------

            $('.box').on("click", '#addcert', function(){
              var instrumento = $(this).attr('data-equip');
              $.post('ajax/controle.php', {acao: 'add_cert', instrumento: instrumento}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Adicionar certificado - '+instrumento+'</i></b></h4>');
                  conteudo.html(retorno);
              });
            });

            $('#ExemploModalCentralizado').on('submit', 'form[name="form_addcert"]', function(){
                var form = $(this);
                var botao = form.find(':button');
                $.ajax({
                  url: 'ajax/controle.php',
                  type: "POST",
                  data: 'acao=adicionarcert&'+form.serialize(),
                  beforeSend: function(){
                    botao.attr('disable', true);
                    $('#load').fadeIn('slow');
                  },
                  success: function(retorno){
                    botao.attr('disabled', false);
                    $('#load').fadeOut('slow');

                    if(retorno === 'sucesso'){
                        msgfun('Certificado adicionado com sucesso!','sucesso');
                        $('#campocert').val('');
                    }else if(retorno === 'faltou'){
                      
                      msgfun('Dados do certificado incompletos!','alerta');
                      
                    }else {
                      msgfun('Erro ao adicionar certificado. Tente novamente!','alerta');

                    }
                  }

                });
                return false;
              });


      //------------------------------ ADD OBSERVA&ccedil;&atilde;O ------------------------------

            $('.box').on("click", '#addobs', function(){
              var equipamento = $(this).attr('data-equip');
              $.post('ajax/controle.php', {acao: 'add_obs', equipamento: equipamento}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Adicionar observa&ccedil;&atilde;o</i></b></h4>');
                  conteudo.html(retorno);
              });
            });

            $('#ExemploModalCentralizado').on('submit', 'form[name="form_addobs"]', function(){
                var form = $(this);
                var botao = form.find(':button');
                
                $.ajax({
                  url: 'ajax/controle.php',
                  type: "POST",
                  data: 'acao=adicionarobs&'+form.serialize(),
                  beforeSend: function(){
                    botao.attr('disable', true);
                    $('#load').fadeIn('slow');
                  },
                  success: function(retorno){
                    botao.attr('disabled', false);
                    $('#load').fadeOut('slow');

                    if(retorno === 'sucesso'){
                      form.fadeOut('slow', function(){
                        msgfun('Observa&ccedil;&atilde;o adicionada com sucesso! Atualiza&ccedil;&atilde;o em 2 segundos..','sucesso');
                        setTimeout(function(){
                          location.reload();
                        }, 2000);
                      });
                    }else if(retorno === 'faltou'){
                      
                      msgfun('Dados da obser&ccedil;&atilde;o incompletos!','alerta');
                      
                    }else {
                      msgfun('Erro ao adicionar observa&ccedil;&atilde;o. Tente novamente!','alerta');

                    }
                  }

                });
                return false;
              });

            $('.box').on("click", '#removcert', function(){
              $.post('ajax/controle.php', {acao: 'remov_cert'}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Remover Certificados</i></b></h4>');
                  conteudo.html(retorno);
              });
            });

            $('#ExemploModalCentralizado').on('submit', 'form[name="form_removcert"]', function(){
                var form = $(this);
                var botao = form.find(':button');
                
                $.ajax({
                  url: 'ajax/controle.php',
                  type: "POST",
                  data: 'acao=removcert&'+form.serialize(),
                  beforeSend: function(){
                    botao.attr('disable', true);
                    $('#load').fadeIn('slow');
                  },
                  success: function(retorno){
                    botao.attr('disabled', false);
                    $('#load').fadeOut('slow');

                    if(retorno === 'sucesso'){
                      form.fadeOut('slow', function(){
                        msgfun('Certificados removidos com sucesso! Atualiza&ccedil;&atilde;o em 2 segundos..','sucesso');
                        setTimeout(function(){
                          location.reload();
                        }, 2000);
                      });
                    }else {
                      msgfun('Erro ao remover certificados. Tente novamente!','alerta');

                    }
                  }

                });
                return false;
              });

            //------------------ AGENDADO ----------------------------------

            $('.box').on("click", '#agendado', function(){
              var equipamento = $(this).attr('data-equip');
              var status = $(this).attr('data-status');
              var instrumento = $(this).attr('data-instrumento');

              $.post('ajax/controle.php', {acao: 'agendado_equip', equipamento: equipamento, status: status, instrumento: instrumento}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Enviado ou agendado</i></b></h4>');
                  conteudo.html(retorno);
              });
            });

            

            $('#ExemploModalCentralizado').on('submit', 'form[name="form_agendado"]', function(){
                var form = $(this);
                var botao = form.find(':button');
                
                $.ajax({
                  url: 'ajax/controle.php',
                  type: "POST",
                  data: 'acao=agendado&'+form.serialize(),
                  beforeSend: function(){
                    botao.attr('disable', true);
                    $('#load').fadeIn('slow');
                  },
                  success: function(retorno){
                    botao.attr('disabled', false);
                    $('#load').fadeOut('slow');

                    if(retorno === 'sucesso'){
                      form.fadeOut('slow', function(){
                        msgfun('Atualizado com sucesso! Atualiza&ccedil;&atilde;o em 1 segundo..','sucesso');
                        setTimeout(function(){
                          location.reload();
                        }, 1000);
                      });
                    }else {
                      msgfun('Erro ao agendar equipamento. Tente novamente!','alerta');
                      console.log(retorno);  
                    }
                  }

                });
                return false;
              });



            $('.box-footer').on("click", '#agendadosinloco', function(){
              var status = $(this).attr('data-status');
              $.post('ajax/controle.php', {acao: 'agendado_inloco', status: status}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Equipamentos agendados in-loco</i></b></h4>');
                  conteudo.html(retorno);
              });
            });

            $('.box-footer').on("click", '#calibradosinloco', function(){
              var status = $(this).attr('data-status');
              $.post('ajax/controle.php', {acao: 'calibrados_inloco', status: status}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Equipamentos calibrados in-loco</i></b></h4>');
                  conteudo.html(retorno);
              });
            });


            $('#ExemploModalCentralizado').on('submit', 'form[name="form_inloco"]', function(){
                var form = $(this);
                var botao = form.find(':button');
                
                $.ajax({
                  url: 'ajax/controle.php',
                  type: "POST",
                  data: 'acao=inloco&'+form.serialize(),
                  beforeSend: function(){
                    botao.attr('disable', true);
                    $('#load').fadeIn('slow');
                  },
                  success: function(retorno){
                    botao.attr('disabled', false);
                    $('#load').fadeOut('slow');

                    if(retorno === 'sucesso'){
                      form.fadeOut('slow', function(){
                        msgfun('Atualizado com sucesso! Atualiza&ccedil;&atilde;o em 1 segundo..','sucesso');
                        setTimeout(function(){
                          location.reload();
                        }, 1000);
                      });
                    }else {
                      msgfun('Erro ao agendar equipamento. Tente novamente!','alerta');
                      console.log(retorno);  
                    }
                  }


                });
                return false;
              });


            $('#ExemploModalCentralizado').on('submit', 'form[name="form_calibradosinloco"]', function(){
                var form = $(this);
                var botao = form.find(':button');
                
                $.ajax({
                  url: 'ajax/controle.php',
                  type: "POST",
                  data: 'acao=calibradosinloco&'+form.serialize(),
                  beforeSend: function(){
                    botao.attr('disable', true);
                    $('#load').fadeIn('slow');
                  },
                  success: function(retorno){
                    botao.attr('disabled', false);
                    $('#load').fadeOut('slow');

                    if(retorno === 'sucesso'){
                      form.fadeOut('slow', function(){
                        msgfun('Atualizado com sucesso! Atualiza&ccedil;&atilde;o em 1 segundo..','sucesso');
                        setTimeout(function(){
                          location.reload();
                        }, 1000);
                      });
                    }else {
                      msgfun('Erro ao atualizar calibração dos equipamentos. Tente novamente!','alerta');
                      console.log(retorno);  
                    }
                  }


                });
                return false;
              });



            //------------------------ ABRIR LISTA DE INSTRUMENTOS ----------------------
            $('.box').on("click", '#openinst', function(){
              $.post('ajax/controle.php', {acao: 'controleequip'}, function(retorno){
                $('#ExemploModalCentralizado').modal();
                $('#TituloModalCentralizado').html('<h4><b><i>Controle Equipamentos</i></b></h4>');
                  conteudo.html(retorno);
              });
            });

            $('#ExemploModalCentralizado').on('submit', 'form[name="form_controleequip"]', function(){
                var form = $(this);
                var botao = form.find(':button');
                var select = document.getElementById('listaorder');
                var value = select.options[select.selectedIndex].value;
                
                window.open('paginas/lista.php?o='+value, '_blank')
               
                return false;
              });

              //------------------------------ FUN&ccedil;&atilde;O DE MENSAGEM ------------------------
              function msgfun(msg, tipo){
                var retorno = $('.aviso');
                var tipo = (tipo === 'sucesso') ? 'success' : (tipo === 'alerta') ? 'warning' : (tipo === 'erro') ? 'danger' : (tipo === 'info') ? 'info' : alert('INFORME MENSAGENS DE SUCESSO, ALERTA, ERRO E INFO');
              
                retorno.empty().fadeOut('fast', function(){
                  return $(this).html('<div class="alert alert-'+tipo+'">'+msg+'</div>').fadeIn('slow');
                });
              }


          });
