<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

session_start();

$response = new Twiml();
$dial = $response->dial();
$dial->conference('MyConferenceParth');
// $dial->gather(['action' => $_SESSION['url'], 'digits' => '1']);
// sleep(4);
// $dial=$response->dial('+14054001401', ['action' => "/playvoice.php"]);
// $dial->conference('MyConferenceParth', ['statusCallback' => $_SESSION['url'],
//     'statusCallbackEvent' => 'hold']);
// $dial->hangup();

echo $response;