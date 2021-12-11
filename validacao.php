<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['email'])){
    $retorna = ['erro'=> true,'msg' => "<div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que seu usuário está errado, favor tentar novamente </div>"];
}elseif(empty($dados['senha'])){
    $retorna = ['erro'=> true,'msg' => "div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que sua senha está incorreta, favor tentar novamente </div>"];
}else{
    $retorna = ['erro'=> false,'msg' => "div class='alert alert-success' role='alert'> V.A.L.I.D.A.R</div>"];

}

echo json_encode($retorna);
    

?>
