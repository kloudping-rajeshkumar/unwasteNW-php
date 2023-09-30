<?php

require_once('./vendor/autoload.php'); // Include Composer's autoloader
require_once('config.php');

use Firebase\JWT\JWT;

// $jwtToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhcGkubXlhZG1pbi5jb20iLCJhdWQiOiJhcGkubXlhZG1pbi5jb20iLCJpYXQiOjE2OTU5MTQ4OTMsImV4cCI6MTY5NjEzMDg5MywiZGF0YSI6eyJlbWFpbCI6ImFkbWluQHVud2FzdGVuZXR3b3JrLmluIiwicm9sZSI6ImFkbWluIn19.f3NqXI5ua9cojNXhdWE-rJGCRxAk6FopzTLclSivzQI";

// $issuerToken = '94FC840A-1381-4227-A4A8-4EE0E7323C66.1B49D75F-DA3C-4B42-8C0D-5CC13B5BABA4.8534319E-CD06-477B-8B79-DBA9CFF2A5BB';

// try {
//     // Decode the JWT token
//     $decoded = JWT::decode($jwtToken, $issuerToken, ['HS256']);

//     // Access the claims within the token
//     $claims = (array)$decoded;

//     // Print or use the claims
//     print_r($claims);
// } catch (Exception $e) {
//     // Handle JWT decoding errors
//     echo "JWT token decoding failed: " . $e->getMessage();
// }

function cors() {
    
    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
        // you want to allow, and if so:
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
    
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    
        exit(0);
    }
    
    // echo "You have CORS!";
}
cors();
$issuer = 'api.myadmin.com';
$audience = 'api.myadmin.com';
$issuerToken = '94FC840A-1381-4227-A4A8-4EE0E7323C66.1B49D75F-DA3C-4B42-8C0D-5CC13B5BABA4.8534319E-CD06-477B-8B79-DBA9CFF2A5BB'; // Secret key
$expirationInMinutes = 60;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputJSON = file_get_contents('php://input');
    $inputData = json_decode($inputJSON);

    // Check if JSON data could be decoded
    if ($inputData === null) {
        http_response_code(400); // Bad Request
        echo json_encode(array("message" => "Invalid JSON data"));
        exit;
    }

    // Check if "username" and "password" fields exist in the JSON data
    if (isset($inputData->username) && isset($inputData->password)) {

        // Verify username and password
        if ($inputData->username === $Loginid && $inputData->password === $Password) {
            http_response_code(200); // OK
             // Create token claims
            $claims = [
                'email' => 'admin@unwastenetwork.in', // Add relevant user data
                'role' => 'Admin', // Add relevant user data
            ];

            // Generate the JWT token
            $token = [
                'iss' => $issuer,
                'aud' => $audience,
                'iat' => time(),
                'exp' => time() + ($expirationInMinutes * 1440),
                'data' => $claims,
            ];

            // Sign the token with the issuer token (secret key)
            $jwt = JWT::encode($token, $issuerToken, 'HS256');
            // Return the JWT token
            $data = ["token" => $jwt];
            echo json_encode($data);
        } else {
            http_response_code(401); // Unauthorized
            echo json_encode(array("message" => "Invalid username or password"));
        }
    } else {
        http_response_code(400); // Bad Request
        echo json_encode(array("message" => "Missing 'username' or 'password' field in JSON data"));
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(array("message" => "Only POST requests are allowed"));
}




 