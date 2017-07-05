<?php
    /* Make a call using Twilio. You can run this file 3 different ways:
     *
     * 1. Save it as call.php and at the command line, run 
     *        php call.php
     *
     * 2. Upload it to a web host and load mywebhost.com/call.php 
     *    in a web browser.
     *
     * 3. Download a local server like WAMP, MAMP or XAMPP. Point the web root 
     *    directory to the folder containing this file, and load 
     *    localhost:8888/call.php in a web browser.
     */

    // Step 1: Get the Twilio-PHP library from twilio.com/docs/libraries/php, 
    // following the instructions to install it with Composer.
    require_once "vendor/autoload.php";
    use Twilio\Rest\Client;
    
    // Step 2: Set our AccountSid and AuthToken from https://twilio.com/console
    $AccountSid = "ACf0bef51e5a407e3ace365f87a23ccb46";
    $AuthToken = "5e7b2c6563764d0d62dc00e18e1b5853";

    // Step 3: Instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);

    try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            // Step 4: Change the 'To' number below to whatever number you'd like 
            // to call.
            "+16175159619",

            // Step 5: Change the 'From' number below to be a valid Twilio number 
            // that you've purchased or verified with Twilio.
            "+14054001401",

            // Step 6: Set the URL Twilio will request when the call is answered.
            array("url" => "https://www.dl.dropboxusercontent.com/s/8twqvptu71pq8rd/01%20Frank%20Ocean%20-%20Lost_1.mp3?dl=0")
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }


    