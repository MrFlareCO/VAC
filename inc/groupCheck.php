<?php

$neededGroup = explode("/", $_SERVER['PHP_SELF']);#
$newArray = $userData['groups'];
$newArray = array_change_key_case($newArray);

if(array_key_exists($neededGroup[1], $newArray) || $userData['role'] == "Administrator"){

} else {
    header("Location: /".strtolower($userData['role'])."/dashboard");
    exit;
}

?>