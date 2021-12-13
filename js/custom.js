const loginForm = document.getElementById("login-usuario-form");
const msgAlertErroLogin = document.getElementById("msgAlertErroLogin");
const loginModal = new bootstrap.Modal(document.getElementById("loginModal"));

loginForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    if (document.getElementById("email").value === "") {
        msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que seu usuário está errado, favor tentar novamente </div>";
    } else if (document.getElementById("senha").value === "") {
        msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'> ⚠️ Erro: Olá, identificamos que sua senha está incorreta, favor tentar novamente </div>";
    } else {
        const dadosForm = new FormData(loginForm);

         const  dados = await fetch("validacao.php", {
            method: "POST",
            body: dadosForm
        });
        const resposta = await dados.json();

        if(resposta['erro']){
            msgAlertErroLogin.innerHTML = resposta['msg']
        }else{
            document.getElementById("dados-usuarios").innerHTML = "Bem vindo " + resposta['dados'].nome + "<br><a href='sair.php'>Sair</a><br>";
            loginForm.reset();
            loginModal.hide();

        }

    }

});