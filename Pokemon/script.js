var formulario = document.querySelector('form')

formulario.addEventListener('submit', function (e){

    e.preventDefault()

    let urlForm = "https://pokeapi.co/api/v2/pokemon/";
    let nome = document.getElementById("name")
    urlForm = urlForm + this.name.value
    urlform = urlForm.toLocaleLowerCase()
    let resposta = document.getElementById('content')

    let html = ''

    fetch(urlForm)
        .then(resposta => resposta.json())
        .then(function(data){
            console.log(data)
            html = 'Nome: ' + maiusculo(data.name) + '<br>'
            html = html + 'Type: ' + maiusculo(data.types[0].type.name)
            resposta.innerHTML = html
            showPokemon(data)
        })
        .catch(function (err){
            if(err == 'SyntaxError: Unexpected token N in JSON at position 0'){
                html = 'Pokémon não encontrado!'
            }else{
                html = 'Erro:' + err
            }
            resposta.innerHTML = html
        })
});

function maiusculo(val) {
    return val[0].toUpperCase() + val.substr(1)
}

let html = ''

function showPokemon(data) {
    let imagem = document.getElementById('imgPokemon')

    imagem.innerHTML ="<img src='"  + data.sprites.front_default + "'><img src='"  + data.sprites.back_default + "'>"

    if ((document.getElementById("shiny").checked)&&(document.getElementById("femea"))){
        imagem.innerHTML ="<img src='"  + data.sprites.front_shiny + "'><img src='"  + data.sprites.back_shiny + "'>"
    }

    if ((document.getElementById("shiny"))&&(document.getElementById("femea").checked)){
        imagem.innerHTML ="<img src='"  + data.sprites.front_female + "'><img src='"  + data.sprites.back_female + "'>"
    }

    if ((document.getElementById("shiny").checked)&&(document.getElementById("femea").checked)){
        imagem.innerHTML ="<img src='"  + data.sprites.front_shiny_female + "'><img src='"  + data.sprites.back_shiny_female + "'>"
    }
}