<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    cadastra_atividade();
}elseif ($_SERVER['REQUEST_METHOD'] === 'GET'){
    lista_atividades();
}elseif($_SERVER['REQUEST_METHOD'] === 'PUT'){
    altera_atividade($_SERVER['PATH_INFO']);
}elseif($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    deleta_atividade($_SERVER['PATH_INFO']);
}

function cadastra_atividade(){

}

function lista_atividades(){

}

function altera_atividade($diciplina){

}

function deleta_atividade($diciplina){
    
}


?>