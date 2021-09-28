<?php	

	require '../funcoes/banco/conexao.php';
	require '../funcoes/crud/crud.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- SOLUÇÃO 1 CARACTERES -->
  <title>Equipamentos fora de uso - Norpack</title>
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
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
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
      td.style0 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style0 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style1 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style1 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style2 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style3 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style3 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style4 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style4 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style5 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style5 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style7 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style7 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style8 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      th.style8 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      td.style9 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:16pt; background-color:white }
      th.style9 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:16pt; background-color:white }
      td.style10 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:16pt; background-color:white }
      th.style10 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:16pt; background-color:white }
      td.style11 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:16pt; background-color:white }
      th.style11 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:16pt; background-color:white }
      td.style12 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      th.style12 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      td.style13 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      th.style13 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:11pt; background-color:white }
      td.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style15 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style15 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px dashed #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px dashed #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style18 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:2px solid #000000 !important; border-right:1px dashed #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style18 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:2px solid #000000 !important; border-right:1px dashed #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px dashed #000000 !important; border-left:2px solid #000000 !important; border-right:1px dashed #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px dashed #000000 !important; border-left:2px solid #000000 !important; border-right:1px dashed #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style22 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white; text-align: center; }
      th.style22 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style23 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style23 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style24 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style24 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style25 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style25 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style27 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:1px dashed #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style27 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:1px dashed #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style28 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style28 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style30 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style30 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style34 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style34 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style35 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style35 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style36 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style36 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style37 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style37 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style38 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style40 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style42 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      th.style42 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      td.style43 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      th.style43 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      td.style44 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      th.style44 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style46 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style46 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style47 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      th.style47 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:20pt; background-color:white }
      td.style48 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style48 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style49 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style49 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style50 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style50 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style51 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style51 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style52 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style52 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style53 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style53 { vertical-align:middle; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style54 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style54 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style56 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style56 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style57 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style57 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style58 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      th.style58 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      td.style59 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      th.style59 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      td.style60 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      th.style60 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      td.style61 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      th.style61 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      td.style62 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:1px dashed #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style62 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:1px dashed #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style63 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style63 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:1px dashed #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style64 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      th.style64 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      td.style65 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      th.style65 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      td.style66 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      th.style66 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      td.style67 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style67 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style68 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      th.style68 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      td.style69 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      th.style69 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#C0C0C0 }
      td.style70 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      th.style70 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      td.style71 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      th.style71 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      td.style72 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      th.style72 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      td.style73 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      th.style73 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#969696 }
      td.style74 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style74 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style75 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px dashed #000000 !important; border-left:1px dashed #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style75 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px dashed #000000 !important; border-left:1px dashed #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style76 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px dashed #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style76 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px dashed #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style77 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:2px solid #000000 !important; border-left:1px dashed #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style77 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:2px solid #000000 !important; border-left:1px dashed #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style78 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style78 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px dashed #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      table.sheet0 col.col0 { width:61.67777707pt }
      table.sheet0 col.col1 { width:35.92222181pt }
      table.sheet0 col.col2 { width:27.1111108pt }
      table.sheet0 col.col3 { width:39.31111066pt }
      table.sheet0 col.col4 { width:37.27777735pt }
      table.sheet0 col.col5 { width:38.63333289pt }
      table.sheet0 col.col6 { width:12.19999986pt }
      table.sheet0 col.col7 { width:12.19999986pt }
      table.sheet0 col.col8 { width:10.16666655pt }
      table.sheet0 col.col9 { width:10.16666655pt }
      table.sheet0 col.col10 { width:10.16666655pt }
      table.sheet0 col.col11 { width:10.84444432pt }
      table.sheet0 col.col12 { width:10.16666655pt }
      table.sheet0 col.col13 { width:10.16666655pt }
      table.sheet0 col.col14 { width:10.16666655pt }
      table.sheet0 col.col15 { width:10.16666655pt }
      table.sheet0 col.col16 { width:10.16666655pt }
      table.sheet0 col.col17 { width:10.16666655pt }
      table.sheet0 col.col18 { width:10.16666655pt }
      table.sheet0 col.col19 { width:10.16666655pt }
      table.sheet0 col.col20 { width:10.16666655pt }
      table.sheet0 col.col21 { width:10.16666655pt }
      table.sheet0 col.col22 { width:12.19999986pt }
      table.sheet0 col.col23 { width:12.19999986pt }
      table.sheet0 col.col24 { width:12.19999986pt }
      table.sheet0 col.col25 { width:12.19999986pt }
      table.sheet0 col.col26 { width:12.87777763pt }
      table.sheet0 col.col27 { width:12.19999986pt }
      table.sheet0 col.col28 { width:10.16666655pt }
      table.sheet0 col.col29 { width:10.16666655pt }
      table.sheet0 col.col30 { width:9.48888878pt }
      table.sheet0 col.col31 { width:9.48888878pt }
      table.sheet0 col.col32 { width:9.48888878pt }
      table.sheet0 col.col33 { width:12.87777763pt }
      table.sheet0 col.col34 { width:12.19999986pt }
      table.sheet0 col.col35 { width:10.84444432pt }
      table.sheet0 col.col36 { width:10.84444432pt }
      table.sheet0 col.col37 { width:10.84444432pt }
      table.sheet0 col.col38 { width:10.84444432pt }
      table.sheet0 col.col39 { width:12.19999986pt }
      table.sheet0 col.col40 { width:13.5555554pt }
      table.sheet0 col.col41 { width:12.19999986pt }
      table.sheet0 col.col42 { width:10.16666655pt }
      table.sheet0 col.col43 { width:10.16666655pt }
      table.sheet0 col.col44 { width:10.16666655pt }
      table.sheet0 col.col45 { width:10.84444432pt }
      table.sheet0 col.col46 { width:9.48888878pt }
      table.sheet0 col.col47 { width:10.16666655pt }
      table.sheet0 col.col48 { width:10.16666655pt }
      table.sheet0 col.col49 { width:10.16666655pt }
      table.sheet0 col.col50 { width:10.16666655pt }
      table.sheet0 col.col51 { width:10.16666655pt }
      table.sheet0 col.col52 { width:10.16666655pt }
      table.sheet0 col.col53 { width:11.52222209pt }
      table.sheet0 col.col54 { width:10.16666655pt }
      table.sheet0 tr { height:12.75pt }
      table.sheet0 tr.row0 { height:24.95pt }
      table.sheet0 tr.row1 { height:24.95pt }
      table.sheet0 tr.row2 { height:17.25pt }
      table.sheet0 tr.row3 { height:25.5pt }
      table.sheet0 tr.row4 { height:25.5pt }
      table.sheet0 tr.row5 { height:26.25pt }
      table.sheet0 tr.row6 { height:26.25pt }
      table.sheet0 tr.row7 { height:26.25pt }
      table.sheet0 tr.row8 { height:26.25pt }
      table.sheet0 tr.row9 { height:26.25pt }
      table.sheet0 tr.row10 { height:26.25pt }
      table.sheet0 tr.row11 { height:26.25pt }
      table.sheet0 tr.row12 { height:26.25pt }
      table.sheet0 tr.row13 { height:26.25pt }
      table.sheet0 tr.row14 { height:27pt }

    </style>
  </head>

  <body>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines" width="99%">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <col class="col13">
        <col class="col14">
        <col class="col15">
        <col class="col16">
        <col class="col17">
        <col class="col18">
        <col class="col19">
        <col class="col20">
        <col class="col21">
        <col class="col22">
        <col class="col23">
        <col class="col24">
        <col class="col25">
        <col class="col26">
        <col class="col27">
        <col class="col28">
        <col class="col29">
        <col class="col30">
        <col class="col31">
        <col class="col32">
        <col class="col33">
        <col class="col34">
        <col class="col35">
        <col class="col36">
        <col class="col37">
        <col class="col38">
        <col class="col39">
        <col class="col40">
        <col class="col41">
        <col class="col42">
        <col class="col43">
        <col class="col44">
        <col class="col45">
        <col class="col46">
        <col class="col47">
        <col class="col48">
        <col class="col49">
        <col class="col50">
        <col class="col51">
        <col class="col52">
        <col class="col53">
        <col class="col54">
        <col class="col54">
        <col class="col54">


        <thead >
        <tr class="row0">
            <td class="column0 style58 s style59" rowspan="3">Instrumento</td>
            <td class="column1 style70 s style71" rowspan="3">Tag nº</td>
            <td class="column2 style60 s style61" rowspan="3">Period. Calibração</td>
            <td class="column3 style72 s style73" colspan="2">Faixa de Trab.</td>
            <td class="column5 style68 s style69" rowspan="3" style="vertical-align: middle;">Critério  de Aceitação</td>
            <td class="column6 style74 s style57" colspan="20">Extrusora</td>
            <td class="column26 style56 s style56" colspan="7" style="vertical-align: middle;">Impressora</td>
            <td class="column33 style56 s style56" colspan="6" style="vertical-align: middle;">Rebobinadeira</td>
            <td class="column39 style56 s style56" colspan="7" style="vertical-align: middle;">Corte/Solda</td>
            <td class="column46 style20 s" rowspan="3" style="vertical-align: middle;">Imp</td>
            <td class="column47 style20 s" colspan="2" style="vertical-align: middle;">Rec</td>
            <td class="column48 style20 s" rowspan="3" style="vertical-align: middle;">Lab</td>
            <td class="column49 style20 s" rowspan="3" style="vertical-align: middle;">Téc</td>
            <td class="column50 style20 s" rowspan="3" style="vertical-align: middle;">Mis</td>
            <td class="column51 style25 s" rowspan="3" style="vertical-align: middle;">Elet</td>
            <td class="column52 style38 s" rowspan="3" style="vertical-align: middle;">Res</td>
            <td class="column53 style20 s" rowspan="3" style="vertical-align: middle;">Tinta</td>
            <td class="column54 style20 s" rowspan="3" style="vertical-align: middle;">Mec</td>
            <td class="column54 style20 s" rowspan="3" style="vertical-align: middle;">CQ</td>
          </tr>
          <tr class="row1">
            <td class="column3 style58 s style59" rowspan="2">Mín.</td>
            <td class="column4 style58 s style59" rowspan="2">Máx.</td>
            <td class="column6 style32 n" rowspan="2">1</td>
            <td class="column7 style14 n" rowspan="2">2</td>
            <td class="column8 style57 n style57" colspan="3">3</td>
            <td class="column11 style57 n style57" colspan="3">4</td>
            <td class="column14 style57 n style57" colspan="3">5</td>
            <td class="column17 style57 n style57" colspan="3">6</td>
            <td class="column20 style14 n" rowspan="2">7</td>
            <td class="column21 style14 n" rowspan="2">8</td>
            <td class="column22 style57 n style57" colspan="3">9</td>
            <td class="column25 style14 n" rowspan="2">10</td>
            <td class="column26 style21 n" rowspan="2">3</td>
            <td class="column27 style21 n" rowspan="2">4</td>
            <td class="column28 style20 s" rowspan="2" style="vertical-align: middle;">FP4</td>
            <td class="column29 style20 s" rowspan="2" style="vertical-align: middle;">FT1</td>
            <td class="column30 style20 s" rowspan="2" style="vertical-align: middle;" style="vertical-align: middle;">FO-1</td>
            <td class="column31 style20 s" rowspan="2" style="vertical-align: middle;">FO-2</td>
            <td class="column32 style20 s" rowspan="2" style="vertical-align: middle;">FO-3</td>
            <td class="column33 style21 n" rowspan="2">1</td>
            <td class="column34 style21 n" rowspan="2">2</td>
            <td class="column35 style21 n" rowspan="2">3</td>
            <td class="column36 style21 n" rowspan="2">4</td>
            <td class="column37 style21 n" rowspan="2">5</td>
            <td class="column38 style21 n" rowspan="2">6</td>
            <td class="column39 style14 n" rowspan="2">1</td>
            <td class="column40 style14 n" rowspan="2">2</td>
            <td class="column41 style14 n" rowspan="2">3</td>
            <td class="column42 style14 n" rowspan="2">4</td>
            <td class="column43 style14 n" rowspan="2">6</td>
            <td class="column44 style14 n" rowspan="2">7</td>
            <td class="column45 style14 n" rowspan="2">8</td>
            <td class="column45 style14 n" rowspan="2">1</td>
            <td class="column45 style14 n" rowspan="2">2</td>
          </tr>
          <tr class="row2">
            <td class="column8 style34 s">A</td>
            <td class="column9 style34 s">B</td>
            <td class="column10 style34 s">C</td>
            <td class="column11 style34 s">A</td>
            <td class="column12 style34 s">B</td>
            <td class="column13 style34 s">C</td>
            <td class="column14 style34 s">A</td>
            <td class="column15 style34 s">B</td>
            <td class="column16 style34 s">C</td>
            <td class="column17 style34 s">A</td>
            <td class="column18 style34 s">B</td>
            <td class="column19 style34 s">C</td>
            <td class="column22 style34 s">A</td>
            <td class="column23 style34 s">B</td>
            <td class="column24 style34 s">C</td>
          </tr>
       </thead>   

        <tbody>
          
<?php 

  if(listarequipamentoscontrole()){
    $listarequipamentos = listarequipamentoscontrole();
    foreach ($listarequipamentos as $l) {
      

      if($l->foradeuso === '1'){
        if($l->localizacao === '' || $l->localizacao === '-'){continue;}
        if($l->instrumento === 'Viscosímetro'){$l->instrumento = 'Copo Viscosímetro';}

?>
          <tr class="row3" style="height: 40px;">
            <td class="column0 style22 s"><?php echo $l->instrumento; ?></td>
            <td class="column1 style23 s"><?php echo $l->tag; ?></td>
            <td class="column2 style24 s"><?php echo $l->periodicidade; ?></td>
            <td class="column3 style23 s"><?php echo $l->faixatrabalhomin; ?></td>
            <td class="column4 style23 s"><?php echo $l->faixatrabalhomax; ?></td>
            <td class="column5 style23 s"><?php echo $l->criterio; ?></td>


          <?php if($l->localizacao != 'Extrusão'){ ?>

            <td class="column6 style29 null"><?php if(strpos($l->localizacao,'Extrusora 1 ') !== false){ echo 'x';} ?></td>
            <td class="column7 style29 null"><?php if(strpos($l->localizacao,'Extrusora 2') !== false){ echo 'x';} ?></td>
            <td class="column8 style29 s"><?php if(strpos($l->localizacao,'Extrusora 3 / Porta A') !== false){ echo 'x';} ?></td>
            <td class="column9 style30 null"><?php if(strpos($l->localizacao,'Extrusora 3 / Porta B') !== false){ echo 'x';} ?></td>
            <td class="column10 style30 null"><?php if(strpos($l->localizacao,'Extrusora 3 / Porta C') !== false){ echo 'x';} ?></td>
            <td class="column11 style30 null"><?php if(strpos($l->localizacao,'Extrusora 4 / Porta A') !== false){ echo 'x';} ?></td>
            <td class="column12 style30 null"><?php if(strpos($l->localizacao,'Extrusora 4 / Porta B') !== false){ echo 'x';} ?></td>
            <td class="column13 style30 null"><?php if(strpos($l->localizacao,'Extrusora 4 / Porta C') !== false){ echo 'x';} ?></td>
            <td class="column14 style30 null"><?php if(strpos($l->localizacao,'Extrusora 5 / Porta A') !== false){ echo 'x';} ?></td>
            <td class="column15 style30 null"><?php if(strpos($l->localizacao,'Extrusora 5 / Porta B') !== false){ echo 'x';} ?></td>
            <td class="column16 style29 null"><?php if(strpos($l->localizacao,'Extrusora 5 / Porta C') !== false){ echo 'x';} ?></td>
            <td class="column17 style29 null"><?php if(strpos($l->localizacao,'Extrusora 6 / Porta A') !== false){ echo 'x';} ?></td>
            <td class="column18 style29 null"><?php if(strpos($l->localizacao,'Extrusora 6 / Porta B') !== false){ echo 'x';} ?></td>
            <td class="column19 style29 null"><?php if(strpos($l->localizacao,'Extrusora 6 / Porta C') !== false){ echo 'x';} ?></td>
            <td class="column20 style29 null"><?php if(strpos($l->localizacao,'Extrusora 7') !== false){ echo 'x';} ?></td>
            <td class="column21 style29 null"><?php if(strpos($l->localizacao,'Extrusora 8') !== false){ echo 'x';} ?></td>
            <td class="column22 style29 null"><?php if(strpos($l->localizacao,'Extrusora 9 / Porta A') !== false){ echo 'x';} ?></td>
            <td class="column23 style29 null"><?php if(strpos($l->localizacao,'Extrusora 9 / Porta B') !== false){ echo 'x';} ?></td>
            <td class="column24 style29 null"><?php if(strpos($l->localizacao,'Extrusora 9 / Porta C') !== false){ echo 'x';} ?></td>
            <td class="column25 style29 null"><?php if(strpos($l->localizacao,'Extrusora 10') !== false){ echo 'x';} ?></td>
          <?php } 
          if($l->localizacao === 'Extrusão'){
          ?>
          <td class="column25 style29 null" colspan="20">X</td>

          <?php
          }



          if($l->localizacao != 'Impressão em Linha'){
          ?>

            <td class="column26 style29 null"><?php if(strpos($l->localizacao,'BBI-3') !== false){ echo 'x';} ?></td>
            <td class="column27 style29 null"><?php if(strpos($l->localizacao,'BBI-4') !== false){ echo 'x';} ?></td>
            <td class="column28 style29 null"><?php if(strpos($l->localizacao,'FP4') !== false){ echo 'x';} ?></td>
          
          <?php } 
          if($l->localizacao === 'Impressão em Linha'){
          ?>
          <td class="column25 style29 null" colspan="3">X</td>

          <?php
          }
           ?>



            <td class="column29 style29 null"><?php if(strpos($l->localizacao,'Flexo Tech') !== false){ echo 'x';} ?></td>
            <td class="column30 style29 null"><?php if(strpos($l->localizacao,'F1') !== false){ echo 'x';} ?></td>
            <td class="column31 style29 null"><?php if(strpos($l->localizacao,'F2') !== false){ echo 'x';} ?></td>
            <td class="column32 style29 null"><?php if(strpos($l->localizacao,'F3') !== false){ echo 'x';} ?></td>



            <?php
            if($l->localizacao != 'Rebobinadeira'){
            ?>
            <td class="column33 style29 null"><?php if(strpos($l->localizacao,'Rebobinadeira 1') !== false){ echo 'x';} ?></td>
            <td class="column34 style29 null"><?php if(strpos($l->localizacao,'Rebobinadeira 2') !== false){ echo 'x';} ?></td>
            <td class="column35 style29 null"><?php if(strpos($l->localizacao,'Rebobinadeira 3') !== false){ echo 'x';} ?></td>
            <td class="column36 style29 null"><?php if(strpos($l->localizacao,'Rebobinadeira 4') !== false){ echo 'x';} ?></td>
            <td class="column37 style29 null"><?php if(strpos($l->localizacao,'Rebobinadeira 5') !== false){ echo 'x';} ?></td>
            <td class="column38 style29 null"><?php if(strpos($l->localizacao,'Rebobinadeira 6') !== false){ echo 'x';} ?></td>

            <?php } 
            if($l->localizacao === 'Rebobinadeira'){
            ?>
            <td class="column25 style29 null" colspan="6">X</td>

            <?php
            }



            if($l->localizacao != 'Corte/Solda'){ ?>

            <td class="column39 style29 null"><?php if(strpos($l->localizacao,'Corte/Solda 1') !== false){ echo 'x';} ?></td>
            <td class="column40 style29 null"><?php if(strpos($l->localizacao,'Corte/Solda 2') !== false){ echo 'x';} ?></td>
            <td class="column41 style29 null"><?php if(strpos($l->localizacao,'Corte/Solda 3') !== false){ echo 'x';} ?></td>
            <td class="column42 style29 null"><?php if(strpos($l->localizacao,'Corte/Solda 4') !== false){ echo 'x';} ?></td>
            <td class="column43 style29 null"><?php if(strpos($l->localizacao,'Corte/Solda 6') !== false){ echo 'x';} ?></td>
            <td class="column44 style29 null"><?php if(strpos($l->localizacao,'Corte/Solda 7') !== false){ echo 'x';} ?></td>
            <td class="column45 style29 null"><?php if(strpos($l->localizacao,'Corte/Solda 8') !== false){ echo 'x';} ?></td>

          <?php } 
          if($l->localizacao === 'Corte/Solda'){
          ?>
          <td class="column25 style29 null" colspan="7">X</td>
          <?php
          }
          ?>


            <td class="column46 style41 null"><?php if($l->localizacao === 'Impressão'){ echo 'x';} ?></td>
            <td class="column47 style41 null"><?php if(strpos($l->localizacao,'Recuperadora 1') !== false){ echo 'x';} ?></td>
            <td class="column47 style41 null"><?php if(strpos($l->localizacao,'Recuperadora 2') !== false){ echo 'x';} ?></td>
            <td class="column48 style41 null"><?php if(strpos($l->localizacao,'Laboratório') !== false){ echo 'x';} ?></td>
            <td class="column49 style41 null"><?php if(strpos($l->localizacao,'Técnica') !== false){ echo 'x';} ?></td>
            <td class="column50 style41 null"><?php if(strpos($l->localizacao,'Misturador') !== false){ echo 'x';} ?></td>
            <td class="column51 style41 null"><?php if(strpos($l->localizacao,'Elétrica') !== false){ echo 'x';} ?></td>
            <td class="column52 style41 null"><?php if(strpos($l->localizacao,'Reserva') !== false){ echo 'x';} ?></td>
            <td class="column53 style41 null"><?php if(strpos($l->localizacao,'Tintas') !== false){ echo ' x';} ?></td>
            <td class="column54 style20 null"><?php if(strpos($l->localizacao,'Mecânica') !== false){ echo 'x';} ?></td>
            <td class="column54 style20 null"><?php if($l->localizacao === 'Coordenação Qualidade'){ echo 'x';} ?></td>
          </tr>
<?php
        }
      }
    }
?>

  </tbody>
</table>

  <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines" width="99%">
     <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <col class="col13">
        <col class="col14">
        <col class="col15">
        <col class="col16">
        <col class="col17">
        <col class="col18">
        <col class="col19">
        <col class="col20">
        <col class="col21">
        <col class="col22">
        <col class="col23">
        <col class="col24">
        <col class="col25">
        <col class="col26">
        <col class="col27">
        <col class="col28">
        <col class="col29">
        <col class="col30">
        <col class="col31">
        <col class="col32">
        <col class="col33">
        <col class="col34">
        <col class="col35">
        <col class="col36">
        <col class="col37">
        <col class="col38">
        <col class="col39">
        <col class="col40">
        <col class="col41">
        <col class="col42">
        <col class="col43">
        <col class="col44">
        <col class="col45">
        <col class="col46">
        <col class="col47">
        <col class="col48">
        <col class="col49">
        <col class="col50">
        <col class="col51">
        <col class="col52">
        <col class="col53">
        <col class="col54">
        <col class="col54">
    <tbody>       

      <br>

          <tr class="row6">
            <td class="column0 style64 s style66" colspan="3">Legenda</td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style4 null"></td>
            <td class="column6 style4 null"></td>
            <td class="column7 style4 null"></td>
            <td class="column8 style4 null"></td>
            <td class="column9 style4 null"></td>
            <td class="column10 style4 null"></td>
            <td class="column11 style4 null"></td>
            <td class="column12 style4 null"></td>
            <td class="column13 style4 null"></td>
            <td class="column14 style4 null"></td>
            <td class="column15 style4 null"></td>
            <td class="column16 style4 null"></td>
            <td class="column17 style4 null"></td>
            <td class="column18 style4 null"></td>
            <td class="column19 style4 null"></td>
            <td class="column20 style4 null"></td>
            <td class="column21 style4 null"></td>
            <td class="column22 style4 null"></td>
            <td class="column23 style4 null"></td>
            <td class="column24 style4 null"></td>
            <td class="column25 style4 null"></td>
            <td class="column26 style15 null"></td>
            <td class="column27 style16 null"></td>
            <td class="column28 style4 null"></td>
            <td class="column29 style4 null"></td>
            <td class="column30 style4 null"></td>
            <td class="column31 style4 null"></td>
            <td class="column32 style4 null"></td>
            <td class="column33 style4 null"></td>
            <td class="column34 style4 null"></td>
            <td class="column35 style4 null"></td>
            <td class="column36 style4 null"></td>
            <td class="column37 style4 null"></td>
            <td class="column38 style4 null"></td>
            <td class="column39 style4 null"></td>
            <td class="column40 style4 null"></td>
            <td class="column41 style4 null"></td>
            <td class="column42 style4 null"></td>
            <td class="column43 style4 null"></td>
            <td class="column44 style4 null"></td>
            <td class="column45 style4 null"></td>
            <td class="column46 style4 null"></td>
            <td class="column47 style4 null"></td>
            <td class="column48 style4 null"></td>
            <td class="column49 style4 null"></td>
            <td class="column50 style4 null"></td>
            <td class="column51 style4 null"></td>
            <td class="column52 style4 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>
          <tr class="row7">
            <td class="column0 style17 s">Rec </td>
            <td class="column1 style77 s style78" colspan="2">Recuperadora</td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style4 null"></td>
            <td class="column6 style4 null"></td>
            <td class="column7 style4 null"></td>
            <td class="column8 style4 null"></td>
            <td class="column9 style4 null"></td>
            <td class="column10 style4 null"></td>
            <td class="column11 style4 null"></td>
            <td class="column12 style4 null"></td>
            <td class="column13 style4 null"></td>
            <td class="column14 style4 null"></td>
            <td class="column15 style4 null"></td>
            <td class="column16 style4 null"></td>
            <td class="column17 style4 null"></td>
            <td class="column18 style4 null"></td>
            <td class="column19 style4 null"></td>
            <td class="column20 style4 null"></td>
            <td class="column21 style4 null"></td>
            <td class="column22 style4 null"></td>
            <td class="column23 style4 null"></td>
            <td class="column24 style4 null"></td>
            <td class="column25 style4 null"></td>
            <td class="column26 style15 null"></td>
            <td class="column27 style16 null"></td>
            <td class="column28 style4 null"></td>
            <td class="column29 style4 null"></td>
            <td class="column30 style4 null"></td>
            <td class="column31 style4 null"></td>
            <td class="column32 style4 null"></td>
            <td class="column33 style4 null"></td>
            <td class="column34 style4 null"></td>
            <td class="column35 style4 null"></td>
            <td class="column36 style4 null"></td>
            <td class="column37 style4 null"></td>
            <td class="column38 style4 null"></td>
            <td class="column39 style4 null"></td>
            <td class="column40 style4 null"></td>
            <td class="column41 style4 null"></td>
            <td class="column42 style4 null"></td>
            <td class="column43 style4 null"></td>
            <td class="column44 style4 null"></td>
            <td class="column45 style4 null"></td>
            <td class="column46 style4 null"></td>
            <td class="column47 style4 null"></td>
            <td class="column48 style4 null"></td>
            <td class="column49 style4 null"></td>
            <td class="column50 style4 null"></td>
            <td class="column51 style4 null"></td>
            <td class="column52 style4 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>
          <tr class="row8">
            <td class="column0 style18 s">Lab </td>
            <td class="column1 style62 s style63" colspan="2">Laboratório</td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style4 null"></td>
            <td class="column6 style4 null"></td>
            <td class="column7 style4 null"></td>
            <td class="column8 style4 null"></td>
            <td class="column9 style4 null"></td>
            <td class="column10 style4 null"></td>
            <td class="column11 style4 null"></td>
            <td class="column12 style4 null"></td>
            <td class="column13 style4 null"></td>
            <td class="column14 style4 null"></td>
            <td class="column15 style4 null"></td>
            <td class="column16 style4 null"></td>
            <td class="column17 style4 null"></td>
            <td class="column18 style4 null"></td>
            <td class="column19 style4 null"></td>
            <td class="column20 style4 null"></td>
            <td class="column21 style4 null"></td>
            <td class="column22 style4 null"></td>
            <td class="column23 style4 null"></td>
            <td class="column24 style4 null"></td>
            <td class="column25 style4 null"></td>
            <td class="column26 style15 null"></td>
            <td class="column27 style16 null"></td>
            <td class="column28 style4 null"></td>
            <td class="column29 style4 null"></td>
            <td class="column30 style4 null"></td>
            <td class="column31 style4 null"></td>
            <td class="column32 style4 null"></td>
            <td class="column33 style4 null"></td>
            <td class="column34 style4 null"></td>
            <td class="column35 style4 null"></td>
            <td class="column36 style4 null"></td>
            <td class="column37 style4 null"></td>
            <td class="column38 style4 null"></td>
            <td class="column39 style4 null"></td>
            <td class="column40 style4 null"></td>
            <td class="column41 style4 null"></td>
            <td class="column42 style4 null"></td>
            <td class="column43 style4 null"></td>
            <td class="column44 style4 null"></td>
            <td class="column45 style4 null"></td>
            <td class="column46 style4 null"></td>
            <td class="column47 style4 null"></td>
            <td class="column48 style4 null"></td>
            <td class="column49 style4 null"></td>
            <td class="column50 style4 null"></td>
            <td class="column51 style4 null"></td>
            <td class="column52 style4 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>
          <tr class="row9">
            <td class="column0 style18 s">Téc </td>
            <td class="column1 style62 s style63" colspan="2">Técnica</td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style4 null"></td>
            <td class="column6 style4 null"></td>
            <td class="column7 style4 null"></td>
            <td class="column8 style4 null"></td>
            <td class="column9 style4 null"></td>
            <td class="column10 style4 null"></td>
            <td class="column11 style4 null"></td>
            <td class="column12 style4 null"></td>
            <td class="column13 style4 null"></td>
            <td class="column14 style4 null"></td>
            <td class="column15 style4 null"></td>
            <td class="column16 style4 null"></td>
            <td class="column17 style4 null"></td>
            <td class="column18 style4 null"></td>
            <td class="column19 style4 null"></td>
            <td class="column20 style4 null"></td>
            <td class="column21 style4 null"></td>
            <td class="column22 style4 null"></td>
            <td class="column23 style4 null"></td>
            <td class="column24 style4 null"></td>
            <td class="column25 style4 null"></td>
            <td class="column26 style15 null"></td>
            <td class="column27 style16 null"></td>
            <td class="column28 style4 null"></td>
            <td class="column29 style4 null"></td>
            <td class="column30 style4 null"></td>
            <td class="column31 style4 null"></td>
            <td class="column32 style4 null"></td>
            <td class="column33 style4 null"></td>
            <td class="column34 style4 null"></td>
            <td class="column35 style4 null"></td>
            <td class="column36 style4 null"></td>
            <td class="column37 style4 null"></td>
            <td class="column38 style4 null"></td>
            <td class="column39 style4 null"></td>
            <td class="column40 style4 null"></td>
            <td class="column41 style4 null"></td>
            <td class="column42 style4 null"></td>
            <td class="column43 style4 null"></td>
            <td class="column44 style4 null"></td>
            <td class="column45 style4 null"></td>
            <td class="column46 style4 null"></td>
            <td class="column47 style4 null"></td>
            <td class="column48 style4 null"></td>
            <td class="column49 style4 null"></td>
            <td class="column50 style4 null"></td>
            <td class="column51 style4 null"></td>
            <td class="column52 style4 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>
          <tr class="row10">
            <td class="column0 style18 s">Mis </td>
            <td class="column1 style27 s">Mistura</td>
            <td class="column2 style28 null"></td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style4 null"></td>
            <td class="column6 style4 null"></td>
            <td class="column7 style4 null"></td>
            <td class="column8 style4 null"></td>
            <td class="column9 style4 null"></td>
            <td class="column10 style4 null"></td>
            <td class="column11 style4 null"></td>
            <td class="column12 style4 null"></td>
            <td class="column13 style4 null"></td>
            <td class="column14 style4 null"></td>
            <td class="column15 style4 null"></td>
            <td class="column16 style4 null"></td>
            <td class="column17 style4 null"></td>
            <td class="column18 style4 null"></td>
            <td class="column19 style4 null"></td>
            <td class="column20 style4 null"></td>
            <td class="column21 style4 null"></td>
            <td class="column22 style4 null"></td>
            <td class="column23 style4 null"></td>
            <td class="column24 style4 null"></td>
            <td class="column25 style4 null"></td>
            <td class="column26 style15 null"></td>
            <td class="column27 style16 null"></td>
            <td class="column28 style4 null"></td>
            <td class="column29 style4 null"></td>
            <td class="column30 style4 null"></td>
            <td class="column31 style4 null"></td>
            <td class="column32 style4 null"></td>
            <td class="column33 style4 null"></td>
            <td class="column34 style4 null"></td>
            <td class="column35 style4 null"></td>
            <td class="column36 style4 null"></td>
            <td class="column37 style4 null"></td>
            <td class="column38 style4 null"></td>
            <td class="column39 style4 null"></td>
            <td class="column40 style4 null"></td>
            <td class="column41 style4 null"></td>
            <td class="column42 style4 null"></td>
            <td class="column43 style4 null"></td>
            <td class="column44 style4 null"></td>
            <td class="column45 style4 null"></td>
            <td class="column46 style4 null"></td>
            <td class="column47 style4 null"></td>
            <td class="column48 style4 null"></td>
            <td class="column49 style4 null"></td>
            <td class="column50 style4 null"></td>
            <td class="column51 style4 null"></td>
            <td class="column52 style4 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>
          <tr class="row11">
            <td class="column0 style18 s">Elet </td>
            <td class="column1 style62 s style63" colspan="2">Elétrica</td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style4 null"></td>
            <td class="column6 style4 null"></td>
            <td class="column7 style4 null"></td>
            <td class="column8 style4 null"></td>
            <td class="column9 style4 null"></td>
            <td class="column10 style4 null"></td>
            <td class="column11 style4 null"></td>
            <td class="column12 style4 null"></td>
            <td class="column13 style4 null"></td>
            <td class="column14 style4 null"></td>
            <td class="column15 style4 null"></td>
            <td class="column16 style4 null"></td>
            <td class="column17 style4 null"></td>
            <td class="column18 style4 null"></td>
            <td class="column19 style4 null"></td>
            <td class="column20 style4 null"></td>
            <td class="column21 style4 null"></td>
            <td class="column22 style4 null"></td>
            <td class="column23 style4 null"></td>
            <td class="column24 style4 null"></td>
            <td class="column25 style4 null"></td>
            <td class="column26 style15 null"></td>
            <td class="column27 style16 null"></td>
            <td class="column28 style4 null"></td>
            <td class="column29 style4 null"></td>
            <td class="column30 style4 null"></td>
            <td class="column31 style4 null"></td>
            <td class="column32 style4 null"></td>
            <td class="column33 style4 null"></td>
            <td class="column34 style4 null"></td>
            <td class="column35 style4 null"></td>
            <td class="column36 style4 null"></td>
            <td class="column37 style4 null"></td>
            <td class="column38 style4 null"></td>
            <td class="column39 style4 null"></td>
            <td class="column40 style4 null"></td>
            <td class="column41 style4 null"></td>
            <td class="column42 style4 null"></td>
            <td class="column43 style4 null"></td>
            <td class="column44 style4 null"></td>
            <td class="column45 style4 null"></td>
            <td class="column46 style4 null"></td>
            <td class="column47 style4 null"></td>
            <td class="column48 style4 null"></td>
            <td class="column49 style4 null"></td>
            <td class="column50 style4 null"></td>
            <td class="column51 style4 null"></td>
            <td class="column52 style4 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>
          <tr class="row12">
            <td class="column0 style18 s">Res</td>
            <td class="column1 style62 s style63" colspan="2">Reserva</td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style4 null"></td>
            <td class="column6 style4 null"></td>
            <td class="column7 style4 null"></td>
            <td class="column8 style4 null"></td>
            <td class="column9 style4 null"></td>
            <td class="column10 style4 null"></td>
            <td class="column11 style4 null"></td>
            <td class="column12 style4 null"></td>
            <td class="column13 style4 null"></td>
            <td class="column14 style4 null"></td>
            <td class="column15 style4 null"></td>
            <td class="column16 style4 null"></td>
            <td class="column17 style4 null"></td>
            <td class="column18 style4 null"></td>
            <td class="column19 style4 null"></td>
            <td class="column20 style4 null"></td>
            <td class="column21 style4 null"></td>
            <td class="column22 style4 null"></td>
            <td class="column23 style4 null"></td>
            <td class="column24 style4 null"></td>
            <td class="column25 style4 null"></td>
            <td class="column26 style15 null"></td>
            <td class="column27 style16 null"></td>
            <td class="column28 style4 null"></td>
            <td class="column29 style4 null"></td>
            <td class="column30 style4 null"></td>
            <td class="column31 style4 null"></td>
            <td class="column32 style4 null"></td>
            <td class="column33 style4 null"></td>
            <td class="column34 style4 null"></td>
            <td class="column35 style4 null"></td>
            <td class="column36 style4 null"></td>
            <td class="column37 style4 null"></td>
            <td class="column38 style4 null"></td>
            <td class="column39 style4 null"></td>
            <td class="column40 style4 null"></td>
            <td class="column41 style4 null"></td>
            <td class="column42 style4 null"></td>
            <td class="column43 style4 null"></td>
            <td class="column44 style4 null"></td>
            <td class="column45 style4 null"></td>
            <td class="column46 style4 null"></td>
            <td class="column47 style4 null"></td>
            <td class="column48 style4 null"></td>
            <td class="column49 style4 null"></td>
            <td class="column50 style4 null"></td>
            <td class="column51 style4 null"></td>
            <td class="column52 style4 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>
          <tr class="row13">
            <td class="column0 style18 s">Tinta</td>
            <td class="column1 style62 s style63" colspan="2">Casa de Tintas</td>
            <td class="column3 style12 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style13 null"></td>
            <td class="column6 style9 null"></td>
            <td class="column7 style9 null"></td>
            <td class="column8 style9 null"></td>
            <td class="column9 style9 null"></td>
            <td class="column10 style9 null"></td>
            <td class="column11 style9 null"></td>
            <td class="column12 style9 null"></td>
            <td class="column13 style9 null"></td>
            <td class="column14 style9 null"></td>
            <td class="column15 style9 null"></td>
            <td class="column16 style9 null"></td>
            <td class="column17 style9 null"></td>
            <td class="column18 style9 null"></td>
            <td class="column19 style9 null"></td>
            <td class="column20 style9 null"></td>
            <td class="column21 style9 null"></td>
            <td class="column22 style9 null"></td>
            <td class="column23 style9 null"></td>
            <td class="column24 style9 null"></td>
            <td class="column25 style9 null"></td>
            <td class="column26 style10 null"></td>
            <td class="column27 style11 null"></td>
            <td class="column28 style9 null"></td>
            <td class="column29 style9 null"></td>
            <td class="column30 style9 null"></td>
            <td class="column31 style9 null"></td>
            <td class="column32 style9 null"></td>
            <td class="column33 style9 null"></td>
            <td class="column34 style9 null"></td>
            <td class="column35 style9 null"></td>
            <td class="column36 style9 null"></td>
            <td class="column37 style9 null"></td>
            <td class="column38 style9 null"></td>
            <td class="column39 style9 null"></td>
            <td class="column40 style9 null"></td>
            <td class="column41 style9 null"></td>
            <td class="column42 style9 null"></td>
            <td class="column43 style9 null"></td>
            <td class="column44 style9 null"></td>
            <td class="column45 style9 null"></td>
            <td class="column46 style9 null"></td>
            <td class="column47 style9 null"></td>
            <td class="column48 style9 null"></td>
            <td class="column49 style9 null"></td>
            <td class="column50 style8 null"></td>
            <td class="column51 style8 null"></td>
            <td class="column52 style8 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>
          <tr class="row13">
            <td class="column0 style18 s">Mec</td>
            <td class="column1 style62 s style63" colspan="2">Mecânica</td>
            <td class="column3 style12 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style13 null"></td>
            <td class="column6 style9 null"></td>
            <td class="column7 style9 null"></td>
            <td class="column8 style9 null"></td>
            <td class="column9 style9 null"></td>
            <td class="column10 style9 null"></td>
            <td class="column11 style9 null"></td>
            <td class="column12 style9 null"></td>
            <td class="column13 style9 null"></td>
            <td class="column14 style9 null"></td>
            <td class="column15 style9 null"></td>
            <td class="column16 style9 null"></td>
            <td class="column17 style9 null"></td>
            <td class="column18 style9 null"></td>
            <td class="column19 style9 null"></td>
            <td class="column20 style9 null"></td>
            <td class="column21 style9 null"></td>
            <td class="column22 style9 null"></td>
            <td class="column23 style9 null"></td>
            <td class="column24 style9 null"></td>
            <td class="column25 style9 null"></td>
            <td class="column26 style10 null"></td>
            <td class="column27 style11 null"></td>
            <td class="column28 style9 null"></td>
            <td class="column29 style9 null"></td>
            <td class="column30 style9 null"></td>
            <td class="column31 style9 null"></td>
            <td class="column32 style9 null"></td>
            <td class="column33 style9 null"></td>
            <td class="column34 style9 null"></td>
            <td class="column35 style9 null"></td>
            <td class="column36 style9 null"></td>
            <td class="column37 style9 null"></td>
            <td class="column38 style9 null"></td>
            <td class="column39 style9 null"></td>
            <td class="column40 style9 null"></td>
            <td class="column41 style9 null"></td>
            <td class="column42 style9 null"></td>
            <td class="column43 style9 null"></td>
            <td class="column44 style9 null"></td>
            <td class="column45 style9 null"></td>
            <td class="column46 style9 null"></td>
            <td class="column47 style9 null"></td>
            <td class="column48 style9 null"></td>
            <td class="column49 style9 null"></td>
            <td class="column50 style8 null"></td>
            <td class="column51 style8 null"></td>
            <td class="column52 style8 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>
          <tr class="row14">
            <td class="column0 style19 s">CQ</td>
            <td class="column1 style75 s style76" colspan="2">Coordenação Qualidade</td>
            <td class="column3 style12 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style13 null"></td>
            <td class="column6 style9 null"></td>
            <td class="column7 style9 null"></td>
            <td class="column8 style9 null"></td>
            <td class="column9 style9 null"></td>
            <td class="column10 style9 null"></td>
            <td class="column11 style9 null"></td>
            <td class="column12 style9 null"></td>
            <td class="column13 style9 null"></td>
            <td class="column14 style9 null"></td>
            <td class="column15 style9 null"></td>
            <td class="column16 style9 null"></td>
            <td class="column17 style9 null"></td>
            <td class="column18 style9 null"></td>
            <td class="column19 style9 null"></td>
            <td class="column20 style9 null"></td>
            <td class="column21 style9 null"></td>
            <td class="column22 style9 null"></td>
            <td class="column23 style9 null"></td>
            <td class="column24 style9 null"></td>
            <td class="column25 style9 null"></td>
            <td class="column26 style10 null"></td>
            <td class="column27 style11 null"></td>
            <td class="column28 style9 null"></td>
            <td class="column29 style9 null"></td>
            <td class="column30 style9 null"></td>
            <td class="column31 style9 null"></td>
            <td class="column32 style9 null"></td>
            <td class="column33 style9 null"></td>
            <td class="column34 style9 null"></td>
            <td class="column35 style9 null"></td>
            <td class="column36 style9 null"></td>
            <td class="column37 style9 null"></td>
            <td class="column38 style9 null"></td>
            <td class="column39 style9 null"></td>
            <td class="column40 style9 null"></td>
            <td class="column41 style9 null"></td>
            <td class="column42 style9 null"></td>
            <td class="column43 style9 null"></td>
            <td class="column44 style9 null"></td>
            <td class="column45 style9 null"></td>
            <td class="column46 style9 null"></td>
            <td class="column47 style9 null"></td>
            <td class="column48 style9 null"></td>
            <td class="column49 style9 null"></td>
            <td class="column50 style8 null"></td>
            <td class="column51 style8 null"></td>
            <td class="column52 style8 null"></td>
            <td class="column53 style47 null"></td>
            <td class="column54 style48 null"></td>
          </tr>


         
    </tbody>
    </table>    
	

</body>
</html>