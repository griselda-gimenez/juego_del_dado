<?php
    sleep(1);//simula una pequeña demora (en este caso es de 1 seg.) como si se estuviera procesando algo.
    $sorteo=rand(1,6);
    echo str_pad($sorteo, 2, "0", STR_PAD_LEFT);
    /*str_pad(): esta función se usa para agregar caracteres, en este caso"0", a una cadena hasta que tenga la longitud deseada.
    ($sorteo: es el valor que queremos formatear;
    2: es la longitud que queremos, en este caso se especifica que el resultado debe tener 2 caracteres;
    "0": este cero es el caracter que se agregará a $sorteo;
    STR_PAD_LEFT: indica que el caracter 0 se agregará a la izquierda de la cadena. 
    Ejemplo del resultado obtenido: 01 en vez de 1 */



?>