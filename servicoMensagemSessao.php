<?php

session_start();

function setarMensagemSucesso(string $mensagem) : void{
    $_SESSION['mensagem-de-Sucesso'] = $mensagem;
}
function obterMensagemSucesso() : ?string{
    if(isset ($_SESSION['mensagem-de-Sucesso'])){
        return  $_SESSION['mensagem-de-Sucesso'];
    }
    return null;
}
function setarMensagemErro(string $mensagem) : void{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}
function obterMensagemErro() : ?string{
    if(isset ($_SESSION['mensagem-de-erro'])){
        return  $_SESSION['mensagem-de-erro'];
    }
    return null;
}
function removerMensagemSucesso() : void{
    if(isset ($_SESSION['mensagem-de-Sucesso'])){
        return_unset($_SESSION['mensagem-de-Sucesso']);
    }
}
function removerMensagemErro() : void{
    if(isset ($_SESSION['mensagem-de-erro'])){
        return_unset( $_SESSION['mensagem-de-erro']);
    }
}