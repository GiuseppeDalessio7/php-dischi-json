<?php

$mylist = json_decode(file_get_contents('disc.json'), true);

header('Content-Type: application/json');

echo json_encode($mylist);
