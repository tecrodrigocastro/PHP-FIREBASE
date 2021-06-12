<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory)
->withServiceAccount('rideapp-8807d-firebase-adminsdk-c35tz-3d8313a01b.json')
->withDatabaseUri('https://rideapp-8807d-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();


?>