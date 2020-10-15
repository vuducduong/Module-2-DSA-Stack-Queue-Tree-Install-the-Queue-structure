<?php
include_once "Queue.php";

$person = new Queue(9);
$person->enqueue(1);
$person->enqueue(1);
$person->enqueue(1);
$person->dequeue();
$person->dequeue();
print_r($person);
$person->checkEmpty();
echo "<br>";
$person->enqueue(1);
$person->enqueue(1);
$person->dequeue();
$person->dequeue();
$person->dequeue();
$person->checkEmpty();


