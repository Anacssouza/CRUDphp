<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aumigos </title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <nav class="navbar navbar-dark fixed-top d-flex nav">
        <div class="container-fluid">
            <a class="navbar-brand text-start" style="display: flex; align-items: center;" href="index.php"> 
                <img style="width: 50px;" src="assets/img/logo.png" alt="logo"> Aumigos 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" style='background: #2c3e50; color: white;' tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> Menu </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?page=novo">Criar Animais </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar"> Listar animais </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php

            include("config.php");

            switch(@$_REQUEST["page"]){
                case "novo":
                    include("criarAnimais.php");
                break;
                case "listar": 
                    include("listarAnimais.php");
                break;
                case "salvar":
                    include("salvarAnimal.php");
                break;
                case "editar":
                    include("editarAnimal.php");
                break;
                default:
                    print "<div style='display:flex; align-items:center; justify-content: center; height: calc(100vh - 50px);'><h1 style='color:white;'> Pagina inicial </h1></div>";
            }
            ?>
            </div>
        </div>

    </div>

</body>
</html>