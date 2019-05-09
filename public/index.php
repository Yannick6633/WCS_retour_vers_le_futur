<?php

require_once('TimeTravel.php');


$travel = new TimeTravel(new DateTime('1985-12-31'), new DateTime());

//var_dump($travel);

echo $travel->getTravelInfo();

echo '</br>';

echo 'Doc est perdu depuis ' . $travel->findDate(1000000000);

echo '</br>';

echo (count($travel->backToFutureStepByStep(new DateInterval("P1M1W1D"))));







