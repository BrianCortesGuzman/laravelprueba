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
                <h1>Lista de Pokemones</h1>
            </div>
        </nav>
    </div>
    <br><br>
    <div class="centro">
        <div class="scroll-horizontal ">

            @foreach ($pokemones as $pokemon)

            <br>

            <div class="card" style="width: 20rem;">
                <img src="{{ $pokemon->img }}" class="card-img-top fotopokemon" alt="...">
                <div class="card-body">
                    <h3 class="card-title"> {{ $pokemon->pok_nombre }}</h3>
                    <p class="card-text">#{{ $pokemon->IDpokemon }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Experiencia: {{ $pokemon->pok_experiencia }}</li>

                </ul>
                <li class="list-group-item">
                    Detalles:
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">hp: {{ $pokemon->pok_hp }}</li>
                        <li class="list-group-item">attack:
                            {{ $pokemon->pok_ataque }}
                        </li>
                        <li class="list-group-item">defense: {{ $pokemon->pok_defensa }}</li>
                        <li class="list-group-item">special-attack: {{ $pokemon->pok_Sp_a }}</li>
                        <li class="list-group-item">special-defense: {{ $pokemon->pok_sp_d }}</li>
                        <li class="list-group-item">speed: {{ $pokemon->pok_Speed }}</li>
                    </ul>
                </li>

            </div>

            @endforeach
        </div>
    </div>
    <br><br><br>
</div>
<br><br><br>