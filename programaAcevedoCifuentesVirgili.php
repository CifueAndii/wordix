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
    $coleccionPartidas[5] = ["palabraWordix" => "HUEVO", "jugador" => "frodo", "intentos" => 1,"puntaje" => 13];
    $coleccionPartidas[6] = ["palabraWordix" => "CEBRA", "jugador" => "juan", "intentos" => 0,"puntaje" => 0];
    $coleccionPartidas[7] = ["palabraWordix" => "MELON", "jugador" => "rosa", "intentos" => 5,"puntaje" => 11];
    $coleccionPartidas[8] = ["palabraWordix" => "PERRO", "jugador" => "pink2000", "intentos" => 1,"puntaje" => 17];
    $coleccionPartidas[9] = ["palabraWordix" => "VERDE", "jugador" => "majo", "intentos" => 3,"puntaje" => 14];
    return $coleccionPartidas;
}

/**
 * Dado un número de partida, muestra sus datos
 * @param array $coleccionDePartidas
 * @return string
*/
function mostrarDatosPartida($coleccionDePartidas) {
    $n = count($coleccionDePartidas);
    $i = 0;
    echo "Ingrese el número de partida: ";
    $numeroUsuario = trim(fgets(STDIN));
    while (!is_numeric($numeroUsuario) || $numeroUsuario == 0 || $numeroUsuario > $n || $numeroUsuario % 2 != 0) {
        if ($numeroUsuario > $n) {
            echo "El número de partida que busca no existe, ingrese otro: ";
            $numeroUsuario = trim(fgets(STDIN));
        } else {
            echo "Debe ingresar un número de partida válido: ";
            $numeroUsuario = trim(fgets(STDIN));
        }
    }

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

/**
 * Muestra coleccion de partidas ordenada por palabra y jugador
 * @param array $coleccionDePartidas
 */
function ordenarPalabraJugador($coleccionDePartidas) {
    function cmp($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }

    uasort($coleccionDePartidas, 'cmp');
    print_r($coleccionDePartidas);

}

/* ... COMPLETAR ... */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
