<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

session_start();

$response = new Twiml();
$dial = $response->dial();
$dial->number(["url" => $_SESSION['url']]);

echo $response;

// <Response>
//     <Dial>
//         <Number url="other-script">
//             415-123-4567
//         </Number>
//     </Dial>
// </Response>


// Call home once, call me once, hang up home, call catherine once - press key, call catherine again. at hang up, call home once.