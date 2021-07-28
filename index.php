<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Fetching JSON
// API = 3b53c361d908443480cf3f40
$req_url = "https://v6.exchangerate-api.com/v6/3b53c361d908443480cf3f40/latest/EUR";
$response_json = file_get_contents($req_url);


	

