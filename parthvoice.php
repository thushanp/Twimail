<?php
    // The PHP Twilio helper library. Get it here http://www.twilio.com/docs/libraries/
    require_once('twilio.php');
 
    $API_VERSION = '2010-04-01';
    $ACCOUNT_SID = 'ACf0bef51e5a407e3ace365f87a23ccb46';
    $AUTH_TOKEN = '5e7b2c6563764d0d62dc00e18e1b5853';
 
    $client = new TwilioRestClient($ACCOUNT_SID, $AUTH_TOKEN);
 
    // The phone numbers of the people to be called
    $participants = array('+6175159619', '+6175159619');
 
    // Go through the participants array and call each person.
    foreach ($participants as $particpant)
    {
        $vars = array(
            'From' => '+14054001401',
            'To' => $participant,
            'Url' => 'http://ec2-52-14-186-132.us-east-2.compute.amazonaws.com/standardresponse.xml');
 
        $response = $client->request("/$API_VERSION/Accounts/$ACCOUNT_SID/Calls", "POST", $vars);
    }
?>