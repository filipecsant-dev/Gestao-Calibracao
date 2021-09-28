<?php
require '../funcoes/banco/conexao.php';
require '../funcoes/crud/crud.php';
$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
switch ($acao) {

	case 'add_inst':
	?>
		
		<div class="aviso"></div>
		<form action="" name="form_addinst" method="post">

		   <div class="form-group row">
		    <div class="col">
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="instrumento" placeholder="Instrumento">
		    </div>
		  </div>

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Adicionar Instrumento</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>


		</form>
	<?php
	break;

	case 'adicionarinst':
		$instrumento = filter_input(INPUT_POST, 'instrumento', FILTER_SANITIZE_STRING);

		if($instrumento === ''){
			echo 'faltou';
		}else{
			if(verificainst($instrumento)){
				if(addinst($instrumento)){
					echo 'sucesso';
				}else{
					echo 'erro';
				}
			}else{
				echo 'existe';
			}
			
		}
	break;

	//-------------------------- equipamento ------------------------------
	case 'add_equip':
	$instrumento = filter_input(INPUT_POST, 'instrumento', FILTER_SANITIZE_STRING);
	?>
		
		<div class="aviso"></div>
		<form action="" name="form_addequip" method="post">

		   <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Instrumento:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="instrumento" value="<?php echo $instrumento; ?>" readonly>
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">TAG<span style="color:red;">*</span>:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="tag" placeholder="Ex: BL-01">
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Periodicidade<span style="color:red;">*</span>:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="periodicidade" placeholder="Ex: Semestral">
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Faixa de Trabalho Min.:<span style="color:red;">*</span>:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="faixatrabalhomin" placeholder="Ex: 10kg">
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Faixa de Trabalho Máx.:<span style="color:red;">*</span>:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="faixatrabalhomax" placeholder="Ex: 2.500kg">
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Critério de Aceitação ± <span style="color:red;">*</span>:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="criterio" placeholder="Ex: ± 2000g">
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Localização<span style="color:red;">*</span>:</small>
		    	<select class="form-control" style="width: 80%; margin-left: 10%;" name="localizacao1" id="locali1">
		      	<option value="">- Selecione a localização -</option>

		      	<option value="Corte/Solda">Corte/Solda</option>
		      	<option value="Corte/Solda 1">Corte/Solda 1</option>
		      	<option value="Corte/Solda 2">Corte/Solda 2</option>
		      	<option value="Corte/Solda 3">Corte/Solda 3</option>
		      	<option value="Corte/Solda 4">Corte/Solda 4</option>
		      	<option value="Corte/Solda 6">Corte/Solda 6</option>
		      	<option value="Corte/Solda 7">Corte/Solda 7</option>
		      	<option value="Corte/Solda 8">Corte/Solda 8</option>
		      	<option value="Extrusão">Extrusão</option>
		      	<option value="Extrusora 1">Extrusora 1</option>
		      	<option value="Extrusora 2">Extrusora 2</option>
		      	<option value="Extrusora 3">Extrusora 3</option>
		      	<option value="Extrusora 4">Extrusora 4</option>
		      	<option value="Extrusora 5">Extrusora 5</option>
		      	<option value="Extrusora 6">Extrusora 6</option>
		      	<option value="Extrusora 7">Extrusora 7</option>
		      	<option value="Extrusora 8">Extrusora 8</option>
		      	<option value="Extrusora 9">Extrusora 9</option>
		      	<option value="Extrusora 10">Extrusora 10</option>
		      	<option value="Impressão">Impressão</option>
		      	<option value="Impressão em Linha">Impressão em Linha</option>
		      	<option value="Impressora F1">Impressora F1</option>
		      	<option value="Impressora F2">Impressora F2</option>
		      	<option value="Impressora F3">Impressora F3</option>
		      	<option value="Impressora Flexo Tech">Impressora Flexo Tech</option>
		      	<option value="Impressora BBI-4">Impressora BBI-4</option>
		      	<option value="Impressora BBI-4">Impressora BBI-4.2</option>
		      	<option value="FP4">FP4</option>
		      	<option value="Rebobinadeira">Rebobinadeira</option>
		      	<option value="Rebobinadeira 1">Rebobinadeira 1</option>
		      	<option value="Rebobinadeira 2">Rebobinadeira 2</option>
		      	<option value="Rebobinadeira 3">Rebobinadeira 3</option>
		      	<option value="Rebobinadeira 4">Rebobinadeira 4</option>
		      	<option value="Rebobinadeira 5">Rebobinadeira 5</option>
		      	<option value="Misturador">Misturador</option>
		      	<option value="Misturador 1">Misturador 1</option>
		      	<option value="Misturador 2">Misturador 2</option>
		      	<option value="Misturador 3">Misturador 3</option>
		      	<option value="Misturador 4">Misturador 4</option>
		      	<option value="Misturador 5">Misturador 5</option>
		      	<option value="Recuperadora">Recuperadora</option>
		      	<option value="Recuperadora 1">Recuperadora 1</option>
		      	<option value="Recuperadora 2">Recuperadora 2</option>
		      	<option value="Laboratório">Laboratório</option>
		      	<option value="Laboratório Extrusão">Laboratório Extrusão</option>
		      	<option value="Laboratório Impressão">Laboratório Impressão</option>
		      	<option value="Capela Impressão">Capela Impressão</option>
		      	<option value="Coordenação Qualidade">Coordenação Qualidade</option>
		      	<option value="Casa de Tintas">Casa de Tintas</option>
		      	<option value="Técnica">Técnica</option>
		      	<option value="Elétrica">Elétrica</option>
		      	<option value="Mecânica">Mecânica</option>
		      	<option value="Calibração">Calibração</option>
		      	<option value="Reserva">Reserva</option>
		      
		      </select>
		    </div>
		  	</div>



		  	<div class="form-group row" id="locali3">
		    <div class="col">
		    	<small style="width: 80%; margin-left: 10%;">Complemento<span style="color:red;">*</span>:</small>
		    	<select class="form-control" style="width: 80%; margin-left: 10%;" name="localizacao2" id="locali2">

		      </select>
		    </div>
		  	</div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Marca:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="marca" placeholder="Ex: Toledo">
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Modelo:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="modelo" placeholder="Ex: 2180">
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Série:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="serie" placeholder="Ex: 04042034347-EF">
		    </div>
		  </div>

		 
		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Empresa responsável por calibrar<span style="color:red;">*</span>:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="calibrar" placeholder="Ex: Ekilibra">
		    </div>
		  </div>

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Adicionar Equipamento</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>


		</form>
	<?php
	break;

	case 'adicionarequip':
		$instrumento = filter_input(INPUT_POST, 'instrumento', FILTER_SANITIZE_STRING);
		$tag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_STRING);
		$periodicidade = filter_input(INPUT_POST, 'periodicidade', FILTER_SANITIZE_STRING);
		$faixatrabalhomin = filter_input(INPUT_POST, 'faixatrabalhomin', FILTER_SANITIZE_STRING);
		$faixatrabalhomax = filter_input(INPUT_POST, 'faixatrabalhomax', FILTER_SANITIZE_STRING);
		$criterio = filter_input(INPUT_POST, 'criterio', FILTER_SANITIZE_STRING);
		$localizacao1 = filter_input(INPUT_POST, 'localizacao1', FILTER_SANITIZE_STRING);
		$localizacao2 = filter_input(INPUT_POST, 'localizacao2', FILTER_SANITIZE_STRING);
		$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
		$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
		$serie = filter_input(INPUT_POST, 'serie', FILTER_SANITIZE_STRING);
		$calibrar = filter_input(INPUT_POST, 'calibrar', FILTER_SANITIZE_STRING);

		if($instrumento === '' || $tag === '' || $periodicidade === '' || $faixatrabalhomin === '' || $faixatrabalhomax === '' || $criterio === '' || $calibrar === '' || $localizacao1 === ''){
			
			echo 'faltou';

		}else{
			if($localizacao1 === 'Extrusora 1' || $localizacao1 === 'Extrusora 2' || $localizacao1 === 'Extrusora 3' || $localizacao1 === 'Extrusora 4' || $localizacao1 === 'Extrusora 5' || $localizacao1 === 'Extrusora 6' || $localizacao1 === 'Extrusora 7' || $localizacao1 === 'Extrusora 8' || $localizacao1 === 'Extrusora 9' || $localizacao1 === 'Extrusora 10'){

				if($localizacao2 === ''){
					echo 'faltou';
				}else{
					if(verificaequip($tag)){
						$localizacao = $localizacao1.' / '.$localizacao2;
						if(addequip($instrumento,$tag,$periodicidade,$faixatrabalhomin,$faixatrabalhomax,$criterio,$localizacao,$marca,$modelo,$serie,$calibrar)){
							echo 'sucesso';
						}else{
							echo 'erro';
						}
					}else{
						echo 'existe';
					}
				}

			}else{
				if(verificaequip($tag)){
					if(addequip($instrumento,$tag,$periodicidade,$faixatrabalhomin,$faixatrabalhomax,$criterio,$localizacao1,$marca,$modelo,$serie,$calibrar)){
						echo 'sucesso';
					}else{
						echo 'erro';
					}
				}else{
					echo 'existe';
				}
			}

		
		}

	break;
// ----------------------------- ATUALIZAR EQUIPAMENTO ------------------------------
	case 'att_equip':
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
	$info = filter_input(INPUT_POST, 'info', FILTER_SANITIZE_STRING);

	?>

		<div class="aviso"></div>
		<form action="" name="form_attequip" method="post">

	  		<div class="form-group row">
		    <div class="col">
		    	<small style="width: 80%; margin-left: 10%;">Nova localização:</small>
		    	<select class="form-control" style="width: 80%; margin-left: 10%;" name="dados1" id="local">
		      	<option value="">- Selecione a localização -</option>

		      	<option value="Corte/Solda">Corte/Solda</option>
		      	<option value="Corte/Solda 1">Corte/Solda 1</option>
		      	<option value="Corte/Solda 2">Corte/Solda 2</option>
		      	<option value="Corte/Solda 3">Corte/Solda 3</option>
		      	<option value="Corte/Solda 4">Corte/Solda 4</option>
		      	<option value="Corte/Solda 6">Corte/Solda 6</option>
		      	<option value="Corte/Solda 7">Corte/Solda 7</option>
		      	<option value="Corte/Solda 8">Corte/Solda 8</option>
		      	<option value="Extrusão">Extrusão</option>
		      	<option value="Extrusora 1">Extrusora 1</option>
		      	<option value="Extrusora 2">Extrusora 2</option>
		      	<option value="Extrusora 3">Extrusora 3</option>
		      	<option value="Extrusora 4">Extrusora 4</option>
		      	<option value="Extrusora 5">Extrusora 5</option>
		      	<option value="Extrusora 6">Extrusora 6</option>
		      	<option value="Extrusora 7">Extrusora 7</option>
		      	<option value="Extrusora 8">Extrusora 8</option>
		      	<option value="Extrusora 9">Extrusora 9</option>
		      	<option value="Extrusora 10">Extrusora 10</option>
		      	<option value="Impressão">Impressão</option>
		      	<option value="Impressão em Linha">Impressão em Linha</option>
		      	<option value="Impressora F1">Impressora F1</option>
		      	<option value="Impressora F2">Impressora F2</option>
		      	<option value="Impressora F3">Impressora F3</option>
		      	<option value="Impressora Flexo Tech">Impressora Flexo Tech</option>
		      	<option value="Impressora BBI-4">Impressora BBI-4</option>
		      	<option value="Impressora BBI-4">Impressora BBI-4.2</option>
		      	<option value="FP4">FP4</option>
		      	<option value="Rebobinadeira">Rebobinadeira</option>
		      	<option value="Rebobinadeira 1">Rebobinadeira 1</option>
		      	<option value="Rebobinadeira 2">Rebobinadeira 2</option>
		      	<option value="Rebobinadeira 3">Rebobinadeira 3</option>
		      	<option value="Rebobinadeira 4">Rebobinadeira 4</option>
		      	<option value="Rebobinadeira 5">Rebobinadeira 5</option>
		      	<option value="Misturador">Misturador</option>
		      	<option value="Misturador 1">Misturador 1</option>
		      	<option value="Misturador 2">Misturador 2</option>
		      	<option value="Misturador 3">Misturador 3</option>
		      	<option value="Misturador 4">Misturador 4</option>
		      	<option value="Misturador 5">Misturador 5</option>
		      	<option value="Recuperadora">Recuperadora</option>
		      	<option value="Recuperadora 1">Recuperadora 1</option>
		      	<option value="Recuperadora 2">Recuperadora 2</option>
		      	<option value="Laboratório">Laboratório</option>
		      	<option value="Laboratório Extrusão">Laboratório Extrusão</option>
		      	<option value="Laboratório Impressão">Laboratório Impressão</option>
		      	<option value="Capela Impressão">Capela Impressão</option>
		      	<option value="Coordenação Qualidade">Coordenação Qualidade</option>
		      	<option value="Casa de Tintas">Casa de Tintas</option>
		      	<option value="Técnica">Técnica</option>
		      	<option value="Elétrica">Elétrica</option>
		      	<option value="Mecânica">Mecânica</option>
		      	<option value="Calibração">Calibração</option>
		      	<option value="Reserva">Reserva</option>
		      
		      </select>
		    </div>
		  	</div>



		  	<div class="form-group row" id="local3">
		    <div class="col">
		    	<small style="width: 80%; margin-left: 10%;">Complemento:</small>
		    	<select class="form-control" style="width: 80%; margin-left: 10%;" name="dados2" id="local2">

		      </select>
		    </div>
		  	</div>

		

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Atualizar</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>
	      <input type="hidden" name="id" value="<?php echo $id; ?>">
	      <input type="hidden" name="info" value="<?php echo $info; ?>">

		</form>
	<?php
	break;

	case 'att_equip2':
		$value = filter_input(INPUT_POST, 'value', FILTER_SANITIZE_STRING);

		if($value === 'Extrusora 1'){
		?>
			<option value="Adaptador">Adaptador</option>
			<option value="Helicoidal">Helicoidal</option>
			<option value="Matriz">Matriz</option>
			<option value="Zona 1">Zona 1</option>
			<option value="Zona 2">Zona 2</option>
			<option value="Zona 3">Zona 3</option>
			<option value="Zona 4">Zona 4</option>
			<option value="Zona 5">Zona 5</option>
			<option value="Zona 6">Zona 6</option>
		<?php
		}

		if($value === 'Extrusora 2'){
		?>
			<option value="Adaptador">Adaptador</option>
			<option value="Calibrador">Calibrador</option>
			<option value="Flange">Flange</option>
			<option value="Matriz">Matriz</option>
			<option value="Zona 1">Zona 1</option>
			<option value="Zona 2">Zona 2</option>
			<option value="Zona 3">Zona 3</option>
			<option value="Zona 4">Zona 4</option>
			<option value="Zona 5">Zona 5</option>
			<option value="Zona 6">Zona 6</option>
			<option value="Zona 6">Zona 7</option>
		<?php
		}
		if($value === 'Extrusora 3'){
		?>
			<option value="Porta A / Adaptador">Porta A / Adaptador</option>
			<option value="Porta A / Calibrador">Porta A / Calibrador</option>
			<option value="Porta A / Flange">Porta A / Flange</option>
			<option value="Porta A / Matriz">Porta A / Matriz</option>
			<option value="Porta A / Temperatura de Massa">Porta A / Temperatura de Massa</option>
			<option value="Porta A / Zona 1">Porta A / Zona 1</option>
			<option value="Porta A / Zona 2">Porta A / Zona 2</option>
			<option value="Porta A / Zona 3">Porta A / Zona 3</option>
			<option value="Porta A / Zona 4">Porta A / Zona 4</option>
			<option value="Porta A / Zona 5">Porta A / Zona 5</option>


			<option value="" style="font-weight: bold;">>- Porta B -<</option>

			<option value="Porta B / Temperatura de Massa">Porta B / Temperatura de Massa</option>
			<option value="Porta B / Zona 1">Porta B / Zona 1</option>
			<option value="Porta B / Zona 2">Porta B / Zona 2</option>
			<option value="Porta B / Zona 3">Porta B / Zona 3</option>
			<option value="Porta B / Zona 4">Porta B / Zona 4</option>
			<option value="Porta B / Zona 5">Porta B / Zona 5</option>

			<option value="" style="font-weight: bold;">>- Porta C -<</option>

			<option value="Porta C / Temperatura de Massa">Porta C / Temperatura de Massa</option>
			<option value="Porta C / Zona 1">Porta C / Zona 1</option>
			<option value="Porta C / Zona 2">Porta C / Zona 2</option>
			<option value="Porta C / Zona 3">Porta C / Zona 3</option>
			<option value="Porta C / Zona 4">Porta C / Zona 4</option>
			<option value="Porta C / Zona 5">Porta C / Zona 5</option>
		<?php
		}
		if($value === 'Extrusora 4'){
		?>
			<option value="Porta A / Adaptador">Porta A / Adaptador</option>
			<option value="Porta A / Calibrador">Porta A / Calibrador</option>
			<option value="Porta A / Flange">Porta A / Flange</option>
			<option value="Porta A / Matriz">Porta A / Matriz</option>
			<option value="Porta A / Temperatura de Massa">Porta A / Temperatura de Massa</option>
			<option value="Porta A / Zona 1">Porta A / Zona 1</option>
			<option value="Porta A / Zona 2">Porta A / Zona 2</option>
			<option value="Porta A / Zona 3">Porta A / Zona 3</option>
			<option value="Porta A / Zona 4">Porta A / Zona 4</option>
			<option value="Porta A / Zona 5">Porta A / Zona 5</option>


			<option value="" style="font-weight: bold;">>- Porta B -<</option>

			<option value="Porta B / Temperatura de Massa">Porta B / Temperatura de Massa</option>
			<option value="Porta B / Zona 1">Porta B / Zona 1</option>
			<option value="Porta B / Zona 2">Porta B / Zona 2</option>
			<option value="Porta B / Zona 3">Porta B / Zona 3</option>
			<option value="Porta B / Zona 4">Porta B / Zona 4</option>
			<option value="Porta B / Zona 5">Porta B / Zona 5</option>
			<option value="Porta B / Zona 5">Porta B / Zona 6</option>

			<option value="" style="font-weight: bold;">>- Porta C -<</option>

			<option value="Porta C / Temperatura de Massa">Porta C / Temperatura de Massa</option>
			<option value="Porta C / Zona 1">Porta C / Zona 1</option>
			<option value="Porta C / Zona 2">Porta C / Zona 2</option>
			<option value="Porta C / Zona 3">Porta C / Zona 3</option>
			<option value="Porta C / Zona 4">Porta C / Zona 4</option>
			<option value="Porta C / Zona 5">Porta C / Zona 5</option>
		<?php
		}
		if($value === 'Extrusora 5'){
		?>
			<option value="Porta A / Adaptador">Porta A / Adaptador</option>
			<option value="Porta A / Calibrador">Porta A / Calibrador</option>
			<option value="Porta A / Flange">Porta A / Flange</option>
			<option value="Porta A / Matriz">Porta A / Matriz</option>
			<option value="Porta A / Temperatura de Massa">Porta A / Temperatura de Massa</option>
			<option value="Porta A / Zona 1">Porta A / Zona 1</option>
			<option value="Porta A / Zona 2">Porta A / Zona 2</option>
			<option value="Porta A / Zona 3">Porta A / Zona 3</option>
			<option value="Porta A / Zona 4">Porta A / Zona 4</option>
			<option value="Porta A / Zona 5">Porta A / Zona 5</option>


			<option value="" style="font-weight: bold;">>- Porta B -<</option>

			<option value="Porta B / Temperatura de Massa">Porta B / Temperatura de Massa</option>
			<option value="Porta B / Zona 1">Porta B / Zona 1</option>
			<option value="Porta B / Zona 2">Porta B / Zona 2</option>
			<option value="Porta B / Zona 3">Porta B / Zona 3</option>
			<option value="Porta B / Zona 4">Porta B / Zona 4</option>
			<option value="Porta B / Zona 5">Porta B / Zona 5</option>
			<option value="Porta B / Zona 5">Porta B / Zona 6</option>

			<option value="" style="font-weight: bold;">>- Porta C -<</option>

			<option value="Porta C / Temperatura de Massa">Porta C / Temperatura de Massa</option>
			<option value="Porta C / Zona 1">Porta C / Zona 1</option>
			<option value="Porta C / Zona 2">Porta C / Zona 2</option>
			<option value="Porta C / Zona 3">Porta C / Zona 3</option>
			<option value="Porta C / Zona 4">Porta C / Zona 4</option>
			<option value="Porta C / Zona 5">Porta C / Zona 5</option>
		<?php
		}
		if($value === 'Extrusora 6'){
		?>
			<option value="Porta A / Adaptador">Porta A / Adaptador</option>
			<option value="Porta A / Calibrador">Porta A / Calibrador</option>
			<option value="Porta A / Flange">Porta A / Flange</option>
			<option value="Porta A / Matriz">Porta A / Matriz</option>
			<option value="Porta A / Temperatura de Massa">Porta A / Temperatura de Massa</option>
			<option value="Porta A / Zona 1">Porta A / Zona 1</option>
			<option value="Porta A / Zona 2">Porta A / Zona 2</option>
			<option value="Porta A / Zona 3">Porta A / Zona 3</option>
			<option value="Porta A / Zona 4">Porta A / Zona 4</option>
			<option value="Porta A / Zona 5">Porta A / Zona 5</option>


			<option value="" style="font-weight: bold;">>- Porta B -<</option>

			<option value="Porta B / Temperatura de Massa">Porta B / Temperatura de Massa</option>
			<option value="Porta B / Zona 1">Porta B / Zona 1</option>
			<option value="Porta B / Zona 2">Porta B / Zona 2</option>
			<option value="Porta B / Zona 3">Porta B / Zona 3</option>
			<option value="Porta B / Zona 4">Porta B / Zona 4</option>
			<option value="Porta B / Zona 5">Porta B / Zona 5</option>
			<option value="Porta B / Zona 5">Porta B / Zona 6</option>

			<option value="" style="font-weight: bold;">>- Porta C -<</option>

			<option value="Porta C / Temperatura de Massa">Porta C / Temperatura de Massa</option>
			<option value="Porta C / Zona 1">Porta C / Zona 1</option>
			<option value="Porta C / Zona 2">Porta C / Zona 2</option>
			<option value="Porta C / Zona 3">Porta C / Zona 3</option>
			<option value="Porta C / Zona 4">Porta C / Zona 4</option>
			<option value="Porta C / Zona 5">Porta C / Zona 5</option>
		<?php
		}
		if($value === 'Extrusora 7'){
		?>
			<option value="Porta A / Adaptador">Porta A / Adaptador</option>
			<option value="Porta A / Calibrador">Porta A / Calibrador</option>
			<option value="Porta A / Matriz">Porta A / Matriz</option>
			<option value="Porta A / Temperatura de Massa">Porta A / Temperatura de Massa</option>
			<option value="Porta A / Zona 1">Porta A / Zona 1</option>
			<option value="Porta A / Zona 2">Porta A / Zona 2</option>
			<option value="Porta A / Zona 3">Porta A / Zona 3</option>
			<option value="Porta A / Zona 4">Porta A / Zona 4</option>
			<option value="Porta A / Zona 5">Porta A / Zona 5</option>
			<option value="Porta A / Zona 5">Porta A / Zona 6</option>


		<?php
		}
		if($value === 'Extrusora 8'){
		?>
			<option value=""></option>
		<?php
		}
		if($value === 'Extrusora 9'){
		?>
			<option value="Porta A / Adaptador">Porta A / Adaptador</option>
			<option value="Porta A / Calibrador">Porta A / Calibrador</option>
			<option value="Porta A / Flange">Porta A / Flange</option>
			<option value="Porta A / Matriz">Porta A / Matriz</option>
			<option value="Porta A / Temperatura de Massa">Porta A / Temperatura de Massa</option>
			<option value="Porta A / Zona 1">Porta A / Zona 1</option>
			<option value="Porta A / Zona 2">Porta A / Zona 2</option>
			<option value="Porta A / Zona 3">Porta A / Zona 3</option>
			<option value="Porta A / Zona 4">Porta A / Zona 4</option>
			<option value="Porta A / Zona 5">Porta A / Zona 5</option>
			<option value="Porta A / Zona 5">Porta A / Zona 6</option>


			<option value="" style="font-weight: bold;">>- Porta B -<</option>

			<option value="Porta B / Temperatura de Massa">Porta B / Temperatura de Massa</option>
			<option value="Porta B / Zona 1">Porta B / Zona 1</option>
			<option value="Porta B / Zona 2">Porta B / Zona 2</option>
			<option value="Porta B / Zona 3">Porta B / Zona 3</option>
			<option value="Porta B / Zona 4">Porta B / Zona 4</option>
			<option value="Porta B / Zona 5">Porta B / Zona 5</option>
			<option value="Porta B / Zona 5">Porta B / Zona 6</option>

			<option value="" style="font-weight: bold;">>- Porta C -<</option>

			<option value="Porta C / Temperatura de Massa">Porta C / Temperatura de Massa</option>
			<option value="Porta C / Zona 1">Porta C / Zona 1</option>
			<option value="Porta C / Zona 2">Porta C / Zona 2</option>
			<option value="Porta C / Zona 3">Porta C / Zona 3</option>
			<option value="Porta C / Zona 4">Porta C / Zona 4</option>
			<option value="Porta C / Zona 5">Porta C / Zona 5</option>
			<option value="Porta C / Zona 5">Porta C / Zona 6</option>
		<?php
		}
		if($value === 'Extrusora 10'){
		?>
			<option value=""></option>
		<?php
		}

	?>
			
	<?php
	break;

	case 'atualizarequip':
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$dados1 = filter_input(INPUT_POST, 'dados1', FILTER_SANITIZE_STRING);
		$dados2 = filter_input(INPUT_POST, 'dados2', FILTER_SANITIZE_STRING);

		if($dados1 != ''){
			if($dados1 === 'Extrusora 1' || $dados1 === 'Extrusora 2' || $dados1 === 'Extrusora 3' || $dados1 === 'Extrusora 4' || $dados1 === 'Extrusora 5' || $dados1 === 'Extrusora 6' || $dados1 === 'Extrusora 7' || $dados1 === 'Extrusora 8' || $dados1 === 'Extrusora 9' || $dados1 === 'Extrusora 10'){

				if($dados2 === ''){
					echo 'faltou';
				}else{
					$dados = $dados1.' / '.$dados2;
					if(attequip($id,$dados)){
						echo 'sucesso';
					}else{
						echo 'erro';
					}
				}
			}else{
				if(attequip($id,$dados1)){
					echo 'sucesso';
				}else{
					echo 'erro';
				}
			}

			
			
			
		}else{
			echo 'faltou';
		}
	break;


	case 'adicionarinst':
		$instrumento = filter_input(INPUT_POST, 'instrumento', FILTER_SANITIZE_STRING);

		if($instrumento === ''){
			echo 'faltou';
		}else{
			if(verificainst($instrumento)){
				if(addinst($instrumento)){
					echo 'sucesso';
				}else{
					echo 'erro';
				}
			}else{
				echo 'existe';
			}
			
		}
	break;

	//-------------------------- Certificado ------------------------------
	case 'add_cert':
	$instrumento = filter_input(INPUT_POST, 'instrumento', FILTER_SANITIZE_STRING);
	?>
		
		<div class="aviso"></div>
		<form action="" name="form_addcert" method="post">

		   <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Equipamento:</small>
		      <select class="form-control" style="width: 80%; margin-left: 10%;" name="id">
		      	<option value="">Escolha o equipamento</option>
		      	<?php if(listarequipamentos()){
		      			$listarequipamentos = listarequipamentos();
		      			foreach ($listarequipamentos as $lis) {
		      				if($lis->instrumento === $instrumento){
		      			  ?>
		      	<option value="<?php echo $lis->id; ?>"><?php echo $lis->tag; ?></option>
		      	<?php } } } ?>
		      </select>
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Certificado:</small>
		      <input type="text" id="campocert" style="width: 80%; margin-left: 10%;" class="form-control" name="certificado" placeholder="0001 ( '\ ano'  será acrescentado automaticamente ex: nº/21)">
		    </div>
		  </div>

		  <div class="form-group row">
		    <div class="col">
		    	<small style="width: 80%; margin-left: 10%;">Última calibração:</small>
		      <input type="date" style="width: 80%; margin-left: 10%;" class="form-control" name="ultimacalibracao" placeholder="Última Calibração">
		    </div>
		  </div>

		  <input type="hidden" name="instrumento" value="<?php echo $instrumento; ?>">

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Adicionar certificado</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>


		</form>
	<?php
	break;

	case 'adicionarcert':
		$instrumento = filter_input(INPUT_POST, 'instrumento', FILTER_SANITIZE_STRING);
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$certificado = filter_input(INPUT_POST, 'certificado', FILTER_SANITIZE_STRING);
		$ultimacalibracao = filter_input(INPUT_POST, 'ultimacalibracao', FILTER_SANITIZE_STRING);
		
		$ano = date('y', strtotime($ultimacalibracao));

		$info = infoequipamento2($id);
		$info2 = infoequipamento2($id);
		$periodicidade = $info->periodicidade;
		$tag = $info2->tag;

		if($certificado === '' || $ultimacalibracao === '' || $tag === ''){
			echo 'faltou';
		}else{
				if(addcert($id,$instrumento,$tag,$certificado,$ultimacalibracao,$periodicidade,$ano)){

					if(attequip2($id,$ultimacalibracao,$certificado,$periodicidade)){
						echo 'sucesso';
					}else{
						echo 'erro';
					}
					
				}else{
					echo 'erro';
				}
			
		}
	break;

	//-------------------------- Observação ------------------------------
	case 'add_obs':
	$equipamento = filter_input(INPUT_POST, 'equipamento', FILTER_SANITIZE_STRING);
	?>
		<div class="aviso"></div>
		<form action="" name="form_addobs" method="post">

		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Observação:</small>
		      <input type="text" style="width: 80%; margin-left: 10%;" class="form-control" name="observacao" placeholder="Digite a observação.">
		    </div>
		  </div>


		  <input type="hidden" name="equipamento" value="<?php echo $equipamento; ?>">

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Adicionar observação</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>


		</form>
	<?php
	break;

	case 'adicionarobs':
		$equipamento = filter_input(INPUT_POST, 'equipamento', FILTER_SANITIZE_NUMBER_INT);
		$observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_STRING);
		
		if($equipamento === '' || $observacao === ''){
			echo 'faltou';
		}else{

			if(addobs($equipamento,$observacao)){
				echo 'sucesso';
			}else{
				echo 'erro';
			}
			
		}
	break;

	//-------------------------- REMOVER CERTIFICADO ------------------------------
	case 'remov_cert':
	?>
		<div class="aviso"></div>
		<form action="" name="form_removcert" method="post">

		  <div class="form-group row" style="margin-left: 15px;">
		    <div class="col">
		      <div style="margin-left:15px; font-size: 18px; margin-bottom: 5px;">Antes de remover os certificados certifique-se:</div>
		      <ul>
		      	<li>Que foram removidos da pasta suspensa.</li>
		      	<li>Que foram removidos da pasta informatizada.</li>
		      	<li>Que foram descartados de acordo com procedimento.</li>
		      </ul>
		    </div>
		  </div>

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Remover Certificados</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>


		</form>
	<?php
	break;

	case 'removcert':


			// if(removcert()){
			// 	echo 'sucesso';
			// }else{
			// 	echo 'erro';
			// }
			
	break;

	case 'agendado_equip':
	$equipamento = filter_input(INPUT_POST, 'equipamento', FILTER_SANITIZE_NUMBER_INT);
	$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT);
	$instrumento = filter_input(INPUT_POST, 'instrumento', FILTER_SANITIZE_STRING);
	?>
		<div class="aviso"></div>
		<form action="" name="form_agendado" method="post">

		  <div class="form-group row">
		    <div class="col">
		    	<small style="width: 80%; margin-left: 10%;">Escolha a data de envio:</small>
		      <input type="date" style="width: 80%; margin-left: 10%;" class="form-control" name="date" placeholder="Data" value="<?php echo date('Y-m-d'); ?>">
		    </div>
		  </div>
		  
		  <input type="hidden" name="id" value="<?php echo $equipamento; ?>">
		  <input type="hidden" name="status" value="<?php echo $status; ?>">
		  <input type="hidden" name="instrumento" value="<?php echo $instrumento; ?>">

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Atualizar status</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>


		</form>
	<?php
	break;

	case 'agendado':
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		$instrumento = filter_input(INPUT_POST, 'instrumento', FILTER_SANITIZE_STRING);
		

		if($date === ''){
			echo 'erro';
		}else{
			$date = date('d/m/Y', strtotime($date));
			if($status === '1'){	
				if($instrumento === 'Controlador de Temperatura' || $instrumento === 'Balança' || $instrumento === 'Estufa' || $instrumento === 'Temporizador')
					{
						$obs = 'Agendado para calibra&ccedil;&atilde;o em '.$date.'.';
					} else {
						$obs = 'Enviado para calibra&ccedil;&atilde;o em '.$date.'.';
					}
			}else{
				if($instrumento === 'Controlador de Temperatura' || $instrumento === 'Balança' || $instrumento === 'Estufa' || $instrumento === 'Temporizador')
					{
						$obs = 'calibra&ccedil;&atilde;o concluída em '.$date.'.';
					} else {
						$obs = 'Entregue ap&oacute;s calibra&ccedil;&atilde;o em '.$date.'.';
					}
				
			}

				if(agendado($id,$status)){
					if(addobs($id,$obs)){
						if($status != '1'){
							if(attequip5($id)){
								echo 'sucesso';
							}else{
								echo 'erro1';
							}
						}else{
							echo 'sucesso';	
						}
					}else{
						echo 'erro2';
					}
				}else{
					echo 'erro3';
				}


				
		}
	break;

	case 'agendado_inloco':
	$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT);
	?>
		<div class="aviso"></div>
		<form action="" name="form_inloco" method="post">

		  <div class="form-group row">
		    <div class="col">
		    	<small style="width: 80%; margin-left: 10%;">Escolha a data de agendamento</small>
		      <input type="date" style="width: 80%; margin-left: 10%;" class="form-control" name="date" placeholder="Data" value="<?php echo date('Y-m-d'); ?>">
		    </div>
		  </div>

		  <input type="hidden" name="status" value="<?php echo $status; ?>">

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Atualizar status</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>


		</form>
	<?php
	break;

	case 'calibrados_inloco':
	$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT);
	?>
		<div class="aviso"></div>
		<form action="" name="form_calibradosinloco" method="post">

		  <div class="form-group row">
		    <div class="col">
		    	<small style="width: 80%; margin-left: 10%;">Escolha a data de calibração</small>
		      <input type="date" style="width: 80%; margin-left: 10%;" class="form-control" name="date" placeholder="Data" value="<?php echo date('Y-m-d'); ?>">
		    </div>
		  </div>

		  <input type="hidden" name="status" value="<?php echo $status; ?>">

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Atualizar status</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>


		</form>
	<?php
	break;

	case 'inloco':
		$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		

		if($date === ''){
			echo 'erro';
		}else{
			$date = date('d/m/Y', strtotime($date));
			if($status === '1'){	
				$obs = 'Agendado para calibra&ccedil;&atilde;o em '.$date.'.';
					
			}

			$total = qntvalidadeprox3();
			$i = 0;
			while($i < $total){
				$id = listaridvalidade();

					if(agendado($id,$status)){
						if(addobs($id,$obs)){
							$i++;
						
						}else{
							echo 'erro2';
						}
					}else{
						echo 'erro3';
					}
				}		
			
			if($i >= $total){ echo 'sucesso';}
		}
		
	break;

	case 'calibradosinloco':
		$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_NUMBER_INT);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		

		if($date === ''){
			echo 'erro';
		}else{
			$date = date('d/m/Y', strtotime($date));
			if($status === '1'){	
				$obs = 'calibra&ccedil;&atilde;o concluída em '.$date.'.';
					
			}

			$total = qntemtransito();
			$i = 0;
			while($i < $total){
				$id = listaridemtransito();

					if(calibrado($id)){
						if(addobs($id,$obs)){
							if(attequip5($id)){
								$i++;
							}else{
								echo 'erro1';
							}
							
						}else{
							echo 'erro2';
						}
					}else{
						echo 'erro3';
					}
				}		
			
			if($i >= $total){ echo 'sucesso';}
		}
		
	break;

	case 'controleequip':
	?>
		<form action="" name="form_controleequip" method="post">

		<div class="aviso"></div>
		  <div class="form-group row">
		    <div class="col">
		      <small style="width: 80%; margin-left: 10%;">Ordernar por:</small><br />
		      <select id="listaorder" style="width: 40%; margin-left: 10%;">
		      	<option value="1" Selected>Tag</option>
		      	<option value="2">Localização</option>
		      	<option value="3">Validade Próxima (Somente) - Tag</option>
		      	<option value="4">Validade Próxima (Somente) - Validade</option>
		      	<option value="5">Validade Próxima (Somente) - Envio</option>
		      </select>
		    </div>
		  </div>

		  <div class="col-auto my-1">
	      	<button type="submit" class="btn btn-primary" style="margin-top:5%;margin-left: 8%;">Confirmar</button>
	      	<img src="img/load2.gif" align="center" id="load" style="display:none; margin-top:5%;margin-left: 5px;width: 30px;">
	      </div>


		</form>
	<?php
	break;



	//ERRO
	default:
		echo 'Erro n achado';
	break;
		
}