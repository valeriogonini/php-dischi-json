<?php

$data_string = file_get_contents('dischi.json');


$discs = json_decode($data_string, true);

header('Content-type: application/json');


$data = [
    'results' => $discs,
    'succes' => true,
];

echo json_encode($data);
