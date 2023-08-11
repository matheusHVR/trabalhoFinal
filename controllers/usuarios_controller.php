<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    cadastra_usuario();
}elseif ($_SERVER['REQUEST_METHOD'] === 'GET'){
    lista_usuarios();
}elseif($_SERVER['REQUEST_METHOD'] === 'PUT'){
    altera_uauario($_SERVER['PATH_INFO']);
}elseif($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    deleta_usuario($_SERVER['PATH_INFO']);
}

function cadastra_usuario(){
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $curso = $_POST['curso'];
    $departamento = $_POST['departamento'];

    $con = mysqli_connect('localhost','admin','');
    mysqli_select_db('atividades', $con);

    if($tipo == ¨aluno¨){
        $query = "INSERT INTO alunos (descricao, valor_unitario) VALUES (".$valor_unitario.", ".$d.");";
    }elseif($tipo == ¨professor¨){
        $query = "INSERT INTO professores (descricao, valor_unitario) VALUES (".$valor_unitario.", ".$d.");";
    }

    $result = mysqli_query($query);

    echo $result;
    mysqli_close($con);
}

function lista_usuarios(){
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'atividades');

    $query = "SELECT * from alunos, professores";
    $result = mysqli_query($con,$query);

    if($result){
        $rows = array();
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $rows[$i] = $row;
            $i += 1;
        }
        $json_dados = json_encode($rows);

        header('Content-Type: application/json');

        echo $json_dados;
    }else{
        echo "Ocorreu um erro na consulta: " . mysqli_error($con);
    }
   
    mysqli_close($con);
}

function altera_usuario($usuario){

}

function deleta_usuario($usuario){

}

?>