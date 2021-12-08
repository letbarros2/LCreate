<?php


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//validação do php://

if(empty($dados['email'])){
    $retorna =['erro' => true,'msg' => "<div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que seu usuário está errado, favor tentar novamente </div>"];
}else if(empty($dados['password'])){
    $retorna =['erro' => true,'msg' => "div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que sua senha está incorreta, favor tentar novamente </div>"];

}else{
    $retorna =['erro' => false,'msg' => "div class='alert alert-success' role='alert'> ⚠️VALIDAR </div>"];

}

echo json_encode($retorna);
?>
