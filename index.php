<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Sistema de Login</title>
</head>

<body>
    <!-- Criando Div para botão de login -->

    <div class="container text-center">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#LoginModal">
            Acessar o Portal
        </button>
    </div>

    <!-- Criando Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sistema de Login </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Login com Usuário e senha -->
                    <form id ="login-form">
                        <div class="mb-3">
                            <label for="usuario" class="col-form-label">Usuário:</label>
                            <input type="text" name="usuario" placeholder="Digite o seu Email  📧" class="form-control" id="usuario">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="col-form-label">Senha</label>
                            <input type="password" name="senha" placeholder="Digite a sua Senha" class="form-control" id="senha">
                        </div>
                        <!-- Botão para iniciar o Login do Formulario -->
                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-danger bt-sm" id="btnlogin" value="Acessar">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>