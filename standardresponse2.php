<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

$response = new Twiml();
$dial = $response->dial();
$dial->conference('ConferenceParth', ["waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);

echo $response;