<?php
    // The PHP Twilio helper library. Get it here http://www.twilio.com/docs/libraries/
    use Twilio\Rest\Client;
    require_once "vendor/autoload.php";

    $ACCOUNT_SID = 'ACf0bef51e5a407e3ace365f87a23ccb46';
    $AUTH_TOKEN = '5e7b2c6563764d0d62dc00e18e1b5853';
 
    $client = new Client($ACCOUNT_SID, $AUTH_TOKEN);

    $temp = $_REQUEST['number'];

    session_start();

    $_SESSION['me'] = "+12122594350";
    // The phone numbers of the people to be called
    $participants = array('+12122594350', $temp);
    // '+16175159619'
 
    // Go through the participants array and call each person.
    foreach ($participants as $participant)
    {
        try {
        // $vars = array(
        //     'From' => '+14054001401',
        //     'To' => $participant,
        //     'Url' => 'ec2-13-59-179-3552-14-186-132.us-east-2.compute.amazonaws.com/standardresponse.xml');
        // if ($participant == '+12122594350'){
        // $response = $client->request("/$API_VERSION/Accounts/$ACCOUNT_SID/Calls", "POST", $vars);

        // Fixed old code should work now (fingers crossed):
        $call = $client->account->calls->create(
            $participant, // Number to call
            '+14054001401', // From a valid Twilio number
            array("url" => "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/standardresponse.php",
                "statuscallbackmethod" => "POST",
                "statuscallback" => ($participant == '+12122594350' ? "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/playvoice0.php" : "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/hangup.php"),
                "statuscallbackevent" => "completed"
            )
        );
        
        echo $call->ACCOUNT_SID;
    // }
    //     else {$call = $client->account->calls->create(
    //         $participant, // Number to call
    //         '+14054001401', // From a valid Twilio number
    //         array("url" => "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/standardresponse.php"));}

        }catch (Exception $e){
        echo "Error: " . $e->getMessage();}
    }