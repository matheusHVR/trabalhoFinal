<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    cadastra_matricula();
}elseif ($_SERVER['REQUEST_METHOD'] === 'GET'){
    lista_matriculas();
}elseif($_SERVER['REQUEST_METHOD'] === 'PUT'){
    altera_matricula($_SERVER['PATH_INFO']);
}elseif($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    deleta_matricula($_SERVER['PATH_INFO']);
}

function cadastra_matricula(){

}

function lista_matriculas(){

}

function altera_matricula($diciplina){

}

function deleta_matricula($diciplina){
    
}


?>