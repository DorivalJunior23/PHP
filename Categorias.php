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
  <p>Seu nome: <input type="text" name="nome" /></p>
  <p>Sua idade: <input type="text" name="idade" /></p>
  <p><input type="submit" /></p>
</form>

</body>

</html>


<?php
$categorias = [];
$categorias[]= 'Infantil';
$categorias[]= 'Adolecente';
$categorias[]= 'Livre';

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if($idade<6){

    echo "Nao pode competir";
}
if($idade>6 and $idade<=12){
  for($i=0; $i<count($categorias); $i++){  
    if($categorias[$i] == "Infantil"){ 
      echo  "O nadador " .$nome. " Compete na categoria infantil";
    }
  }
}else if($idade>12 and $idade<18){
  for($i=0; $i<count($categorias); $i++){  
    if($categorias[$i] == "Adolecente"){ 
      echo  "O nadador " .$nome. " Compete na categoria adolecente";
    }
  }
}else{
  for($i=0; $i<count($categorias); $i++){  
    if($categorias[$i] == "Livre"){ 
      echo  "O nadador " .$nome. " Compete na categoria Livre";
    }
  }
}
