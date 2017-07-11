<?php

$test = "+12122594303";

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
if(!$number = $companypeople[$test])
    $number = "other";

echo $number . "\n";