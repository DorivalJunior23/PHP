<?php
$categorias = [];
$categorias[]= 'Infantil';
$categorias[]= 'Adolecente';
$categorias[]= 'Livre';

$nome = 'Dorival';
$idade = 18;

//var_dump($nome,$idade);

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
