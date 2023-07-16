<?php
// Set your search query
$searchQuery = 'google';

// Prepare the API request URL
$requestUrl = 'https://api.duckduckgo.com/?q=' . urlencode($searchQuery) . '&format=json';

// Initialize cURL
$curl = curl_init($requestUrl);

// Set cURL options
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($curl);

// Check for cURL errors
if ($response === false) {
    $error = curl_error($curl);
    // Handle the error appropriately (e.g., display an error message)
    echo 'cURL Error: ' . $error;
    exit;
}

// Close the cURL session
curl_close($curl);

// Process the API response
$results = json_decode($response, true);

if ($results) {
    // Process and display the instant answer results as per your requirements
    // ...
    echo $response;
} else {
    // Handle any error that occurred during the request
    echo 'Error decoding API response.';
}

?>