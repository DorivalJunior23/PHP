<?php
session_start();

$categorias = [];
$categorias[]= 'Infantil';
$categorias[]= 'Adolecente';
$categorias[]= 'Livre';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
if(empty($nome)){
   $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio!';
   header("location: index.php");
    return;
}
else if(strlen($nome)<3){
    $_SESSION['mensagem-de-erro'] = 'O nome tem que ter mais de 3 caracteres!';
    header("location: index.php");
    return;
}
else if(strlen($nome)>40){
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso!';
    header("location: index.php");
    return;
}
else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'A idade tem que ser um numero!';
    header("location: index.php");
    return;
}
else if(empty($idade)){
    $_SESSION['mensagem-de-erro'] = 'A idade não pode estar vazia!';
    header("location: index.php");
    return;
}


if($idade<6){

    echo "Nao pode competir";
}
if($idade>6 and $idade<=12){
  for($i=0; $i<count($categorias); $i++){  
    if($categorias[$i] == "Infantil"){ 
      $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " Compete na categoria " .$categorias;
      header("location: index.php");
      return;
    }
  }
}else if($idade>12 and $idade<18){
  for($i=0; $i<count($categorias); $i++){  
    if($categorias[$i] == "Adolecente"){ 
        $_SESSION['mensagem-de-sucesso'] =  "O nadador " .$nome. " Compete na categoria ".$categorias;
    header("location: index.php");
        return;
    }
  }
}else{
  for($i=0; $i<count($categorias); $i++){  
    if($categorias[$i] == "Livre"){ 
        $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " Compete na categoria ".$categorias;
        header("location: index.php");
        return;
    }
  }
}
