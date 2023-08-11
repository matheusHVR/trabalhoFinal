<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    cadastra_diciplina();
}elseif ($_SERVER['REQUEST_METHOD'] === 'GET'){
    lista_diciplinas();
}elseif($_SERVER['REQUEST_METHOD'] === 'PUT'){
    altera_diciplina($_SERVER['PATH_INFO']);
}elseif($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    deleta_diciplina($_SERVER['PATH_INFO']);
}

function cadastra_diciplina(){

}

function lista_diciplinas(){

}

function altera_diciplina($diciplina){

}

function deleta_diciplina($diciplina){
    
}


?>