<?php


/* $estados = array("SP","PB","RS");
echo $estados[5]; */
//$estados = $_GET["estados"];


//$nome = $_GET["nome"];


//Aqui é definido como é tratato o erro(neste exemplo a função defini que o erro de Notice não sera exibido na tela)
error_reporting(E_ALL & ~E_NOTICE);


//gerra um Notice= na tela se não for tratado com a função error_reporting().
$testeErroNotice = $_GET["testeErroNotice"];

//echo "$estados";
//echo "$nome";
echo $testeErroNotice;
