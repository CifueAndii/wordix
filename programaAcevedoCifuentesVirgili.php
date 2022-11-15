<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* Apellido, Nombre: Cifuentes Flores Andrés Emanuel. Legajo: FAI-2258. Carrera: Tecnicatura en Desarrollo Web. mail: andres.cifuentes@est.fi.uncoma-edu.ar. Usuario Github: CifueAndii */
/* Apellido, Nombre: Acevedo Candela Mia. Legajo: FAI-4444. Carrera: Tecnicatura en Desarrollo Web. mail: candela.acevedo@est.fi.uncoma-edu.ar. Usuario Github: acevedocan*/
/* Apellido, Nombre: Virgili Florencia Rocío. Legajo: FAI-4410. Carrera: Tecnicatura en Desarrollo Web. mail: florencia.virgili@est.fi.uncoma.edu.ar . Usuario Github: FlorenicaVirgili */



/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

//PUNTO 1

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "PERRO", "GORRA", "AGUAS", "CASCO", "CEBRA",
        "ARBOL", "HIELO", "MARCO", "LIBRO", "SALTO",
    ];

    return ($coleccionPalabras);
}

//PUNTO 2

/**
 * Carga coleccion de 10 partidas de Wordix
 * @return array
 */
function cargarPartidas() {
    $coleccionPartidas = [];
    $coleccionPartidas[0] = ["palabraWordix" => "QUESO", "jugador" => "majo", "intentos" => 0,"puntaje" => 0];
    $coleccionPartidas[1] = ["palabraWordix" => "CASAS", "jugador" => "rudolf", "intentos" => 3,"puntaje" => 14];
    $coleccionPartidas[2] = ["palabraWordix" => "QUESO", "jugador" => "ana", "intentos" => 6,"puntaje" => 12];
    $coleccionPartidas[3] = ["palabraWordix" => "MELON", "jugador" => "pepe", "intentos" => 2,"puntaje" => 14];
    $coleccionPartidas[4] = ["palabraWordix" => "FUEGO", "jugador" => "majo", "intentos" => 4,"puntaje" => 12];
    $coleccionPartidas[5] = ["palabraWordix" => "HUEVO", "jugador" => "frodo", "intentos" => 1,"puntaje" => 16];
    $coleccionPartidas[6] = ["palabraWordix" => "CEBRA", "jugador" => "juan", "intentos" => 0,"puntaje" => 0];
    $coleccionPartidas[7] = ["palabraWordix" => "MELON", "jugador" => "rosa", "intentos" => 5,"puntaje" => 11];
    $coleccionPartidas[8] = ["palabraWordix" => "PERRO", "jugador" => "pink2000", "intentos" => 1,"puntaje" => 17];
    $coleccionPartidas[9] = ["palabraWordix" => "VERDE", "jugador" => "majo", "intentos" => 3,"puntaje" => 14];
    return $coleccionPartidas;
}

//PUNTO 3

/**
 * Muestra un menu de opciones para jugar al wordix, y retorna el numero de la opcion elegida
 * @return int
 *    */
function seleccionarOpcion(){
    /* int $opc*/
    
    echo "Seleccione una opcion del menu: \n";
    echo " ____________________________________________________________________________\n";
    echo "|                              Menu de Opciones:                             |\n";
    echo "|                 1) Jugar al Wordix con una palabra elegida                 |\n";
    echo "|                2) Jugar al Wordix con una palabra aleatoria                |\n";
    echo "|                           3) Mostrar una partida                           |\n";
    echo "|                    4) Mostrar la primer partida ganadora                   |\n";
    echo "|                       5) Mostrar resumen del Jugador                       |\n";
    echo "|     6) Mostrar listado de partidas ordenadas por jugador y por palabra     |\n";
    echo "|                 7) Agregar una palabra de 5 letras a Wordix                |\n";
    echo "|                                  8) Salir                                  |\n";
    echo "|____________________________________________________________________________|\n";
                   
    echo "Opcion (1 al 8): ";

    $opc = solicitarNumeroEntre(1,8);
 
    return $opc;
}

//PUNTO 4
//Ya se encuentra el el wordix.php

//PUNTO 5

//Ya está en el PUNTO 3

//PUNTO 6

/**
 * Dado un número de partida, muestra sus datos
 * @param array $coleccionDePartidas
*/
function mostrarDatosPartida($coleccionDePartidas) {
    $n = count($coleccionDePartidas);
    $i = 0;
    $numeroUsuario = solicitarNumeroEntre(1, $n);
    $numeroEncontrado = 0;
    $numeroUsuario--;
    while ($i < $n && $numeroEncontrado == 0) {
        if ($i == $numeroUsuario) {
            $numeroUsuario++;
            echo "**********************************\n";
            echo "Partida WORDIX " . $numeroUsuario . ": palabra " . $coleccionDePartidas[$i]["palabraWordix"] . "\n";
            echo "Jugador: " . $coleccionDePartidas[$i]["jugador"] . "\n";
            echo "Puntaje: " . $coleccionDePartidas[$i]["puntaje"] . "\n";
            if ($coleccionDePartidas[$i]["intentos"] != 0) {
                echo "Adivinó la palabra en " . $coleccionDePartidas[$i]["intentos"] . " intentos\n";
            } else {
                echo "No adivinó la palabra\n";
            }
            echo "**********************************\n";
            $numeroEncontrado++;
        }
        $i++;
    }
}

//PUNTO 7

/**
 * Agrega una palabra a la coleccionPalabra
 * @param string $nuevaPalabra
 * @param array $colecionPalabras
 * @return array
 */

function agregarPalabra ($nuevaPalabra , $coleccionPalabras){

    $j = 0;
    $n = count($coleccionPalabras);
    while ($j < $n){
        if ($coleccionPalabras[$j] == $nuevaPalabra){
            echo "Esta palabra ya está en el juego";
            $nuevaPalabra = trim(fgets(STDIN));
            $j = -1 ;
    
        }
        $j++ ;
    }
   
    $coleccionPalabras[$n]= $nuevaPalabra;
    return ($coleccionPalabras);
    
  
}

//PUNTO 8

/**
* obtiene el indice  de la primera partida ganada por un jugador que elige el usuario
* @param array $arregloPartidas
* @param string $nombre
* @return int
*/
function primeraPartidaGanada($arregloPartidas,$nombre){
    /* int $i, $n, $indice
       boolean $encontrado */
    $i = 0;
    $n = count($arregloPartidas);
    $encontrado = false;
    $indice = -1;
   
   while($i<$n && !$encontrado){
        if(($arregloPartidas[$i]["jugador"] == $nombre)&&($arregloPartidas[$i]["puntaje"]>0)){
            $indice = $i;
            $encontrado = true;
        }else{
            $i++;
        }
   }
    return $indice;
   }

//PUNTO 9

/**
 * Retorna el resumen de un jugador
 * @param array $coleccionPartidas
 * @param string $nombreJugador
 * @return array
 */
function resumenJugador ($coleccionPartidas, $nombreJugador){
    $cantPartidas = 0;
    $puntaje = 0;
    $victorias = 0;
    $intento1 = 0;
    $intento2 = 0;
    $intento3 = 0;
    $intento4 = 0;
    $intento5 = 0;
    $intento6 = 0;
    $cont = count($coleccionPartidas);
    $i = 0;
    while ($i <= $cont){
        if ($coleccionPartidas[$i]["jugador"] == $nombreJugador){
            $cantPartidas = $cantPartidas + 1;
            if ($coleccionPartidas[$i]["puntaje"] > 0){
                $puntaje = $puntaje + $coleccionPartidas[$i]["puntaje"];
                $victorias = $victorias + 1;
                $intento = $coleccionPartidas[$i]["intentos"];
                switch ($intento){
                    case 1:
                        $intento1 = $intento1 + 1;
                        break;
                    case 2:
                        $intento2 = $intento2 + 1;
                        break;
                    case 3:
                        $intento3 = $intento3 + 1;
                        break;
                    case 4:
                        $intento4 = $intento4 + 1;
                        break;
                    case 5:
                        $intento5 = $intento5 + 1;
                        break;
                    case 6:
                        $intento6 = $intento6 + 1;
                        break;
                }
            }
            
        }
        $i++;
    }    
        

    $resumenJugador = ["jugador" => $nombreJugador, "partidas" => $cantPartidas , "puntaje" => $puntaje , "victorias" => $victorias, "intento1" => $intento1 , "intento2" => $intento2 , "intento3" => $intento3 , "intento4" => $intento4 , "intento5" => $intento5 , "intento6" => $intento6];
    return $resumenJugador;
}

//PUNTO 10

/**
* devuelve el nombre de un jugador en minuscula
* @return string
*/
function solicitarJugador(){
    /* string $jugador
       boolean $nombreValido */
       
    $nombreValido = false;
   
    while(!$nombreValido){
        echo "Ingrese el nombre de un jugador (Tiene que comenzar con una letra): ";
        $jugador = trim(fgets(STDIN));
   
        if(ctype_alpha($jugador[0])){
            $jugador = strtolower($jugador);
            $nombreValido = true;
        }
    }
    return $jugador;
       
   }
   
//PUNTO 11
/*La función predefinida uasort ordena un array con una función creada por el usuario,
manteniendo la asociación de indices. Toma como parametros el array a ordenar y 
la función del usuario, siendo esta una función de retrollamada o callback.
Retorna true en caso de éxito o false si ocurre un error. */
/* La función predefinida print_r imprime información en un formato más legible
y ordenado. Toma como parametros la expresión a imprimir y un valor booleano
opcional que al establecer como true hace que print_r devuelva la información en vez
de imprimirla. En el caso de los arrays, el formato impreso muestra 
las claves y los elementos.*/

/**
 * Muestra coleccion de partidas ordenada por jugador y después palabra
 * @param array $coleccionDePartidas
*/
function ordenarJugadorPalabra($coleccionDePartidas) {
    $n = count($coleccionDePartidas);
    $nuevoOrden = ['jugador', 'palabraWordix', 'intentos', 'puntaje'];
    $resultado = [];
    for($i = 0; $i < $n; $i++) {
        foreach ($nuevoOrden as $clave) {
            $resultado[$clave] = $coleccionDePartidas[$i][$clave];
        }
        $coleccionDePartidas[$i] = $resultado;
    }
    function cmp($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }

    uasort($coleccionDePartidas, 'cmp');
    print_r($coleccionDePartidas);

}

//Modulos extras del programa principal
/**
 * Agrega una partida a la coleccionPartidas
 * @param array $partidaNueva
 * @param array $coleccionPartidas
 * @return array
 */

function agregarPartida ($partidaNueva, $coleccionPartidas){
    $n = count($coleccionPartidas);
    $coleccionPartidas[$n]= $partidaNueva;
    return ($coleccionPartidas);
}

/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
/* int $opcion, $numPalabra, $n
   array $arregloPalabras, $arregloPartidas
   string $nombreJugador, $palabraNueva */
       

//Inicialización de variables:
 $arregloPartidas = cargarPartidas();
 $arregloPalabras = cargarColeccionPalabras();
 $n = count($arregloPartidas);
 $i = 0;
//Proceso:

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);




do {
    $opcion = seleccionarOpcion();
    
    switch ($opcion) {
        case 1: 
            $nombreJugador = solicitarJugador();
            echo "Ingrese un numero de palabra para jugar: ";
            $numPalabra = solicitarNumeroEntre(1,count($arregloPalabras));
            $aux = $numPalabra;
            $numPalabra--;
            while($i<$n){
                if(($nombreJugador==$arregloPartidas[$i]["jugador"])&&($arregloPartidas[$i]["palabraWordix"]==$arregloPalabras[$numPalabra])){
                    echo "La palabra " . $aux . " ya la jugaste " . $nombreJugador . "!!!\n";
                    echo "Ingrese otro numero de palabra para jugar: ";
                    $numPalabra = trim(fgets(STDIN));
                    $aux = $numPalabra;
                    $numPalabra--;
                    $i = 0;
                }else{
                    $i++;
                }
            }
            echo "La palabra " . $aux . " esta disponible para jugar\n";
            $nuevaPartida = jugarWordix($arregloPalabras[$numPalabra],$nombreJugador);
            $arregloPartidas = agregarPartida($nuevaPartida,$arregloPartidas);
            break;
        case 2: 
            $nombreJugador = solicitarJugador();
            $numPalabra = array_rand($arregloPalabras);
            if($numPalabra != 0){
                $numPalabra--;
            }
            
            while($i<$n){
                if(($nombreJugador==$arregloPartidas[$i]["jugador"])&&($arregloPartidas[$i]["palabraWordix"]==$arregloPalabras[$numPalabra])){
                    echo "La palabra aleatoria ya la jugaste " . $nombreJugador . "!!!\n";
                    echo "Te damos otra palabra \n ";
                    $numPalabra = array_rand($arregloPalabras);
                    $numPalabra--;
                    $i = 0;
                }else{
                    $i++;
                }
            }
            echo "La palabra aleatoria esta disponible para jugar\n";
            $nuevaPartida = jugarWordix($arregloPalabras[$numPalabra],$nombreJugador);
            $arregloPartidas = agregarPartida($nuevaPartida,$arregloPartidas);
            break;
        case 3: 
            echo "Ingrese el número de partida: ";
            $numeroUsuario = solicitarNumeroEntre(1, $n);
            mostrarDatosPartida($arregloPartidas, $numeroUsuario);

            break;
        case 4: 
            $nombreJugador = solicitarJugador();
            $jugadorExiste = false;
            while ($i < $n && !$jugadorExiste) {
                if ($arregloPartidas[$i]['jugador'] == $nombreJugador) {
                    $jugadorExiste = true;
                }
                $i++;
            }
            if ($jugadorExiste) {
                $indice = primeraPartidaGanada($arregloPartidas, $nombreJugador);
                if ($indice != -1) {
                    $indice = $indice + 1;
                    mostrarDatosPartida($arregloPartidas, $indice);
                } else {
                    echo "El jugador " . $nombreJugador . " no ganó ninguna partida.\n";
                }
            } else {
                echo "No existe el jugador.";
            }
    
            break;
        case 5: 
            $nombreJugador = solicitarJugador();
            $coleccionPartidas = $arregloPartidas;
            $mostrarResumen = resumenJugador($coleccionPartidas , $nombreJugador);
            $porcentaje = ($mostrarResumen["victorias"] * 100) / $mostrarResumen["partidas"];
            echo "*********************************************\n";
            echo "Jugador: " . $mostrarResumen["jugador"] . "\n";
            echo "Partidas: " . $mostrarResumen["partidas"] . "\n";
            echo "Puntaje Total: " . $mostrarResumen["puntaje"] . "\n";
            echo "Victorias: " . $mostrarResumen["victorias"] . "\n";
            echo "Porcentaje Victorias: " . $porcentaje . "\n"; 
            echo "Adivinadas: \n";
            echo "           Intento 1: " . $mostrarResumen["intento1"] . "\n";
            echo "           Intento 2: " . $mostrarResumen["intento2"] . "\n";
            echo "           Intento 3: " . $mostrarResumen["intento3"] . "\n";
            echo "           Intento 4: " . $mostrarResumen["intento4"] . "\n";
            echo "           Intento 5: " . $mostrarResumen["intento5"] . "\n";
            echo "           Intento 6: " . $mostrarResumen["intento6"] . "\n";
            echo "*********************************************\n";
    
            break;
        case 6: 
            
            echo ordenarJugadorPalabra($arregloPartidas);
    
            break;
        case 7: 
            $palabraNueva = leerPalabra5Letras();
            $arregloPalabras = agregarPalabra($palabraNueva,$arregloPalabras);
            break;
    }
} while ($opcion != 8);
