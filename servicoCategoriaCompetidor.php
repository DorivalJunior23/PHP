<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string{
$categorias = [];
$categorias[]= 'Infantil';
$categorias[]= 'Adolecente';
$categorias[]= 'Livre';
if(validaNome($nome)&&validaIdade($idade)){
    removerMensagemErro();
    if($idade>6 and $idade<=12){
        for($i=0; $i<count($categorias); $i++){  
            if($categorias[$i] == "Infantil"){ 
            setarMensagemSucesso(mensagem:"O nadador " .$nome. " Compete na categoria " .$categorias);
            return null;
        }
    }
    }else if($idade>12 and $idade<18){
    for($i=0; $i<count($categorias); $i++){  
        if($categorias[$i] == "Adolecente"){ 
            setarMensagemSucesso(mensagem: "O nadador " .$nome. " Compete na categoria ".$categorias);
            return null;
        }
    }
    }else{
    for($i=0; $i<count($categorias); $i++){  
        if($categorias[$i] == "Livre"){ 
            setarMensagemSucesso(mensagem:"O nadador " .$nome. " Compete na categoria ".$categorias);
            return null;
        }
    }
    }
}else{
    removerMensagemSucesso();
    return obterMensagemErro();
}
}
//header("location: index.php");