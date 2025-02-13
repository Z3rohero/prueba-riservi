<pre>

<?php

error_reporting(E_ALL); // Si el examen está bien hecho NO debe mostrar ningún Warning ni error de PHP



/**

 * La función debe validar los parámetros, que se detallan debajo, si son válidos, debe generar un array con indices que vayan de iMin a iMax.

 * a los múltiplos de 3 se les debe asociar un string "FOO", a los multiplos de 5 se le debe asociar "BAR", a los múltiplos de 3 y 5 "FOOBAR",

 * al resto debe estar vacio "".

 *

 * No es obligatorio, pero se valorará como un Plus si se utilizan correctamente expresiones regulares para alguna validación.

 * 

 * @param $iMin integer 

 * @param $iMax integer   	

 * @param $aDatos array   	La función debe devolver AQUÍ la respuesta (OBLIGATORIO)

 * @return $bExamen bool 	Devuelve TRUE si: $max es mayor a $min, ambos son ¡numeros ENTEROS de 1 a 3 dígitos! y $aDatos es un ARRAY, y Validar que $aDatos esté VACIO, Sinó devuelve FALSE

 * 

 */



// ************************************ FUNCION A COMPLETAR **************************************** //

function examen($iMin, $iMax, $aDatos) {
    $aValidacion = [];
    $bExamen = true;

    $bValidacionEnteros = is_int($iMax) && is_int($iMin);
    $bValidacionMaximo = $iMax > $iMin;
    $bValidacionLongitud = strlen((string)$iMax) <= 3 && strlen((string)$iMin) <= 3;
    $bValidacionDatosEsArray = is_array($aDatos) && empty($aDatos) ;

    array_push($aValidacion, $bValidacionMaximo, $bValidacionEnteros, $bValidacionDatosEsArray, $bValidacionLongitud);

    if (in_array(false, $aValidacion, true)) {
        $bExamen = false;
		return $bExamen;
    }

    for ($i = $iMin; $i <= $iMax; $i++) {
        switch (true) {
            case ($i % 3 == 0 && $i % 5 == 0):
                $aDatos[$i] = "FOOBAR";
                break;
            case ($i % 3 == 0):
                $aDatos[$i] = "FOO";
                break;
            case ($i % 5 == 0):
                $aDatos[$i] = "BAR";
                break;
            default:
                $aDatos[$i] = "";
        }
    }

    return $aDatos;
}



// ******************************** FIN DE LA FUNCION A COMPLETAR ********************************** //











// *********************** NO MODIFICAR (Comienzo del Test de la función) ************************** //



// El objetivo de esta función es condicionar el examen para limitar las posibles resoluciones y probar el conocimiento de determinados conceptos.

// Cuando complete la función de Arriba debe tener en cuenta que será llamada en diferentes casos de prueba como los que están debajo.

// Si la función examen está correctamente implementada, el test de la función debe mostrar en algunos casos un array con los valores FOO Y BAR, y en otros un error porque los parámetros no cumplen con los requisitos.





// CASO DE PRUEBA 1

$aDatos1 = array();

$iMin = 1;

$iMax = 30;

$bExamen = FALSE;



$bExamen = examen($iMin, $iMax, $aDatos1);



if($bExamen){

	echo "Caso de prueba 1:\n";

	print_r($aDatos1);

	echo "\n";

} else {

	echo "\nEl caso de Prueba 1 no se ha procesado porque los parámetros no cumplen con los requisitos.";	

}





// CASO DE PRUEBA 2

$aDatos2 = NULL;

$iMin = 60;

$iMax = 90;

$bExamen = TRUE;



$bExamen = examen($iMin, $iMax, $aDatos2);



if($bExamen){

	echo "\nCaso de prueba 2:\n";

	print_r($aDatos2);

	echo "\n";

} else {

	echo "\nEl caso de Prueba 2 no se ha procesado porque los parámetros no cumplen con los requisitos.";	

}



// CASO DE PRUEBA 3

$aDatos3 = array();

$iMin = "60";

$iMax = "90";

$bExamen = TRUE;



$bExamen = examen($iMin, $iMax, $aDatos3);



if($bExamen){

	echo "\nCaso de prueba 3:\n";

	print_r($aDatos3);

	echo "\n";

} else {

	echo "\nEl caso de Prueba 3 no se ha procesado porque los parámetros no cumplen con los requisitos.";	

}



// CASO DE PRUEBA 4

$aDatos4 = array();

$iMin = 12.51;

$iMax = 30.92;

$bExamen = NULL;



$bExamen = examen($iMin, $iMax, $aDatos4);



if($bExamen){

	echo "\nCaso de prueba 4:\n";

	print_r($aDatos4);

	echo "\n";

} else {

	echo "\nEl caso de Prueba 4 no se ha procesado porque los parámetros no cumplen con los requisitos.";	

}



// CASO DE PRUEBA 5

$aDatos5 = array();

$iMin = 999;

$iMax = 1029;

$bExamen = FALSE;



$bExamen = examen($iMin, $iMax, $aDatos5);



if($bExamen){

	echo "\nCaso de prueba 5:\n";

	print_r($aDatos5);

	echo "\n";

} else {

	echo "\nEl caso de Prueba 5 no se ha procesado porque los parámetros no cumplen con los requisitos.";	

}



// CASO DE PRUEBA 6

$aDatos6 = array();

$iMin = 90;

$iMax = 120;

$bExamen = TRUE;



$bExamen = examen($iMin, $iMax, $aDatos6);



if($bExamen){

	echo "\nCaso de prueba 6:\n";

	print_r($aDatos6);

	echo "\n";

} else {

	echo "\nEl caso de Prueba 6 no se ha procesado porque los parámetros no cumplen con los requisitos.";	

}









// *********************** NO MODIFICAR (FIN del Test de la función) ************************** //











?>



</pre>
















