<?php

// Creates cURL resource
$curl = curl_init();

// Sets cURL options
curl_setopt($curl, CURLOPT_URL, 'http://www.google.com');

// Run cURL | execute http request
curl_exec($curl);