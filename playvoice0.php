<?php

	use Twilio\Rest\Client;
	require_once "vendor/autoload.php";

	$ACCOUNT_SID = 'ACf0bef51e5a407e3ace365f87a23ccb46';
	$AUTH_TOKEN = '5e7b2c6563764d0d62dc00e18e1b5853';

	$client = new Client($ACCOUNT_SID, $AUTH_TOKEN);

	session_start();

	try {
        // $vars = array(
        //     'From' => '+14054001401',
        //     'To' => $participant,
        //     'Url' => 'ec2-52-14-186-132.us-east-2.compute.amazonaws.com/standardresponse.xml');
 
        // $response = $client->request("/$API_VERSION/Accounts/$ACCOUNT_SID/Calls", "POST", $vars);

        // Fixed old code should work now (fingers crossed):
        $call = $client->account->calls->create(
            '+14054001401', // Number to call
            '+14054001401', // From a valid Twilio number
            array("url" => "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/playvoice.php")
        );

        }catch (Exception $e){
        echo "Error: " . $e->getMessage();}


	// require_once './vendor/autoload.php';
	// use Twilio\Twiml;

	// session_start();

	// $response = new Twiml();
	// $dial=$response->dial(['action' => "/playvoice.php"]);
	// $dial->conference('MyConferenceParth');
	// $dial->hangup();

	// echo $response;