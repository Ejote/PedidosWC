<?
echo ("--- Aquí empieza la orden ---");

$leerarchivo = fopen('callback.txt', "r")
    or die ("No puedo abrirlo, bro");

    while (!feof ($leerarchivo))
    {
        $vengase = fgets ($leerarchivo);
        $salto = nL2br ($vengase);
        echo $salto;
    }
<<<<<<< HEAD
    echo ("estás ashí?");

    []
=======
    echo ("----Aquí termina una orden ----");




>>>>>>> c27a76fb9dadef3ce034ad41a5a34d79aa6bcf35
?>