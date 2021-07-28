<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Fetching JSON
// API = 3b53c361d908443480cf3f40
$req_url = "https://v6.exchangerate-api.com/v6/3b53c361d908443480cf3f40/latest/EUR";
$response_json = file_get_contents($req_url);
print_r ($response_json);

function is_json($string,$return_data = false) {
    $data = json_decode($string);
    return (json_last_error() == JSON_ERROR_NONE) ? ($return_data ? $data : TRUE) : FALSE;
}

//// Processing JSON data
//if(false !== $response_json) { // if the $response_json doesn't returns the value NULL, do this
//    try { // do this
//        $response = json_decode($response_json); // decode JSON string
//        // Check for success
//        if("success" === $response->result) {
//            // YOUR APPLICATION CODE HERE, e.g.
//            $base_price = 12; // Your price in USD
//            $EUR_price = round(($base_price * $response->conversion_rates->EUR), 2);
//
//        }
//
//    }
//    catch(Exception $e) { //do this if 'try doesn't apply
//
//        // Handle JSON parse error...
//    }
//
//}


