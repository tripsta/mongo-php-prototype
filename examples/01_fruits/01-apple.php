#!/usr/bin/php
<?php

$mongoServer = new Mongo();

$db = $mongoServer->goodiesDB;

$collection = $db->fruits;

$appleColors = array('red', 'green', 'yellow');

foreach (range(0, 10) as $number)
{
	$index = rand(0, 4) % 3; // more reds and greens
	$obj = array( "type" => "apple", "color" => $appleColors[$index] );
	$collection->insert($obj);
}

$cursor = $collection->find();

foreach ($cursor as $obj) {
	$output = sprintf('Fruit: %s Color: %s%s', $obj['type'], $obj['color'], PHP_EOL);
    echo $output;
}


echo 'end of list'.PHP_EOL;