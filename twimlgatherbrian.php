<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;        

$response = new Twiml();
$gather = $response->gather(['timeout' => 300,'action' => 'playvoicebrian.php']);

echo $response;