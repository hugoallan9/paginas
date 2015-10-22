
<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

$bandera = false;
//Loop through each file
for($i=0; $i<count($_FILES['upload']['name']); $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a filepath
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "/var/www/archivos/CSV_mapas/" . $_FILES['upload']['name'][$i];
	//echo $tmpFilePath . PHP_EOL;
	//echo $newFilePath . PHP_EOL;
    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
	echo "Archivo " . $_FILES['upload']['name'][$i] . " cargado exitosamente." . "<br>";
	$bandera = true;
      //Handle other code here

    } //move
    else{
	echo "Error al subir archivo " . $_FILES['upload']['name'][$i] . "<br>";
    	$bandera = false;
    }
  }//$tmpFilePath != ""
  else{
    echo "Error al subir archivo " . $_FILES['upload']['name'][$i] . "<br>";
    $bandera = false;
  }
}

if ($bandera){
    //escribe en rabbit
    $connection = new AMQPConnection('localhost', 5672, 'test', 'test');
    $channel = $connection->channel();
    $channel->queue_declare('mapas', false, true, false, false);
    $msg = new AMQPMessage('work');
    $channel->basic_publish($msg, '', 'mapas');
    $channel->close();
    $connection->close();
}


?>
