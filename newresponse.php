<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

$response = new Twiml();
// $dial->conference('ConferenceParth', ["endConferenceOnExit" => "true", "waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
// $dial->gather(["action" => "/redirectIntoConference?name=example" digits="1"])

// make an associative array of phone numbers we know
$companypeople = array(

    // Parth
    "+12122594304"=>"+12122594304",

    // Brad
    "+12122594318"=>"+12122594318",

    // Brian
    "+12122594333"=>"+12122594333",

    // Evan
    "+12125944329"=>"+12125944329",

    // Parth's Twilio
    "+19092220290"=>"+19092220290",

    // Brad's Twilio
    "+16175159619"=>"+16175159619", 

    // Brian's Twilio
    "+12122594350"=>"+12122594350",

    // Evan's Twilio
    "+16103315919"=>"+16103315919"

);

// if the caller is known, then greet them by name
// otherwise, consider them just another monkey
if(!$number = $companypeople[$_REQUEST['From']])
    $number = "other";

else $number = $_REQUEST['From'];


if ($number = "+12122594304") {
    $dial = $response->dial();
    $dial->conference('ConferenceParth', ["waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
}

elseif ($number = "+12122594318") {
    $dial = $response->dial();
    $dial->conference('ConferenceBrad', ["waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
}

elseif ($number = "+12122594333") {
    $dial = $response->dial();
    $dial->conference('ConferenceBrian', ["waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
}

elseif ($number = "+12125944329") {
    $dial = $response->dial();
    $dial->conference('ConferenceEvan', ["waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
}

// now for Twilio numbers

elseif ($number = "+19092220290") {
    $dial = $response->dial();
    $dial->conference('ConferenceParth', ["endConferenceOnExit" => "true", "waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
}

elseif ($number = "+16175159619") {
    $dial = $response->dial();
    $dial->conference('ConferenceBrad', ["endConferenceOnExit" => "true", "waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
}

elseif ($number = "+12122594350") {
    $dial = $response->dial();
    $dial->conference('ConferenceBrian', ["endConferenceOnExit" => "true", "waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
}

elseif ($number = "+16103315919") {
    $dial = $response->dial();
    $dial->conference('ConferenceEvan', ["endConferenceOnExit" => "true", "waitUrl" => "http://twimlets.com/holdmusic?Bucket=com.twilio.music.classical"]);
}

else $response->dial('+12122594327');

echo $response;

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
