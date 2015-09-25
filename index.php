<?php

function DisplayGreeting($HourOfDay){
    $HourOfDay = (int) $HourOfDay;
    if ($HourOfDay >= 6 and $HourOfDay <= 11){
        return "Good Morning";
        }
    elseif ($HourOfDay >= 12 and $HourOfDay <= 17){
        return "Good Afternoon";
        }
    elseif ($HourOfDay >= 18 and $HourOfDay <=20) {
        return "Good Evening";
        }
    elseif ($HourOfDay >= 21 and $HourOfDay <=24){
        return "Good Night";
        }
    elseif ($HourOfDay <= 5 and $HourOfDay >= 0){
        return "Good Night";
        }
    print "<p>Hour: " . $HourOfDay;
}

$HourOfDay = 21;

print "<p>" . DisplayGreeting($HourOfDay) . "</p>";

?>

