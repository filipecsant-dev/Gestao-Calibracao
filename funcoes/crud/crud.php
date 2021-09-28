<?php

function listarinstrumentos(){
	$pdo = conectar();

	try{
		$listarins = $pdo->query("SELECT * FROM instrumentos");

		if($listarins->rowCount() > 0):
			return $listarins->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarequipamentos(){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM equipamentos");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarequipamentoscontrole(){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM equipamentos ORDER BY tag ASC");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listaequipcal($order){
	$pdo = conectar();

	

	try{
		if($order === '1'){$listareq = $pdo->query("SELECT * FROM equipamentos ORDER BY tag ASC");}
		else{$listareq = $pdo->query("SELECT * FROM equipamentos ORDER BY localizacao ASC");}
		

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarequipamentosval(){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM equipamentos ORDER BY proximacalibracao ASC");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarequipamentosval5(){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM equipamentos ORDER BY proximacalibracao ASC, calibrar ASC");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarequipamentosval6(){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM equipamentos ORDER BY tag ASC, proximacalibracao ASC, calibrar ASC");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarequipamentos2($inst){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM equipamentos WHERE instrumento = '$inst'");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarequipamentos9($inst,$date2){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM equipamentos WHERE instrumento = '$inst' AND '$date2' >= proximacalibracao");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarobs($equip){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM observacao WHERE id2 = '$equip' ORDER BY id DESC");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarobs2(){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM observacao");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarnome($equip){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT tag FROM equipamentos WHERE id = '$equip'");

		if($listareq->rowCount() > 0):
			return $listareq->fetch(PDO::FETCH_OBJ)->tag;
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listaridvalidade(){
	$pdo = conectar();
	
	$data = date("Y-m-d"); 
	$minhadata = date('Y-m-d', strtotime("+2 month",strtotime($data)));

	try{

		$listareq = $pdo->query("SELECT id FROM equipamentos WHERE '$minhadata' >= proximacalibracao AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1' AND instrumento = 'Controlador de Temperatura' OR '$minhadata' >= proximacalibracao AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1' AND instrumento = 'Balança' OR '$minhadata' >= proximacalibracao AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1' AND instrumento = 'Estufa' OR '$minhadata' >= proximacalibracao AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1' AND instrumento = 'Temporizador'");

		if($listareq->rowCount() > 0):
			return $listareq->fetch(PDO::FETCH_OBJ)->id;
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listaridemtransito(){
	$pdo = conectar();

	try{

		$listareq = $pdo->query("SELECT id FROM equipamentos WHERE agendado = '1' AND foradeuso != '1' AND instrumento = 'Controlador de Temperatura' OR agendado = '1' AND foradeuso != '1' AND instrumento = 'Balança' OR agendado = '1' AND foradeuso != '1' AND instrumento = 'Estufa' OR agendado = '1' AND foradeuso != '1' AND instrumento = 'Temporizador'");

		if($listareq->rowCount() > 0):
			return $listareq->fetch(PDO::FETCH_OBJ)->id;
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}


function listarpesquisa($inst){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM equipamentos WHERE equipamento LIKE '$inst'");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntvalidadeprox(){
	$pdo = conectar();

	$data = date("Y-m-d"); 
	$minhadata = date('Y-m-d', strtotime("+2 month",strtotime($data)));

	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE '$minhadata' >= proximacalibracao  AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1'");

		echo $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntagendado(){
	$pdo = conectar();

	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE agendado = 1");

		echo $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntvalidadeprox2($inst){
	$pdo = conectar();

	$data = date("Y-m-d"); 
	$minhadata = date('Y-m-d', strtotime("+2 month",strtotime($data)));

	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE instrumento = '$inst' AND '$minhadata' >= proximacalibracao AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1'");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntvalidadeprox3(){
	$pdo = conectar();

	$data = date("Y-m-d"); 
	$minhadata = date('Y-m-d', strtotime("+2 month",strtotime($data)));

	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE '$minhadata' >= proximacalibracao AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1' AND instrumento = 'Controlador de Temperatura' OR '$minhadata' >= proximacalibracao AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1' AND instrumento = 'Balança' OR '$minhadata' >= proximacalibracao AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1' AND instrumento = 'Estufa' OR '$minhadata' >= proximacalibracao AND proximacalibracao != '0000-00-00' AND agendado != '1' AND foradeuso != '1' AND instrumento = 'Temporizador'");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntemtransito(){
	$pdo = conectar();


	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE agendado = '1' AND foradeuso != '1' AND instrumento = 'Controlador de Temperatura' OR agendado = '1' AND foradeuso != '1' AND instrumento = 'Balança' OR agendado = '1' AND foradeuso != '1' AND instrumento = 'Estufa' OR agendado = '1' AND foradeuso != '1' AND instrumento = 'Temporizador'");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntagendado2($inst){
	$pdo = conectar();


	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE instrumento = '$inst' AND agendado = 1");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qtforadeuso2($inst){
	$pdo = conectar();


	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE instrumento = '$inst' AND foradeuso = '1'");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntaguardandocert(){
	$pdo = conectar();

	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE certificado = '' OR certificado = '0' AND instrumento != 'Pipeta' AND foradeuso != '1' AND agendado != '1'");

		echo $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntaguardandocert2($inst){
	$pdo = conectar();

	try{

		$qntaguardandocert2 = $pdo->query("SELECT * FROM equipamentos WHERE instrumento = '$inst' AND certificado = '' OR  instrumento = '$inst' AND certificado = '0' AND instrumento != 'Pipeta' AND foradeuso != '1' AND agendado != '1'");

		return $qntaguardandocert2->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntconcluido(){
	$pdo = conectar();

	$minhadata = date("Y-m-d"); 

	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE '$minhadata' < proximacalibracao AND certificado != '' AND certificado != '0'");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntconcluido2($inst){
	$pdo = conectar();

	$minhadata = date("Y-m-d"); 

	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE instrumento = '$inst' AND '$minhadata' < proximacalibracao AND certificado != '' AND certificado != '0' AND foradeuso != '1'");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function proxvencimento($inst){
	$pdo = conectar();

	try{
		$bylogin = $pdo->prepare("SELECT * FROM equipamentos WHERE instrumento = ? AND proximacalibracao != '0000-00-00' AND proximacalibracao != '' ORDER BY proximacalibracao ASC");
		$bylogin->bindValue(1, $inst, PDO::PARAM_STR);
		$bylogin->execute();

		if($bylogin->rowCount() > 0):
			return $bylogin -> fetch(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntequip($inst){
	$pdo = conectar();


	try{

		$listarpedidos = $pdo->query("SELECT id FROM equipamentos WHERE instrumento = '$inst'");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntequipprog($inst){
	$pdo = conectar();


	try{

		$listarpedidos = $pdo->query("SELECT id FROM equipamentos WHERE instrumento = '$inst' AND foradeuso != '1'");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntequip2($data1, $data2){
	$pdo = conectar();


	try{

		$listarpedidos = $pdo->query("SELECT * FROM equipamentos WHERE proximacalibracao >= '$data1' AND proximacalibracao < '$data2'");

		return $listarpedidos->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function addinst($inst){
	$pdo = conectar();

	try{

		$addinst = $pdo->prepare("INSERT INTO instrumentos (instrumento) VALUES (?)");
		$addinst->bindValue(1, $inst, PDO::PARAM_STR);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function addequip($instrumento,$tag,$periodicidade,$faixatrabalhomin,$faixatrabalhomax,$criterio,$localizacao,$marca,$modelo,$serie,$calibrar){
	$pdo = conectar();

	$ultimacalibracao = '0000-00-00';
	$proximacalibracao = '0000-00-00';
	$certificado = '0';
	$agendado = '0';
	$foradeuso = '0';

	try{

		$addinst = $pdo->prepare("INSERT INTO equipamentos (instrumento,tag,periodicidade,faixatrabalhomin,faixatrabalhomax,criterio,localizacao,marca,modelo,serie,ultimacalibracao,proximacalibracao,certificado,calibrar,agendado,foradeuso) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$addinst->bindValue(1, $instrumento, PDO::PARAM_STR);
		$addinst->bindValue(2, $tag, PDO::PARAM_STR);
		$addinst->bindValue(3, $periodicidade, PDO::PARAM_STR);
		$addinst->bindValue(4, $faixatrabalhomin, PDO::PARAM_STR);
		$addinst->bindValue(5, $faixatrabalhomax, PDO::PARAM_STR);
		$addinst->bindValue(6, $criterio, PDO::PARAM_STR);
		$addinst->bindValue(7, $localizacao, PDO::PARAM_STR);
		$addinst->bindValue(8, $marca, PDO::PARAM_STR);
		$addinst->bindValue(9, $modelo, PDO::PARAM_STR);
		$addinst->bindValue(10, $serie, PDO::PARAM_STR);
		$addinst->bindValue(11, $ultimacalibracao, PDO::PARAM_STR);
		$addinst->bindValue(12, $proximacalibracao, PDO::PARAM_STR);
		$addinst->bindValue(13, $certificado, PDO::PARAM_STR);
		$addinst->bindValue(14, $calibrar, PDO::PARAM_STR);
		$addinst->bindValue(15, $agendado, PDO::PARAM_STR);
		$addinst->bindValue(16, $foradeuso, PDO::PARAM_STR);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function addobs($equipamento, $observacao){
	$pdo = conectar();

	try{

		$addobs = $pdo->prepare("INSERT INTO observacao (id2, obs) VALUES (?,?)");
		$addobs->bindValue(1, $equipamento, PDO::PARAM_INT);
		$addobs->bindValue(2, $observacao, PDO::PARAM_STR);
		$addobs->execute();

		if($addobs->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function addobs2($equipamento, $observacao){
	$pdo = conectar();

	try{

		$addobs = $pdo->prepare("INSERT INTO observacao (id2, obs) VALUES (?,?)");
		$addobs->bindValue(1, $equipamento, PDO::PARAM_INT);
		$addobs->bindValue(2, $observacao, PDO::PARAM_STR);
		$addobs->execute();

		if($addobs->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function verificainst($indice){
	$pdo = conectar();

	try{

		$verifica = $pdo->query("SELECT * FROM instrumentos WHERE instrumento = '$indice'");


		if($verifica->rowCount() === 0){
			return TRUE;
		}else{
			return FALSE;
		}

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function verificaequip($indice){
	$pdo = conectar();

	try{

		$verifica = $pdo->query("SELECT * FROM equipamentos WHERE tag = '$indice'");


		if($verifica->rowCount() === 0){
			return TRUE;
		}else{
			return FALSE;
		}

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function infoequipamento($tag){
	$pdo = conectar();

	try{
		$listarins = $pdo->query("SELECT * FROM equipamentos WHERE tag = '$tag'");

		if($listarins->rowCount() > 0):
			return $listarins->fetch(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function infoequipamento2($id){
	$pdo = conectar();

	try{
		$listarins = $pdo->query("SELECT * FROM equipamentos WHERE id = '$id'");

		if($listarins->rowCount() > 0):
			return $listarins->fetch(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function attequip($id,$dados){
	$pdo = conectar();


	try{
		$addinst = $pdo->prepare("UPDATE equipamentos SET localizacao=? WHERE id=?");
		$addinst->bindValue(1, $dados, PDO::PARAM_STR);
		$addinst->bindValue(2, $id, PDO::PARAM_INT);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}


function attequip5($id){
	$pdo = conectar();


	try{
		$addinst = $pdo->prepare("UPDATE equipamentos SET certificado='0', ultimacalibracao='0000-00-00', proximacalibracao='0000-00-00' WHERE id=?");
		$addinst->bindValue(1, $id, PDO::PARAM_INT);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}



function attequipcert($id,$ultimacalibracao,$proximacalibracao,$certificado){
	$pdo = conectar();


	try{
		$addinst = $pdo->prepare("UPDATE equipamentos SET ultimacalibracao=?,proximacalibracao=?,certificado=? WHERE id=?");

		$addinst->bindValue(1, $ultimacalibracao, PDO::PARAM_STR);
		$addinst->bindValue(2, $proximacalibracao, PDO::PARAM_STR);
		$addinst->bindValue(3, $certificado, PDO::PARAM_STR);
		$addinst->bindValue(4, $id, PDO::PARAM_INT);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function agendado($id,$status){
	$pdo = conectar();


	try{
		$addinst = $pdo->prepare("UPDATE equipamentos SET agendado=? WHERE id=?");
		$addinst->bindValue(1, $status, PDO::PARAM_INT);
		$addinst->bindValue(2, $id, PDO::PARAM_INT);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function calibrado($id){
	$pdo = conectar();


	try{
		$addinst = $pdo->prepare("UPDATE equipamentos SET agendado='0' WHERE id=?");
		$addinst->bindValue(1, $id, PDO::PARAM_INT);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function agendado2($status){
	$pdo = conectar();

	$data = date("Y-m-d"); 
	$minhadata = date('Y-m-d', strtotime("+2 month",strtotime($data)));


	try{
		$addinst = $pdo->prepare("UPDATE equipamentos SET agendado=? WHERE '$minhadata' >= proximacalibracao  AND proximacalibracao != '0000-00-00' AND foradeuso != '1' AND instrumento = 'Controlador de Temperatura' AND instrumento = 'Balança' AND instrumento = 'Estufa' AND instrumento = 'Temporizador'");
		$addinst->bindValue(1, $status, PDO::PARAM_INT);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function agendado3($status){
	$pdo = conectar();

	$data = date("Y-m-d"); 
	$minhadata = date('Y-m-d', strtotime("+2 month",strtotime($data)));


	try{
		$addinst = $pdo->prepare("UPDATE equipamentos SET agendado=? WHERE agendado != '1' AND foradeuso != '1' AND instrumento = 'Controlador de Temperatura' AND instrumento = 'Balança' AND instrumento = 'Estufa' AND instrumento = 'Temporizador'");
		$addinst->bindValue(1, $status, PDO::PARAM_INT);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}


function addcert($id,$instrumento,$tag,$certificado,$ultimacalibracao,$periodicidade,$ano){
	$pdo = conectar();

	if($periodicidade === "Semestral"){
		$proximacalibracao = date('Y-m-d', strtotime("+6 month",strtotime($ultimacalibracao)));
	}else if($periodicidade === "18 meses"){
		$proximacalibracao = date('Y-m-d', strtotime("+18 month",strtotime($ultimacalibracao)));
	}else if($periodicidade === "Anual"){
		$proximacalibracao = date('Y-m-d', strtotime("+1 year",strtotime($ultimacalibracao)));
	}else{
		$proximacalibracao = "0000-00-00";
	}
	

	try{

		$addcert = $pdo->prepare("INSERT INTO certificados (id,instrumento,tag,certificado,ano,ultimacalibracao,proximacalibracao) VALUES (?,?,?,?,?,?,?)");
		$addcert->bindValue(1, $id, PDO::PARAM_INT);
		$addcert->bindValue(2, $instrumento, PDO::PARAM_STR);
		$addcert->bindValue(3, $tag, PDO::PARAM_STR);
		$addcert->bindValue(4, $certificado, PDO::PARAM_STR);
		$addcert->bindValue(5, $ano, PDO::PARAM_INT);
		$addcert->bindValue(6, $ultimacalibracao, PDO::PARAM_STR);
		$addcert->bindValue(7, $proximacalibracao, PDO::PARAM_STR);
		$addcert->execute();

		if($addcert->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarcertificados($id){
	$pdo = conectar();

	try{
		$listarins = $pdo->query("SELECT * FROM certificados WHERE id = '$id' ORDER BY ultimacalibracao DESC");

		if($listarins->rowCount() > 0):
			return $listarins->fetch(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function attequip2($id,$ultimacalibracao,$certificado,$periodicidade){
	$pdo = conectar();

	if($periodicidade === "Semestral"){
		$proximacalibracao = date('Y-m-d', strtotime("+6 month",strtotime($ultimacalibracao)));
	}else if($periodicidade === "18 meses"){
		$proximacalibracao = date('Y-m-d', strtotime("+18 month",strtotime($ultimacalibracao)));
	}else if($periodicidade === "Anual"){
		$proximacalibracao = date('Y-m-d', strtotime("+1 year",strtotime($ultimacalibracao)));
	}else{
		$proximacalibracao = "0000-00-00";
	}


	try{

		$addinst = $pdo->prepare("UPDATE equipamentos SET ultimacalibracao=?, proximacalibracao=?, certificado=? WHERE id=?");
		$addinst->bindValue(1, $ultimacalibracao, PDO::PARAM_STR);
		$addinst->bindValue(2, $proximacalibracao, PDO::PARAM_STR);
		$addinst->bindValue(3, $certificado, PDO::PARAM_STR);
		$addinst->bindValue(4, $id, PDO::PARAM_INT);
		$addinst->execute();

		if($addinst->rowCount() > 0){
			return TRUE;
		}else{
			return FALSE;
		}


	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function qntcert($instrumento,$data1,$data2){
	$pdo = conectar();

	try{

		$qntcert = $pdo->query("SELECT * FROM certificados WHERE instrumento = '$instrumento' AND ultimacalibracao >= '$data1' AND ultimacalibracao <= '$data2'");

		return $qntcert->rowCount();

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}

function listarcert(){
	$pdo = conectar();

	try{
		$listareq = $pdo->query("SELECT * FROM certificados");

		if($listareq->rowCount() > 0):
			return $listareq->fetchAll(PDO::FETCH_OBJ);
		else:
			return FALSE;
		endif;

	}catch(PDOException $e){
		echo $e->getMessage();
	}
}