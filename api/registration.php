<?php

include_once 'functions.php';

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$link = connentToDb();


$result = registration(
    $link,
    $data['name'],
    $data['last-name'],
    $data['login'],
    $data['password']
);

mysqli_close($link);

die(json_encode($result));