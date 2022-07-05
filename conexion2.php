<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // fetch RAW input
    $json = file_get_contents('php://input');

    // decode json
    $object = json_decode($json);
    //$respuestajson = json_encode ($object);

    // expecting valid json
    if (json_last_error() !== JSON_ERROR_NONE) {
        die(header('HTTP/1.0 415 Unsupported Media Type'));
    }

    /**
     * Do something with object, structure will be like:
     * $object->accountId
     * $object->details->items[0]['contactName']
     */
    // dump to file so you can see
    file_put_contents('callback.txt', print_r($object, true));
    file_put_contents('respuesta.json', print_r($object, true));
    
  
    $leerarchivo = fopen('callback.txt', 'r')
    or die ("No puedo abrirlo bro");

    while (!feof ($leerarchivo))
    {
        $vengase = fgets ($leerarchivo);
        $salto = nl2br ($vengase);
        echo $salto;
    }
  
   
    
 

    /*function direccion ($datosenvio)
    {
        
    }*/


}
?>

