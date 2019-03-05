<?php
include 'vendor/autoload.php';

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;


$version = new Version2X('http://localhost:3002');

$client = new Client($version);
$client->initialize();
$client->emit('new-order',['hello'=>'hello']);
$client->close();