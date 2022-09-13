<?php
require "AirConditioner.php";

$airconditioner = new AirConditioner(60,7);

$airconditioner->showStatus();

$airconditioner->Heat();
?>