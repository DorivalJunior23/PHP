<?php
   include "servicoMensagemSessao.php";
   include "servicoValidacao.php";
   include "sevicoCategoriaCompetidor.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>=Formulário de Inscrição</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  
<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php
    $mensagemErro = obterMensagemErro();
    if(!empty($mensagemErro)){
        echo $mensagemErro;

    }
    $mensagemSucesso = obterMensagemSucesso();
    if(!empty($mensagemSucesso)){
        echo $mensagemSucesso;

    }

    ?>
  <p>Seu nome: <input type="text" name="nome" /></p>
  <p>Sua idade: <input type="text" name="idade" /></p>
  <p><input type="submit" /></p>
</form>

</body>

</html>

