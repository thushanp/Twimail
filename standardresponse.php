<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

$response = new Twiml();
$dial = $response->dial();
$dial->conference('ConferenceParth', ["endConferenceOnExit" => "true", "waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
// $dial->gather(["action" => "/redirectIntoConference?name=example" digits="1"])

echo $response;


// <?php
// require_once './vendor/autoload.php';
// use Twilio\Twiml;

// if ($_POST['From'] = '+16175159619'){
// $response = new Twiml();
// $dial = $response->play("http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical");
// // $dial->number(['sendDigits' => 'wwwwwwww5555']);

// echo $response;}
// else

// $response = new Twiml();
// $dial = $response->dial(["action" => "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/playvoice0.php"]);
// $dial->conference('ConferenceParth', ["waitURL" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical",]);

// echo $response;

?>