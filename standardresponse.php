<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

session_start();

$response = new Twiml();
$dial = $response->dial(['hangupOnStar' => 'true', 'action'=> $_SESSION['url']]);
$dial->conference('MyConferenceParth');

echo $response;