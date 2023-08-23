<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">
            <h1>PoKemon</h1>
        </a>

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
                    <input class="form-control me-2" type="text" placeholder="Search" id="buscar2" value="pikachu" aria-label="Search">

                    <button class="btn btn-outline-success" id="buscar" type="submit">Search</button>
                </div>
            </div>
        </nav>
    </div>
    <div class="centro">
    <form method="post" action="{{route('guardarpokemones')}}" >
    @csrf
        <div id="Resultado">
    </form>

        </div>
    </div>
    <br><br><br>
    <center>

            <a href="{{route('pokemonlista')}}"  class="btn btn-warning">Mostrar Pokemones</a>
    </center>
    <br>
</div>
<br>



