<?php

$traffic_light = "ON";
$pedestrian_status = "GREEN";

if($traffic_light == "ON"){
    echo "Traffic light is on";

    if($pedestrian_status == "GREEN"){
        echo "Pedestrian can cross the road";

    } else if($pedestrian_status == "ORANGE") {
        echo "Pedestrian get ready to cross soon";

    } else {
        echo "Pedestrian stop!";
    }

}else {
    echo "Traffic light is off";

}


















?>