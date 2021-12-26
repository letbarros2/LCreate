<?php
session_start();
include_once "bd/conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['email'])) {

    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que seu usuário está errado, favor tentar novamente </div>"];
} elseif (empty($dados['senha'])) {

    $retorna = ['erro' => true, 'msg' => "div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que sua senha está incorreta, favor tentar novamente </div>"];
} else {

    $query_usuario = "SELECT id, nome, email, senha FROM usuarios where email =:email LIMIT 1";
    $result_usuario = $conn->prepare($query_usuario);
    $result_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
    $result_usuario->execute();

    if (($result_usuario) and ($result_usuario->rowCount() != 0)) {
        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
        if (password_verify($dados['senha'], $row_usuario['senha'])) {

            $_SESSION['id'] = $row_usuario['id'];
            $_SESSION['nome'] = $row_usuario['nome'];
            $retorna = ['erro' => false, 'dados' => $row_usuario];
        } else {

            $retorna = ['erro' => true, 'msg' => "div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que sua senha  ou email está incorreto, favor tentar novamente </div>"];
        }
    } else {
        $retorna = ['erro' => true, 'msg' => "div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que sua senha  ou email está incorreto, favor tentar novamente </div>"];
    }
}


echo json_encode($retorna);
