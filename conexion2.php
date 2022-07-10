<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // fetch RAW input
   $json = file_get_contents('php://input');

    // decode json
    $object = json_decode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
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

$nombre = $object [billing][first_name];
$apellido = $object [billing][last_name];
$direccion = $object [shipping][address_1];
$direccion2 = $object [shipping][address_2];
$ciudad = $object [shipping][city];
$estado = $object [shipping][state];
$cp = $object [shipping][postcode];
$pais = $object [shipping][country];
$OC = $object [id];
$SKU = $object [line_items][0][sku];
$cantidad = $object [line_items][0][quantity];
$completa = [$nombre, $apellido, $direccion, $direccion2, $ciudad, $estado, $cp, $pais];
$contador = 0;

file_put_contents('pruebadatos.json', print_r($completa, true));
    file_put_contents('callback.txt', print_r($object, true));
    file_put_contents('respuesta.json', print_r($object, true));

<<<<<<< HEAD
    $datos = '<data>
    <Usuario>xxxx</Usuario>
    <Contrasena>xxxxx</Contrasena>
                    <OC>
                    <NumeroOC>'.$OC.'</NumeroOC>
                    <DireccionEntrega>'.$completa.'</DireccionEntrega>
                    <Paqueteria>000</Paqueteria>
                    <!--<CodigoSucursal>GDL</CodigoSucursal>-->
                    <CodigoSucursal>CEDIS</CodigoSucursal>
                    <FormaPago>Credito30</FormaPago>
                    <PedidoParcial>N</PedidoParcial>
                    <Observaciones>Cliente recoge</Observaciones>
                    <Productos>
                        <Producto>
                            <CodigoProductoAC>'.$SKU.'</CodigoProductoAC>
                            <Cantidad>'.$cantidad.'</Cantidad>
                        </Producto>
                    </Productos>
                </OC>
                   
              </data>';
    
    $Ejo = curl_init();
    $url = 'xxxx';
    curl_setopt($Ejo, CURLOPT_URL, $url);
    curl_setopt($Ejo, CURLOPT_HTTPHEADER, array('Content-Type: application/xml','Accept: application/xml'));
    curl_setopt($Ejo, CURLOPT_POST, 1);
    curl_setopt($Ejo, CURLOPT_POSTFIELDS,$datos);
    curl_setopt($Ejo, CURLOPT_RETURNTRANSFER, true);
    $respuesta  = curl_exec($Ejo);
    
    if($respuesta === false){
        echo 'Curl error: ' . curl_error($Ejo);
        file_put_contents('respuestArroba.txt', print_r($respuesta, true));
    }
    else{
     
      echo "<pre> $respuesta";
      file_put_contents('respuestArroba.txt', print_r($respuesta, true));
      If (unlink('respuesta.json')) {
        echo "El archivo respuesta.json ha sido eliminado";
      } else {
        echo "Bro, se resistió, no pudimos eliminarlo";
      }
=======
    $data = file_get_contents ('respuesta.json');
        $jsontwo = json_encode($data, true);
        $Nombre = $jsontwo ['billing']['first_name'];
   
    /*function direccion ($datosenvio)
    {
>>>>>>> c27a76fb9dadef3ce034ad41a5a34d79aa6bcf35
        
    
    
      }
    curl_close($Ejo); 
       
   

}
?>

