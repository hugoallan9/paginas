
<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;


if (move_uploaded_file($_FILES['file']['tmp_name'], '/var/www/archivos/ipc_csv.xlsx'))
{
    echo "El archivo fue cargado exitosamente." . PHP_EOL;

$mes = $_POST['mes'];
	$anio = $_POST['anio'];

//$myfile = fopen("/var/www/archivos/ipc_csv.xlsx", "r") or die("Archivo corrupto");
/*while(!feof($myfile)){
  echo fread($myfile,filesize("/var/www/archivos/ipc_csv.xlsx"));
}*/
// Output one line until end-of-file
if(!feof($myfile)) {

}
/*if(!feof($myfile)) {
  list($csvAnio, $csvMes) = split(",", fgets($myfile));
}

if($csvAnio != $anio){
  die("El a&ntildeo seleccionado no coincide con el a&ntildeo del csv.");
}
else{*/
  $mesLetras = getCadenaMes($mes);

  //if($mesLetras == strtolower($csvMes)){
    //escribe en rabbit
    $connection = new AMQPConnection('localhost', 5672, 'test', 'test');
    $channel = $connection->channel();
    $channel->queue_declare('ipc', false, true, false, false);
    $msg = new AMQPMessage('ipc,' . $anio . ',' . $mes . ',TRUE');
    $channel->basic_publish($msg, '', 'ipc');
    $channel->close();
    $connection->close();

  /*}
  else{
    die("El archivo no coincide con el mes indicado.");
  }*//*
}*/


fclose($myfile);

}
else {
     die("Error al subir archivo.");
}

function getCadenaMes($x) {
    if($x == 1) return "enero";
    else if($x == 2) return "febrero";
    else if($x == 3) return "marzo";
    else if($x == 4) return "abril";
    else if($x == 5) return "mayo";
    else if($x == 6) return "junio";
    else if($x == 7) return "julio";
    else if($x == 8) return "agosto";
    else if($x == 9) return "septiembre";
    else if($x == 10) return "octubre";
    else if($x == 11) return "noviembre";
    else if($x == 12) return "diciembre";
    else return "";
}

?>
