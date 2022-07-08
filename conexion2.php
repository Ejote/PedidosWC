<?php
header('Content-Type: application/json; charset=utf-8');

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

    print_r ($object);
      
    $Nombre = $object->billing->first_name;
    $Nombre2 = $object ["Billing"]["first_name"];

   
    /*function direccion ($datosenvio)
    {
        
    }*/


}
?>

