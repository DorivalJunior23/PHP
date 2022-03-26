<?php
function validaNome(string $nome) : bool{
if(empty($nome)){
   setarMensagemErro(mensagem:'O nome não pode ser vazio!');
    return false;
}
else if(strlen($nome)<3){
    setarMensagemErro(mensagem:'O nome tem que ter mais de 3 caracteres!');
    return false;
}
else if(strlen($nome)>40){
    setarMensagemErro(mensagem: 'O nome é muito extenso!');
    return false;
}
return true;
}
function validaIdade(string $idade) : bool{
    if(!is_numeric($idade)){
        setarMensagemErro(mensagem:'A idade tem que ser um numero!');
        return false;
    }
    else if(empty($idade)){
        setarMensagemErro(mensagem:'A idade não pode estar vazia!');
        return false;
    }
    return true;
}
