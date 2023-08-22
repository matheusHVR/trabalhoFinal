<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $dadosRecebidos = file_get_contents('php://input');
    $dadosDecodificados = json_decode($dadosRecebidos, true);
    cadastra_usuario($dadosDecodificados);
}elseif ($_SERVER['REQUEST_METHOD'] === 'GET'){
    lista_usuarios();
}elseif($_SERVER['REQUEST_METHOD'] === 'PUT'){
    $dadosRecebidos = file_get_contents('php://input');
    $dadosDecodificados = json_decode($dadosRecebidos, true);
    altera_usuario($dadosDecodificados);
}elseif($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    $dadosRecebidos = file_get_contents('php://input');
    $dadosDecodificados = json_decode($dadosRecebidos, true);
    deleta_usuario($dadosDecodificados);
}

function cadastra_usuario($usuario){
    $id = rand(0,999);
    $nome = $usuario['nome'];
    $matricula = $usuario['matricula'];
    $senha = $usuario['senha'];
    $tipo = $usuario['tipo'];
    $curso = $usuario['curso'];


    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'Atividades');

    $query = "INSERT INTO usuario (id, nome, matricula, senha, tipo, curso) VALUES ($id, '$nome', '$matricula', '$senha', '$tipo', '$curso');";
    

    $result = mysqli_query($con, $query);

    echo json_encode(array('erro'=>mysqli_error($con),'resultado'=>$result));
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