<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100&display=swap" rel="stylesheet">
    <title>Sistema de Login</title>
</head>

<body class="text-center" style="background-color: #A3155F;">

    <?php

    if (isset($_SESSION['id']) and (isset($_SESSION['nome']))) {

        echo "Bem vindo " . $_SESSION['nome'] . "<br>";

        echo "<a href='sair.php'>Sair</a><br>";
    } else {

        echo "<div class='container '>";
        echo "<div id='dados-usuarios'>";
        echo "<br>";

        echo " <h1 style='color:white'> LBCreated </h1> <br>";
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>

        <div class='container'>
        <div class='row'>
        <div class='col text-center'>
        <button type='button' class='btn btn-outline-primary btn-lg active' data-bs-toggle='modal' 
        data-bs-target='#loginModal'> Acessar </button>
        </div>
        </div>
    </div>";
    
    }
    ?>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:cadetblue">
                    <h5 class="modal-title" id="loginModalLabel" style="color:white">Seja Bem Vindo!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <main class="form-signin" class="border border-primary"></span>

                    <form id="login-usuario-form" style="background-color:#A3155F">
                        <div class="" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                            <div class="modal-body">
                                <h1 class="h3 mb-3 fw-normal" style="color:white">
                            
                            <img src="teste.gif">
                                </h1>

                                <br>
                                <span id="msgAlertErroLogin"></span>
                                <div class="mb-3">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Digite o usuário">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="senha" class="form-control" id="senha" autocomplete="on" placeholder="Digite a senha">
                                </div>
                                <div class="mb-3">

                                    <input type="submit" class="w-100 btn btn-lg" id="login-usuario-btn" style="background-color: #F0DD4F;" id="login-usuario-btn" value="Acessar">
                                </div>
                            </div>
                        </div>

                    </form>

                    </form>
                    <script style="background-color: cadetblue";>
                    </script>
                </main>
            </div>
        </div>
    </div>
    <img src="https://raw.githubusercontent.com/MicaelliMedeiros/micaellimedeiros/master/image/computer-illustration.png">
    <p class='mt-5 mb-3 text-muted' style='color:#F0DD4F'>&copy; @letbarros2 - 2021</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>

</html>

<!DOCTYPE html>