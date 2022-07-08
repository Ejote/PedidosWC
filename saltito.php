<?
echo ("--- Aquí empieza la orden ---")
$leerarchivo = fopen('callback.txt', "r")
    or die ("No puedo abrirlo, bro");

    while (!feof ($leerarchivo))
    {
        $vengase = fgets ($leerarchivo);
        $salto = nL2br ($vengase);
        echo $salto;
    }
    echo ("----Aquí termina una orden ----");




?>