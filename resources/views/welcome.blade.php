<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./complemento/css/style.css">
        <link href="./complemento/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title>pokemon</title>
    </head>
    <body class="fondo">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#"><h1>PoKemon</h1></a>

            </div>
        </nav>
        <br>
        <div class=" container bg-primary   ">

            <div class="centro">
                <img src="./complemento/img/pokemon1.png" alt srcset class="img-fluid">
            </div>
            <div class="centro">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <input class="form-control me-2" type="text"
                                placeholder="Search"
                                id="buscar2"
                                value="pikachu"
                                aria-label="Search">

                            <button class="btn btn-outline-success"
                                id="buscar"
                                type="submit">Search</button>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="centro">
                
                <div id="Resultado">

                </div>
            </div>
            <br>
        </div>
        <br>
        
        <nav class="navbar navbar-expand-lg bg-dark footer ">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#">Hecho por Brian
                    Daniel Cortes Guzman</a>

            </div>
        </nav>
        <script src="./complemento/Bootstrap/js/bootstrap.min.js"></script>
        <script src="./complemento/js/api.js"></script>
    </body>

</html>