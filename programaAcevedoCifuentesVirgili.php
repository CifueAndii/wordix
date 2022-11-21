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
function cargarColeccionPalabras(){
    /* array $coleccionPalabras */
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
    /* array $coleccionPartidas */
    $coleccion = [];
$pa1 = ["palabraWordix" => "SUECO", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
$pa2 = ["palabraWordix" => "YUYOS", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
$pa3 = ["palabraWordix" => "HUEVO", "jugador" => "zrack", "intentos" => 3, "puntaje" => 9];
$pa4 = ["palabraWordix" => "TINTO", "jugador" => "cabrito", "intentos" => 4, "puntaje" => 8];
$pa5 = ["palabraWordix" => "RASGO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
$pa6 = ["palabraWordix" => "VERDE", "jugador" => "cabrito", "intentos" => 5, "puntaje" => 7];
$pa7 = ["palabraWordix" => "CASAS", "jugador" => "kleiton", "intentos" => 5, "puntaje" => 7];
$pa8 = ["palabraWordix" => "GOTAS", "jugador" => "kleiton", "intentos" => 0, "puntaje" => 0];
$pa9 = ["palabraWordix" => "ZORRO", "jugador" => "zrack", "intentos" => 4, "puntaje" => 8];
$pa10 = ["palabraWordix" => "GOTAS", "jugador" => "cabrito", "intentos" => 0, "puntaje" => 0];
$pa11 = ["palabraWordix" => "FUEGO", "jugador" => "cabrito", "intentos" => 2, "puntaje" => 10];
$pa12 = ["palabraWordix" => "TINTO", "jugador" => "briba", "intentos" => 0, "puntaje" => 0];
array_push($coleccion, $pa1, $pa2, $pa3, $pa4, $pa5, $pa6, $pa7, $pa8, $pa9, $pa10, $pa11, $pa12);
return $coleccion;

    
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
 * @param int $numPartida
 * @param array $coleccionPartidas
*/
function mostrarDatosPartida($numPartida, $coleccionPartidas) {
    // int $n, $i
    // boolean $numeroEncontrado
    $n = count($coleccionPartidas);
    $i = 0;
    $numeroEncontrado = false;
    $numPartida--;
    while ($i < $n && !$numeroEncontrado) {
        if ($i == $numPartida) {
            $numPartida++;
            echo "**********************************\n";
            echo "Partida WORDIX " . $numPartida . ": palabra " . $coleccionPartidas[$i]["palabraWordix"] . "\n";
            echo "Jugador: " . $coleccionPartidas[$i]["jugador"] . "\n";
            echo "Puntaje: " . $coleccionPartidas[$i]["puntaje"] . "\n";
            if ($coleccionPartidas[$i]["intentos"] != 0) {
                echo "Adivinó la palabra en " . $coleccionPartidas[$i]["intentos"] . " intentos\n";
            } else {
                echo "No adivinó la palabra\n";
            }
            echo "**********************************\n";
            $numeroEncontrado = true;
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

function agregarPalabra ($nuevaPalabra,$coleccionPalabras){
    /* int $j, $n */
    $j = 0;
    $n = count($coleccionPalabras);
    while ($j < $n){
        if ($coleccionPalabras[$j] == $nuevaPalabra){
            echo "Esta palabra ya está en el juego!!!\n";
            $nuevaPalabra = leerPalabra5Letras();
            $j = 0;
    
        }else{
            $j++;
        }
    }
    echo "Has agregado una palabra al juego! \n ";
   
    $coleccionPalabras[count($coleccionPalabras)]= $nuevaPalabra;
    return ($coleccionPalabras);
}

//PUNTO 8

/**
* obtiene el indice  de la primera partida ganada por un jugador que elige el usuario
* @param array $coleccionPartidas
* @param string $nombre
* @return int
*/
function primeraPartidaGanada($coleccionPartidas,$nombre){
    /* int $i, $n, $indice
       boolean $encontrado */
    $i = 0;
    $n = count($coleccionPartidas);
    $encontrado = false;
    $indice = -1;
   
   while($i<$n && !$encontrado){
        if(($coleccionPartidas[$i]["jugador"] == $nombre)&&($coleccionPartidas[$i]["puntaje"]>0)){
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
    /* int $cantPartidas, $puntaje, $victorias, $intento1, $intento2, $intento3, $intento4
           $intento5, $intento6, $cont, $i 
       array $resumenJugador */
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
    while ($i < $cont){
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
    // int $n, $i
    // array $nuevoOrden, $resultado
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
    /* int $n */
    $n = count($coleccionPartidas);
    $coleccionPartidas[$n]= $partidaNueva;
    return ($coleccionPartidas);
}

/**
 * verifica si un jugador ya jugó una partida con una palabra
 * @param array $partidas
 * @param array $palabras
 * @param string $jugador
 * @param int $numPal
 * @return boolean
 */
function esPalabraJugada($partidas,$palabras,$jugador,$numPal){
    /*int $i
      boolean $yaJugada */
    $i = 0;
    $yaJugada = false;

    while($i<count($partidas) && !$yaJugada){
        if(($jugador==$partidas[$i]["jugador"])&&($partidas[$i]["palabraWordix"]==$palabras[$numPal])){
            $yaJugada = true;
        }else{
            $i++;
        }
    }
    return $yaJugada;
}

/**
 * Verifica que un jugador exista
 * @param string $nombre
 * @param array $arreglo
 * @return boolean
 */

function verificarJugador ($nombre, $arreglo){
    /* bool $jugadorExiste
    int $i */
    $jugadorExiste = false;
    $i = 0;
    while ($i < count($arreglo) && !$jugadorExiste) {
        if ($arreglo[$i]["jugador"] == $nombre) {
            $jugadorExiste = true;
        }
        $i++;
    }
    return $jugadorExiste;
}


/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
/* int $opcion, $numPalabra, $n, $numeroUsuario, $indice
   array $arregloPalabras, $arregloPartidas, $nuevaPartida
   string $nombreJugador, $palabraNueva 
   boolean $jugadorExiste, $palabraJugada */
       

//Inicialización de variables:
 $arregloPartidas = cargarPartidas();
 $arregloPalabras = cargarColeccionPalabras();
 $i = 0;


//Proceso:

do {
    $opcion = seleccionarOpcion();
    
    switch ($opcion) { // SWITCH Corresponde a una estructura de control alternativa multiple
        case 1: 
            $nombreJugador = solicitarJugador();
            echo "Ingrese un numero de palabra para jugar: ";
            $numPalabra = solicitarNumeroEntre(1,count($arregloPalabras));
            $aux = $numPalabra;
            $numPalabra--;
            $palabraJugada = esPalabraJugada($arregloPartidas,$arregloPalabras,$nombreJugador,$numPalabra);

            while($palabraJugada){
                echo "La palabra " . $aux . " ya la jugaste " . $nombreJugador . "!!!\n";
                echo "Ingrese otro numero de palabra para jugar: ";
                $numPalabra = solicitarNumeroEntre(1,count($arregloPalabras));
                $aux = $numPalabra;
                $numPalabra--;
                $palabraJugada = esPalabraJugada($arregloPartidas,$arregloPalabras,$nombreJugador,$numPalabra);       
            }

            echo "La palabra " . $aux . " esta disponible para jugar\n";
            $nuevaPartida = jugarWordix($arregloPalabras[$numPalabra],$nombreJugador);
            $arregloPartidas = agregarPartida($nuevaPartida,$arregloPartidas);
            break;
        case 2: 
            $nombreJugador = solicitarJugador();
            $numPalabra = array_rand($arregloPalabras);
            $palabraJugada = esPalabraJugada($arregloPartidas,$arregloPalabras,$nombreJugador,$numPalabra);

            while($palabraJugada){
                echo "La palabra aleatoria ya la jugaste " . $nombreJugador . "!!!\n";
                echo "Te damos otra palabra \n ";
                $numPalabra = array_rand($arregloPalabras);
                $palabraJugada = esPalabraJugada($arregloPartidas,$arregloPalabras,$nombreJugador,$numPalabra);
            }

            echo "La palabra aleatoria esta disponible para jugar\n";
            $nuevaPartida = jugarWordix($arregloPalabras[$numPalabra],$nombreJugador);
            $arregloPartidas = agregarPartida($nuevaPartida,$arregloPartidas);
            break;
        case 3: 
            echo "Ingrese el número de partida: ";
            $numeroUsuario = solicitarNumeroEntre(1, count($arregloPartidas));
            mostrarDatosPartida($numeroUsuario,$arregloPartidas);
            break;
        case 4: 
            $nombreJugador = solicitarJugador();
            $jugadorExiste = verificarJugador($nombreJugador, $arregloPartidas);
            if ($jugadorExiste) {
                $indice = primeraPartidaGanada($arregloPartidas, $nombreJugador);
                if ($indice != -1) {
                    $indice = $indice + 1;
                    mostrarDatosPartida($indice,$arregloPartidas);
                } else {
                    echo "El jugador " . $nombreJugador . " no ganó ninguna partida.\n";
                }
            } else {
                echo "No existe el jugador.\n";
            }
            break;
        case 5: 
            $nombreJugador = solicitarJugador();
            $jugadorExiste = verificarJugador($nombreJugador, $arregloPartidas);
            if (!$jugadorExiste){
                echo "No existe este jugador.\n";
            }else{
                $mostrarResumen = resumenJugador($arregloPartidas , $nombreJugador);
                $porcentaje = ($mostrarResumen["victorias"] * 100) / $mostrarResumen["partidas"];
                echo "*********************************************\n";
                echo "Jugador: " . $mostrarResumen["jugador"] . "\n";
                echo "Partidas: " . $mostrarResumen["partidas"] . "\n";
                echo "Puntaje Total: " . $mostrarResumen["puntaje"] . "\n";
                echo "Victorias: " . $mostrarResumen["victorias"] . "\n";
                echo "Porcentaje Victorias: " . $porcentaje . " % " . "\n"; 
                echo "Adivinadas: \n";
                echo "           Intento 1: " . $mostrarResumen["intento1"] . "\n";
                echo "           Intento 2: " . $mostrarResumen["intento2"] . "\n";
                echo "           Intento 3: " . $mostrarResumen["intento3"] . "\n";
                echo "           Intento 4: " . $mostrarResumen["intento4"] . "\n";
                echo "           Intento 5: " . $mostrarResumen["intento5"] . "\n";
                echo "           Intento 6: " . $mostrarResumen["intento6"] . "\n";
                echo "*********************************************\n";
            }
    
            break;
        case 6: 
            
            ordenarJugadorPalabra($arregloPartidas);
    
            break;
        case 7: 
            $palabraNueva = leerPalabra5Letras();
            $arregloPalabras = agregarPalabra($palabraNueva,$arregloPalabras);
            break;
    }
} while ($opcion != 8);
