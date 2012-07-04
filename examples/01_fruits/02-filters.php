#!/usr/bin/php
<?php

$mongoServer = new Mongo();

$db = $mongoServer->goodiesDB;

$collection = $db->fruits;

$obj = $collection->findOne(array('color' => 'yellow'));

var_dump($obj);

$color = 'yellow';
$cursor = $collection->find(array('color' => 'yellow'));
echo sprintf("Found %d %s fruits\n", $cursor->count(), $color);
