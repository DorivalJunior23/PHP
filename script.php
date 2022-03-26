<?php
include "servicoMensagemSessao.php";
include "servicoValidacao.php";
include "sevicoCategoriaCompetidor.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome,$idade);
header(string 'location: index.php');
