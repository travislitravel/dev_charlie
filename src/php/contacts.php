<?php

// CORS.
// Allows outside sources to access this file.
header('Access-Control-Allow-Origin: *');

//
$testJson = "[{message: 'You have made it...'}]";
echo json_encode($testJson);
?>
