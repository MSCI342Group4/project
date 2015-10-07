<?php
require './vendor/autoload.php';
// Creatinf and configuring slim
$app = new \Slim\Slim();
$app->config(array(
	'debug' => true,
	'templates.path' => './templates',
));

// Routing
$app->get('/', function () {
	echo "<h1>Scheduler API</h1>";
});

// Run
$app->run();