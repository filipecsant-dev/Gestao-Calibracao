<?php	

	require '../funcoes/banco/conexao.php';
	require '../funcoes/crud/crud.php';

  $order = $_GET['o'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- SOLUÇÃO 1 CARACTERES -->
  <title>Lista Equip. Calibração - Norpack</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="Gestão de calibração - Norpack By: Filipe Castro">
  <meta name="author" content="Filipe Castro | filipecsant@gmail.com">
  <meta name="generator" content="Gestão de calibração - Norpack By: Filipe Castro">
  <link rel="apple-touch-icon" href="../img/icone2.nestweb.png" sizes="180x180">
  <link rel="icon" href="../img/icone.nestweb.png" sizes="32x32" type="image/png">
  <link rel="icon" href="../img/icone3.nestweb.png" sizes="16x16" type="image/png">
</head>
             <body>

	<style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:12pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:10pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:10pt; background-color:white }
      td.style1 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style1 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style2 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style2 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style3 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style3 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style4 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style4 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style5 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      th.style5 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      td.style6 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      th.style6 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      td.style7 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style7 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style8 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style8 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style9 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style9 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style10 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style10 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style11 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style11 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style12 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style12 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style13 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style13 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style14 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style14 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style15 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      th.style15 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      td.style16 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style16 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style17 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style17 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style18 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      th.style18 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      td.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      th.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style21 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      th.style21 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      td.style22 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      th.style22 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#FFFFFF }
      td.style23 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style23 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style24 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style24 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style25 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style25 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style26 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style26 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style27 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style27 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style28 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style28 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style29 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style29 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style30 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style30 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style31 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style31 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style32 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style32 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style34 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style34 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style35 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style35 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style36 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style36 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style38 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style38 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style39 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style39 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style40 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style41 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style41 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style42 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style42 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style43 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style43 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style44 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style46 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style46 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style47 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style47 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style48 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style48 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style49 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style49 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style50 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style50 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style51 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style51 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style52 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style52 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style53 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#C0C0C0 }
      th.style53 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#C0C0C0 }
      td.style54 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#C0C0C0 }
      th.style54 { vertical-align:bottom; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#C0C0C0 }
      td.style55 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style55 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:2px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style56 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style56 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style57 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      th.style57 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:"Arial"; font-size:8pt; background-color:#969696 }
      td.style58 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style58 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      td.style59 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      th.style59 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:"Arial"; font-size:8pt; background-color:white }
      table.sheet0 col.col0 { width:58.28888822pt }
      table.sheet0 col.col1 { width:35.92222181pt }
      table.sheet0 col.col2 { width:27.1111108pt }
      table.sheet0 col.col3 { width:39.31111066pt }
      table.sheet0 col.col4 { width:37.27777735pt }
      table.sheet0 col.col5 { width:38.63333289pt }
      table.sheet0 col.col6 { width:157.24444264pt }
      table.sheet0 col.col7 { width:54.2222216pt }
      table.sheet0 col.col8 { width:49.47777721pt }
      table.sheet0 col.col9 { width:58.96666599pt }
      table.sheet0 col.col10 { width:52.18888829pt }
      table.sheet0 col.col11 { width:55.57777714pt }
      table.sheet0 tr { height:11.25pt }
      table.sheet0 tr.row0 { height:25.5pt }
      table.sheet0 tr.row1 { height:23.25pt }
      table.sheet0 tr.row2 { height:16.5pt }
    </style>



	<table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines" width="99%">

          <tr class="row0">
            <td class="column0 style47 s style48" rowspan="2">Instrumento</td>
            <td class="column1 style47 s style48" rowspan="2">Tag nº</td>
            <td class="column2 style51 s style52" rowspan="2">Period. Calibração</td>
            <td class="column3 style49 s style50" colspan="2">Faixa de Trab.</td>
            <td class="column5 style53 s style54" rowspan="2">Critério  de Aceitação</td>
            <td class="column6 style47 s style55" rowspan="2">Localização</td>
            <td class="column7 style44 s style46" colspan="3">Validade Calibração</td>
            <td class="column10 style49 s style50" colspan="3">Equipamento</td>
            <?php if($order === '3' || $order === '4' || $order === '5'){ ?>
            <td class="column11 style20 s" rowspan="2">Calibrador por:</td>
            <?php } ?>
          </tr>
          <tr class="row1">
            <td class="column3 style20 s">Mín.</td>
            <td class="column4 style20 s">Máx.</td>
            <td class="column7 style33 s">Última Calibração</td>
            <td class="column8 style23 s">N° Certificado</td>
            <td class="column9 style40 s">Próxima Calibração</td>
            <td class="column10 style20 s">Marca</td>
            <td class="column11 style20 s">Modelo</td> 
            <td class="column11 style20 s">Série</td>    
          </tr>
          
        
<?php

  if($order === '1' || $order === '2'){

  	if(listaequipcal($order)){
  		$listaequipcal = listaequipcal($order);
  		foreach ($listaequipcal as $l) {

      if($l->foradeuso === '1'){continue;}

  		$ultimacalibracao = date('d/m/Y', strtotime($l->ultimacalibracao));
  		$proximacalibracao = date('d/m/Y', strtotime($l->proximacalibracao));
  		if($l->certificado === '0' || $l->certificado === '' || $l->certificado === NULL){$certificado = '';}else{$certificado = $l->certificado.'/'.date('y', strtotime($l->ultimacalibracao));}


  ?>

  		<tr class="row2">
              <td class="column0 style10 s" style="text-align:center;"><?php echo $l->instrumento ?></td>
              <td class="column1 style11 s"><?php echo $l->tag ?></td>
              <td class="column2 style12 s" style="text-align:center;"><?php echo $l->periodicidade ?></td>
              <td class="column3 style11 s"><?php echo $l->faixatrabalhomin ?></td>
              <td class="column4 style11 s"><?php echo $l->faixatrabalhomax ?></td>
              <td class="column5 style16 s"><?php echo $l->criterio ?></td>
              <td class="column6 style16 s"><?php echo $l->localizacao ?></td>
              <td class="column7 style37 n"><?php echo $ultimacalibracao ?></td>
              <td class="column8 style16 null"><?php echo $certificado ?></td>
              <td class="column9 style37 n"><?php echo $proximacalibracao ?></td>
              <td class="column10 style16 s"><?php echo $l->marca ?></td>
              <td class="column11 style16 s"><?php echo $l->modelo ?></td>
              <td class="column11 style16 s"><?php if($l->serie === '' || $l->serie === NULL){echo '-';}else{ echo $l->serie; } ?></td>
            </tr>
  	
  <?php
  		
  	
  		}
  	}
  }
  if($order === '3'){
    $data2 = date("Y-m-d");
    $minhadata2 = date('Y-m-d', strtotime("+2 month",strtotime($data2)));
    
    if(listarequipamentosval6()){
      $listarequipamentosval = listarequipamentosval6();
      foreach ($listarequipamentosval as $l) {


      if($l->proximacalibracao === '0000-00-00'){continue;}
      if($l->foradeuso === '1' && $l->proximacalibracao === '0000-00-00'){continue;}

      if($minhadata2 >= $l->proximacalibracao && $l->proximacalibracao != NULL && $l->agendado != '1'){

      $ultimacalibracao = date('d/m/Y', strtotime($l->ultimacalibracao));
      $proximacalibracao = date('d/m/Y', strtotime($l->proximacalibracao));
      if($l->certificado === '0' || $l->certificado === '' || $l->certificado === NULL){$certificado = '';}else{$certificado = $l->certificado.'/'.date('y', strtotime($l->ultimacalibracao));}


  ?>

      <tr class="row2">
              <td class="column0 style10 s" style="text-align:center;"><?php echo $l->instrumento ?></td>
              <td class="column1 style11 s"><?php echo $l->tag ?></td>
              <td class="column2 style12 s" style="text-align:center;"><?php echo $l->periodicidade ?></td>
              <td class="column3 style11 s"><?php echo $l->faixatrabalhomin ?></td>
              <td class="column4 style11 s"><?php echo $l->faixatrabalhomax ?></td>
              <td class="column5 style16 s"><?php echo $l->criterio ?></td>
              <td class="column6 style16 s"><?php echo $l->localizacao ?></td>
              <td class="column7 style37 n"><?php echo $ultimacalibracao ?></td>
              <td class="column8 style16 null"><?php echo $certificado ?></td>
              <td class="column9 style37 n"><?php echo $proximacalibracao ?></td>
              <td class="column10 style16 s"><?php echo $l->marca ?></td>
              <td class="column11 style16 s"><?php echo $l->modelo ?></td>
              <td class="column11 style16 s"><?php if($l->serie === '' || $l->serie === NULL){echo '-';}else{ echo $l->serie; } ?></td>
              <td class="column11 style16 s"><?php echo $l->calibrar ?></td>
            </tr>
    
  <?php
        }
      }
    }
  }

  if($order === '4'){
    $data2 = date("Y-m-d");
    $minhadata2 = date('Y-m-d', strtotime("+2 month",strtotime($data2)));
    
    if(listarequipamentosval5()){
      $listarequipamentosval = listarequipamentosval5();
      foreach ($listarequipamentosval as $l) {


      if($l->proximacalibracao === '0000-00-00'){continue;}
      if($l->foradeuso === '1' && $l->proximacalibracao === '0000-00-00'){continue;}

      if($minhadata2 >= $l->proximacalibracao && $l->proximacalibracao != NULL && $l->agendado != '1'){

      $ultimacalibracao = date('d/m/Y', strtotime($l->ultimacalibracao));
      $proximacalibracao = date('d/m/Y', strtotime($l->proximacalibracao));
      if($l->certificado === '0' || $l->certificado === '' || $l->certificado === NULL){$certificado = '';}else{$certificado = $l->certificado.'/'.date('y', strtotime($l->ultimacalibracao));}


  ?>

      <tr class="row2">
              <td class="column0 style10 s" style="text-align:center;"><?php echo $l->instrumento ?></td>
              <td class="column1 style11 s"><?php echo $l->tag ?></td>
              <td class="column2 style12 s" style="text-align:center;"><?php echo $l->periodicidade ?></td>
              <td class="column3 style11 s"><?php echo $l->faixatrabalhomin ?></td>
              <td class="column4 style11 s"><?php echo $l->faixatrabalhomax ?></td>
              <td class="column5 style16 s"><?php echo $l->criterio ?></td>
              <td class="column6 style16 s"><?php echo $l->localizacao ?></td>
              <td class="column7 style37 n"><?php echo $ultimacalibracao ?></td>
              <td class="column8 style16 null"><?php echo $certificado ?></td>
              <td class="column9 style37 n"><?php echo $proximacalibracao ?></td>
              <td class="column10 style16 s"><?php echo $l->marca ?></td>
              <td class="column11 style16 s"><?php echo $l->modelo ?></td>
              <td class="column11 style16 s"><?php if($l->serie === '' || $l->serie === NULL){echo '-';}else{ echo $l->serie; } ?></td>
              <td class="column11 style16 s"><?php echo $l->calibrar ?></td>
            </tr>
    
  <?php
        }
      }
    }
  }

  if($order === '5'){
    $data2 = date("Y-m-d");
    $minhadata2 = date('Y-m-d', strtotime("+2 month",strtotime($data2)));
    
    if(listarequipamentosval6()){
      $listarequipamentosval = listarequipamentosval6();
      foreach ($listarequipamentosval as $l) {

      if($l->instrumento === 'Controlador de Temperatura' || $l->instrumento === 'Balança' || $l->instrumento === 'Estufa' || $l->instrumento === 'Coef. de Fricção' || $l->instrumento === 'Temporizador'){continue;}
      if($l->proximacalibracao === '0000-00-00'){continue;}
      if($l->foradeuso === '1' && $l->proximacalibracao === '0000-00-00'){continue;}

      if($minhadata2 >= $l->proximacalibracao && $l->proximacalibracao != NULL && $l->agendado != '1'){

      $ultimacalibracao = date('d/m/Y', strtotime($l->ultimacalibracao));
      $proximacalibracao = date('d/m/Y', strtotime($l->proximacalibracao));
      if($l->certificado === '0' || $l->certificado === '' || $l->certificado === NULL){$certificado = '';}else{$certificado = $l->certificado.'/'.date('y', strtotime($l->ultimacalibracao));}


  ?>

      <tr class="row2">
              <td class="column0 style10 s" style="text-align:center;"><?php echo $l->instrumento ?></td>
              <td class="column1 style11 s"><?php echo $l->tag ?></td>
              <td class="column2 style12 s" style="text-align:center;"><?php echo $l->periodicidade ?></td>
              <td class="column3 style11 s"><?php echo $l->faixatrabalhomin ?></td>
              <td class="column4 style11 s"><?php echo $l->faixatrabalhomax ?></td>
              <td class="column5 style16 s"><?php echo $l->criterio ?></td>
              <td class="column6 style16 s"><?php echo $l->localizacao ?></td>
              <td class="column7 style37 n"><?php echo $ultimacalibracao ?></td>
              <td class="column8 style16 null"><?php echo $certificado ?></td>
              <td class="column9 style37 n"><?php echo $proximacalibracao ?></td>
              <td class="column10 style16 s"><?php echo $l->marca ?></td>
              <td class="column11 style16 s"><?php echo $l->modelo ?></td>
              <td class="column11 style16 s"><?php if($l->serie === '' || $l->serie === NULL){echo '-';}else{ echo $l->serie; } ?></td>
              <td class="column11 style16 s"><?php echo $l->calibrar ?></td>
            </tr>
    
  <?php
        }
      }
    }
  }

?>
	
	


		</tbody>
    </table>
</body>
</html>