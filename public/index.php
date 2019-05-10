<?php

require_once('TimeTravel.php');

$start = new DateTime("1985-12-31");

$today = new DateTime;

$timeTravel = new TimeTravel($start, $today);

echo $timeTravel->getTravelInfos() . '<br>';

$interval = new DateInterval('PT1000000000S');

$interval1 = $timeTravel->findDate($interval)->format(DATETIME::COOKIE);

echo "Le Doc est bloqué en  " . $interval1 . '<br>';

$intervalPeriod = new DateInterval('P1M1W1D');

$steps = $timeTravel->backToTheFuturStepByStep($intervalPeriod);

echo '<pre>';

var_dump($steps);
echo '</pre>';





