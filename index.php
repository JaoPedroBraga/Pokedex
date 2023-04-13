<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>PokeDex</title>
  <link rel="stylesheet" href="./style.css" />
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet" />
  <script src="jquery-3.6.3.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="180x180" href="\pokedex\img\apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="\pokedex\img\favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="\pokedex\img\favicon-16x16.png">
  <link rel="manifest" href="\pokedex\img\site.webmanifest">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
</style>

<body onload="listartodos()">



  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid bg-dark navpokemon">
      <a class="navbar-brand" href="#">
        <img src="\pokedex\img\apple-touch-icon.png" alt="Logo" width="30" height="24"
          class="d-inline-block align-text-top conteudonav">
        <div class="textonav">
          <br>
          <span class="pokedextitulo textnav">Pokedex</span>
        </div>
      </a>
      <div class="col-6 filtrosnav" style="color:white;margin-top: 3%;">
        <div class="row">
          <div class="col-4 itensfiltro">
            <div class="btn-group dropstart">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tipos
              </button>
              <ul class="dropdown-menu">
              <li class="dropdown-item normal" id="normal" onclick="listartipo(this.id)">Normal</li>
              <li class="dropdown-item fighting"id="fighting" onclick="listartipo(this.id)">Lutador</li>
              <li class="dropdown-item flying"id="flying" onclick="listartipo(this.id)">Voador</li>
              <li class="dropdown-item poison"id="poison" onclick="listartipo(this.id)">Veneno</li>
              <li class="dropdown-item ground"id="ground" onclick="listartipo(this.id)">Terrestre</li>
              <li class="dropdown-item rock"id="rock" onclick="listartipo(this.id)">Pedra</li>
              <li class="dropdown-item bug"id="bug" onclick="listartipo(this.id)">Inseto</li>
              <li class="dropdown-item ghost"id="ghost" onclick="listartipo(this.id)">Fantasma</li>
              <li class="dropdown-item steel"id="steel" onclick="listartipo(this.id)">Metal</li>
              <li class="dropdown-item fire"id="fire" onclick="listartipo(this.id)">Fogo</li>
              <li class="dropdown-item water"id="water" onclick="listartipo(this.id)">Água</li>
              <li class="dropdown-item grass"id="grass" onclick="listartipo(this.id)">Planta</li>
              <li class="dropdown-item electric"id="electric" onclick="listartipo(this.id)">Elétrico</li>
              <li class="dropdown-item psychic"id="psychic" onclick="listartipo(this.id)">Psiquico</li>
              <li class="dropdown-item ice"id="ice" onclick="listartipo(this.id)">Gelo</li>
              <li class="dropdown-item dragon"id="dragon" onclick="listartipo(this.id)">Dragão</li>
              <li class="dropdown-item dark"id="dark" onclick="listartipo(this.id)">Escuridão</li>
              <li class="dropdown-item fairy"id="fairy" onclick="listartipo(this.id)">Fada</li>

              </ul>
            </div>
          </div>
          <div class="col-4 itensfiltro">
            Numeração
          </div>
          <div class="col-4 itensfiltro" onclick="listartodos()">
            Todos
          </div>
        </div>
      </div>

  </nav>



  <div class="container">

    <ul data-js="pokedex" class="pokedex"></ul>

    <div class="row" id="listarpokemons">



    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

<script>

  function verificar(tipo) {

    if (tipo == "fire") {
      return "Fogo"
    } else
      if (tipo == "bug") {
        return "Inseto"
      } else
        if (tipo == "dark") {
          return "Escuridão"
        } else
          if (tipo == "dragon") {
            return "Dragão"
          } else
            if (tipo == "fairy") {
              return "Fada"
            } else
              if (tipo == "electric") {
                return "Elétrico"
              } else
                if (tipo == "fighting") {
                  return "Lutador"
                } else
                  if (tipo == "flying") {
                    return "Voador"
                  } else
                    if (tipo == "ghost") {
                      return "Fantasma"
                    } else
                      if (tipo == "grass") {
                        return "Planta"
                      } else
                        if (tipo == "ground") {
                          return "Terrestre"
                        } else
                          if (tipo == "ice") {
                            return "Gelo"
                          } else
                            if (tipo == "normal") {
                              return "Normal"
                            } else
                              if (tipo == "poison") {
                                return "Veneno"
                              } else
                                if (tipo == "psychic") {
                                  return "Psiquico"
                                } else
                                  if (tipo == "rock") {
                                    return "Pedra"
                                  } else
                                    if (tipo == "steel") {
                                      return "Metal"
                                    } else
                                      if (tipo == "water") {
                                        return "Água"
                                      }
  }

  function listartodos() {
    const fetchPokemon = () => {
      const url = "https://pokeapi.co/api/v2/pokemon?limit=1008&offset=0."
      fetch(url)
        .then(response => response.json())
        .then(pokemon => {
          numerolimite = 1008
          console.log(pokemon)
          contador = 1
          contador2 = 0

          for (let index = 0; index < numerolimite; index++) {


            numero = pokemon['results'][index]
            //console.log(numero)  
            nome = pokemon['results'][index]['name']
            nome = nome.replace("-", " ");
            const colocarmaiusculo = nome;
            nome = colocarmaiusculo[0].toUpperCase() + colocarmaiusculo.substring(1);
            npokedex = index + 1
            primeirocard = ""
            if (contador == 1) { primeirocard = "margin-left:4%;" }
            /*if(contador==1){
            jQuery("<div/>", {
              class: "col-1",
            }).appendTo("#listarpokemons");
          }*/
            contador++
            contador2++
            if (contador == 4) { contador = 1 }

            jQuery("<div/>", {
              id: index,
              class: "col-3 cardpokemon",
              style: "text-align: center;background-color:white;border-style:solid;border-width:0.3px;" + primeirocard,
            }).appendTo("#listarpokemons");

            jQuery("<h1/>", {
              text: nome,
              class: "nomepokemon",
            }).appendTo('#' + index);

            jQuery("<div/>", {
              id: "tipospoke" + index,
              class: "row",
              // style: "text-align: center;background-color:white;border-style:solid;border-width:0.3px;",
            }).appendTo('#' + index);

            const url2 = "https://pokeapi.co/api/v2/pokemon/" + npokedex
            fetch(url2)
              .then(response2 => response2.json())
              .then(pokemon2 => {

                tipo = pokemon2['types'][0]['type']['name']
                const tamanho = pokemon2['types']
                //console.log(tamanho.length);
                //console.log(pokemon2)
                //console.log(tipo2)
                //console.log("Mono")
                tipopt = verificar(tipo)

                if (tamanho.length == 1) {
                  jQuery("<div/>", {
                    class: "col-4",

                  }).appendTo("#tipospoke" + index);

                } else {
                  /*jQuery("<div/>", {
                    class: "col-1",
  
                  }).appendTo("#tipospoke" + index);*/
                }
                if (tamanho.length == 1) {
                  jQuery("<div/>", {
                    class: tipo + " tipo col-4",
                    id: "tipo1pokemon" + index,
                    text: tipopt,
                  }).appendTo("#tipospoke" + index);
                }

                if (tamanho.length == 2) {
                  jQuery("<div/>", {
                    class: tipo + " tipo tipo-1 col-4",
                    id: "tipo1pokemon" + index,
                    text: tipopt,
                  }).appendTo("#tipospoke" + index);

                  tipo2 = pokemon2['types'][1]['type']['name']

                  tipo2pt = verificar(tipo2)

                  jQuery("<div/>", {
                    class: tipo2 + " tipo tipo-2 col-4",
                    id: "tipo2pokemon" + index,
                    text: tipo2pt,
                  }).appendTo("#tipospoke" + index);
                }

                if (tamanho.length == 1) {
                  jQuery("<div/>", {
                    class: "col-4",

                  }).appendTo("#tipospoke" + index);

                } else {

                  jQuery("<div/>", {
                    class: "col-2",

                  }).appendTo("#tipospoke" + index);
                }



                jQuery("<table/>", {
                  class: "table",
                  id: 'tablestatuspokemon' + index,
                }).appendTo("#" + index);

                jQuery("<div/>", {
                  class: "row",
                  style:"padding: 0% !important;",
                  id: 'row1pokemon' + index,
                }).appendTo("#tablestatuspokemon" + index);


                jQuery("<div/>", {
                  class: "row",
                  style:"padding: 0% !important;",
                  id: 'row2pokemon' + index,
                }).appendTo("#tablestatuspokemon" + index);


                jQuery("<div/>", {
                  class: "row",
                  style:"padding: 0% !important;",
                  id: 'row3pokemon' + index,
                }).appendTo("#tablestatuspokemon" + index);


                jQuery("<tr/>", {
                  id: 'tr1pokemon' + index,
                }).appendTo('#row1pokemon' + index);

                hpbase = pokemon2['stats'][0]['base_stat']
                jQuery("<th/>", {
                  class: "col-6",
                  id: 'th1pokemon' + index,
                  text: "Hp: " + hpbase,

                }).appendTo('#tr1pokemon' + index);

                spattack = pokemon2['stats'][3]['base_stat']
                jQuery("<th/>", {
                  class: "col-6",
                  id: 'th2pokemon' + index,
                  text: "Sp Attack: " + spattack,

                }).appendTo('#tr1pokemon' + index);

                jQuery("<tr/>", {
                  id: 'tr2pokemon' + index,
                }).appendTo('#row2pokemon' + index);

                attackbase = pokemon2['stats'][1]['base_stat']
                jQuery("<th/>", {
                  class: "col-6",
                  id: 'th3pokemon' + index,
                  text: "Attack: " + attackbase,

                }).appendTo('#tr2pokemon' + index);

                spdefense = pokemon2['stats'][4]['base_stat']
                jQuery("<th/>", {
                  class: "col-6",
                  id: 'th4pokemon' + index,
                  text: "Sp Defense:" + spdefense,

                }).appendTo('#tr2pokemon' + index);

                jQuery("<tr/>", {
                  id: 'tr3pokemon' + index,
                }).appendTo('#row3pokemon' + index);

                defensebase = pokemon2['stats'][2]['base_stat']
                jQuery("<th/>", {
                  class: "col-6",
                  id: 'th5pokemon' + index,
                  text: "Defense: " + defensebase,

                }).appendTo('#tr3pokemon' + index);

                speed = pokemon2['stats'][5]['base_stat']
                jQuery("<th/>", {
                  class: "col-6",
                  id: 'th6pokemon' + index,
                  text: "Speed: " + speed,
                  style: "width:50% !important;",

                }).appendTo('#tr3pokemon' + index);

              })

            jQuery("<img/>", {
              src: "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/" + npokedex + ".png"
            }).appendTo('#' + index);


            //const url2 = "https://pokeapi.co/api/v2/pokemon/" + npokedex
            /*fetch(url2)
              .then(response2 => response2.json())
              .then(pokemon2 => {
   
                jQuery("<table/>", {
                    class: "table",
                    id: 'tablestatuspokemon'+index,
                  }).appendTo(index);
   
   
              })*/
            if (contador2 == 3) { contador2 = 0 } else {
              jQuery("<div/>", {
                class: "col-1 final " + contador2,

              }).appendTo("#listarpokemons");
            }
          };
        })
    }
    fetchPokemon()

  }



  function listartipo(tipo) {
    if (tipo == "normal") {
      ntipo = 1
    } else
      if (tipo == "fighting") {
        ntipo = 2
      } else
        if (tipo == "flying") {
          ntipo = 3
        } else
          if (tipo == "poison") {
            ntipo = 4
          } else
            if (tipo == "ground") {
              ntipo = 5
            } else
              if (tipo == "rock") {
                ntipo = 6
              } else
                if (tipo == "bug") {
                  ntipo = 7
                } else
                  if (tipo == "ghost") {
                    ntipo = 8
                  } else
                    if (tipo == "steel") {
                      ntipo = 9
                    } else
                      if (tipo == "fire") {
                        ntipo = 10
                      } else
                        if (tipo == "water") {
                          ntipo = 11
                        } else
                          if (tipo == "grass") {
                            ntipo = 12
                          } else
                            if (tipo == "electric") {
                              ntipo = 13
                            } else
                              if (tipo == "psychic") {
                                ntipo = 14
                              } else
                                if (tipo == "ice") {
                                  ntipo = 15
                                }
                                else
                                  if (tipo == "dragon") {
                                    ntipo = 16
                                  }
                                  else
                                    if (tipo == "dark") {
                                      ntipo = 17
                                    }
                                    else
                                      if (tipo == "fairy") {
                                        ntipo = 18
                                      }


    const fetchPokemon = () => {
      const url = "https://pokeapi.co/api/v2/type/" + ntipo
      fetch(url)
        .then(response => response.json())
        .then(pokemon => {
          numerolimite = 1008
          console.log(pokemon)
          console.log(valortipo)
          contador = 1
          contador2 = 0

          for (let index = 0; index < numerolimite; index++) {


            numero = pokemon['results'][index]
            //console.log(numero)  
            nome = pokemon['results'][index]['name']
            nome = nome.replace("-", " ");
            const colocarmaiusculo = nome;
            nome = colocarmaiusculo[0].toUpperCase() + colocarmaiusculo.substring(1);
            npokedex = index + 1
            primeirocard = ""
            /*if (contador == 1) { primeirocard = "margin-left:4%;" }
            /*if(contador==1){
            jQuery("<div/>", {
              class: "col-1",
            }).appendTo("#listarpokemons");
          }*/
            contador++
            contador2++
            /*if (contador == 4) { contador = 1 }

            jQuery("<div/>", {
              id: index,
              class: "col-3 cardpokemon",
              style: "text-align: center;background-color:white;border-style:solid;border-width:0.3px;" + primeirocard,
            }).appendTo("#listarpokemons");

            jQuery("<h1/>", {
              text: nome,
              class: "nomepokemon",
            }).appendTo('#' + index);

            jQuery("<div/>", {
              id: "tipospoke" + index,
              class: "row",
              // style: "text-align: center;background-color:white;border-style:solid;border-width:0.3px;",
            }).appendTo('#' + index);*/

            const url2 = "https://pokeapi.co/api/v2/pokemon/" + npokedex
            fetch(url2)
              .then(response2 => response2.json())
              .then(pokemon2 => {

                tipo = pokemon2['types'][0]['type']['name']
                const tamanho = pokemon2['types']
                //console.log(tamanho.length);
                //console.log(pokemon2)
                //console.log(tipo2)
                //console.log("Mono")
                tipopt = verificar(tipo)

                /*if (tamanho.length == 1) {
                  jQuery("<div/>", {
                    class: "col-4",

                  }).appendTo("#tipospoke" + index);

                } else {
                  /*jQuery("<div/>", {
                    class: "col-1",
  
                  }).appendTo("#tipospoke" + index);*/
                /*}*/
                /*if (tamanho.length == 1) {
                  jQuery("<div/>", {
                    class: tipo + " tipo col-4",
                    id: "tipo1pokemon" + index,
                    text: tipopt,
                  }).appendTo("#tipospoke" + index);
                }*/

                /*if (tamanho.length == 2) {
                  jQuery("<div/>", {
                    class: tipo + " tipo tipo-1 col-4",
                    id: "tipo1pokemon" + index,
                    text: tipopt,
                  }).appendTo("#tipospoke" + index);

                  tipo2 = pokemon2['types'][1]['type']['name']

                  tipo2pt = verificar(tipo2)

                  jQuery("<div/>", {
                    class: tipo2 + " tipo tipo-2 col-4",
                    id: "tipo2pokemon" + index,
                    text: tipo2pt,
                  }).appendTo("#tipospoke" + index);
                }

                if (tamanho.length == 1) {
                  jQuery("<div/>", {
                    class: "col-4",

                  }).appendTo("#tipospoke" + index);

                } else {

                  jQuery("<div/>", {
                    class: "col-2",

                  }).appendTo("#tipospoke" + index);
                }*/



                /*jQuery("<table/>", {
                  class: "table",
                  id: 'tablestatuspokemon' + index,
                }).appendTo("#" + index);

                jQuery("<tr/>", {
                  id: 'tr1pokemon' + index,
                }).appendTo('#tablestatuspokemon' + index);

                hpbase = pokemon2['stats'][0]['base_stat']
                jQuery("<th/>", {
                  id: 'th1pokemon' + index,
                  text: "Hp: " + hpbase,

                }).appendTo('#tr1pokemon' + index);

                spattack = pokemon2['stats'][3]['base_stat']
                jQuery("<th/>", {
                  id: 'th2pokemon' + index,
                  text: "Sp Attack: " + spattack,

                }).appendTo('#tr1pokemon' + index);

                jQuery("<tr/>", {
                  id: 'tr2pokemon' + index,
                }).appendTo('#tablestatuspokemon' + index);

                attackbase = pokemon2['stats'][1]['base_stat']
                jQuery("<th/>", {
                  id: 'th3pokemon' + index,
                  text: "Attack: " + attackbase,

                }).appendTo('#tr2pokemon' + index);

                spdefense = pokemon2['stats'][4]['base_stat']
                jQuery("<th/>", {
                  id: 'th4pokemon' + index,
                  text: "Sp Defense: " + spdefense,

                }).appendTo('#tr2pokemon' + index);

                jQuery("<tr/>", {
                  id: 'tr3pokemon' + index,
                }).appendTo('#tablestatuspokemon' + index);

                defensebase = pokemon2['stats'][2]['base_stat']
                jQuery("<th/>", {
                  id: 'th5pokemon' + index,
                  text: "Defense: " + defensebase,

                }).appendTo('#tr3pokemon' + index);

                speed = pokemon2['stats'][5]['base_stat']
                jQuery("<th/>", {
                  id: 'th6pokemon' + index,
                  text: "Speed: " + speed,

                }).appendTo('#tr3pokemon' + index);*/

              })

            /*jQuery("<img/>", {
              src: "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/" + npokedex + ".png"
            }).appendTo('#' + index);*/


            //const url2 = "https://pokeapi.co/api/v2/pokemon/" + npokedex
            /*fetch(url2)
              .then(response2 => response2.json())
              .then(pokemon2 => {
   
                jQuery("<table/>", {
                    class: "table",
                    id: 'tablestatuspokemon'+index,
                  }).appendTo(index);
   
   
              })*/
            /*if (contador2 == 3) { contador2 = 0 } else {
              jQuery("<div/>", {
                class: "col-1 final " + contador2,

              }).appendTo("#listarpokemons");
            }*/
          };
        })
    }
    fetchPokemon()
  }

</script>

</html>