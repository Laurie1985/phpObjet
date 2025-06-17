<?php

require_once './Cuirasse.php';
require_once './Helicopter.php';

$bateau = new Cuirasse('Bruno', 2020, 'Cuirassé', 100);
$bateau->avancer();

$helicopter = new Helicopter;
