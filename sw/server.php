<?php
header('Content-Type:application/json');
$a = $_GET['a'];
$b = $_GET['b'];

$r = -$b/$a;

$data = ['r' => $r];

$result = json_encode($data);

$status = 100;
$message = 'all fine, don\'t worry';
header('HTTP/1.1 $status $message');
echo $result;
