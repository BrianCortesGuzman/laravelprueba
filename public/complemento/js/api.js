const buscar2 = document.getElementById("buscar2");
const buscar = document.getElementById("buscar");
const Resultado = document.getElementById("Resultado");
function getRandomPokemonNumber() {
    return Math.floor(Math.random() * 20) + 1;
}

function getRandomPokemon() {
    const randomPokemonNumber = getRandomPokemonNumber();
    const url = buildUrl(randomPokemonNumber);

    fetch(url)
        .then((response) => response.json())
        .then((data) => {
            const contentToDisplay = createCharacterCard(data);
            Resultado.innerHTML = contentToDisplay;
        })
        .catch((error) => {
            console.error("Error:", error);
            Resultado.innerHTML =
                "Ocurrió un error al obtener los datos del Pokemon.";
        });
}

buscar.addEventListener("click", () => {
    const Buscardor = buscar2.value.trim();

    if (!Buscardor) {
        Resultado.innerHTML = "Nombre no válido.";
        return;
    }
    const url = buildUrl(Buscardor);
    fetch(url)
        .then((response) => response.json())
        .then((data) => {
            if (data.error) {
                Resultado.innerHTML = "Pokemon no encontrado.";
                return;
            }
            const contentToDisplay = createCharacterCard(data);
            Resultado.innerHTML = contentToDisplay;
        })
        .catch((error) => {
            console.error("Error:", error);
            Resultado.innerHTML =
                "Ocurrió un error al obtener los datos del Pokemon.";
        });
});

setInterval(getRandomPokemon, 5000);
function buildUrl(Buscardor) {
    return `https://pokeapi.co/api/v2/pokemon/${Buscardor}`;
}
//-------------------------------------------------------------------------------
function createCharacterCard(character) {
  const statsListform = character.stats;
  const statsHTMLfor = statsListform
      .map((statData) => {
          return `<input type="hidden" name="${statData.stat.name}" value="${statData.base_stat}" class="list-group-item"></input>`;
      })
      .join("");

    const statsList = character.stats;
    const statsHTML = statsList
        .map((statData) => {
            return `<li class="list-group-item">${statData.stat.name}: ${statData.base_stat}</li>`;
        })
        .join("");
    //-------------------------------------------------------------------------------
    return `
    <br/>
    <div class="card" style="width: 20rem;">
    <img src="${character.sprites.other.dream_world.front_default}"
        class="card-img-top fotopokemon" alt="...">
    <div class="card-body">
        <h3 class="card-title"> ${character.name}</h3>
        <p class="card-text">#${character.id} </p>
    </div>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Experiencia:  ${character.base_experience}</li>
    
    </ul>
    <li class="list-group-item"> 
    Detalles: 
    <ul class="list-group list-group-flush">
      ${statsHTML}
    </ul>
  </li>
  
  <input type="hidden" name="img" value="${character.sprites.other.dream_world.front_default}">
<input type="hidden" name="nombre" value="${character.name}">
<input type="hidden" name="idpokemon" value="${character.id}">
<input type="hidden" name="experiencia" value="${character.base_experience}">
${statsHTMLfor}

<center> <input type="submit" value="Guardar Pokemon" class="btn btn-success"></center>

</div>



    `;
}
