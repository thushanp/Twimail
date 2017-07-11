<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;        

$filename = ("storagebrian.html");
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

$response = new Twiml();
$response->play(
	$contents
	// $_SESSION['url'], ["loop" => "5"]
	// $_SESSION['url']
	// $_POST['url']
	// "http://ec2-13-59-179-35.us-east-2.compute.amazonaws.com/parth.mp3"
	);
$response->hangup();
// $dial->number(['sendDigits' => 'wwwwwwww5555']);

echo $response;

// <Response>
//     <Dial>
//         <Number url="other-script">
//             415-123-4567
//         </Number>
//     </Dial>
// </Response>


// Call home once, call me once, hang up home, call catherine once - press key, call catherine again. at hang up, call home once.