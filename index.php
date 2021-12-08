<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistema de Login</title>
</head>

<body>
    <br>
    <div class="container text-center">
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            Acessar
        </button>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#d3d3d3 ;">
                    <h5 class="modal-title" id="exampleModalLabel">Sistema de Login </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id =login-form> 
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Usuário</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Digite seu Email">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="col-form-label">Senha:</label>
                            <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua Senha">
                        </div>
                        <div class ="mb-3" >
                        <input type="submit" class ="btn btn-outline-primary bt-sm" id ="login-btn" value ="Entrar">
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <scrip src="js/config.js"></script>

</body>

</html>