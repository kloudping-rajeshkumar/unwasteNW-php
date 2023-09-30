<?php
require_once 'db.php'; // Include your database connection script
require_once 'config.php';
require_once('./vendor/autoload.php');

use Firebase\JWT\JWT;

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

// Function to validate the bearer token
function validateBearerToken($token) {

    // Your JWT secret key (same key used for signing the token)
    $secretKey = "94FC840A-1381-4227-A4A8-4EE0E7323C66.1B49D75F-DA3C-4B42-8C0D-5CC13B5BABA4.8534319E-CD06-477B-8B79-DBA9CFF2A5BB";
    
    try {
        // Decode the JWT token
        $decoded = JWT::decode($token, $secretKey, ['HS256']);
    
        // Check if the token has expired
        $currentTimestamp = time();
        if ($decoded->exp > $currentTimestamp) {
            // Token is valid and not expired
            http_response_code(200); // OK
            return true;
        } else {
            // Token has expired
            http_response_code(401); // Unauthorized
            echo json_encode(array("message" => "Token has expired"));
        }
    } catch (Exception $e) {
        // An exception occurred, token is invalid
        http_response_code(401); // Unauthorized
        echo json_encode(array("message" => "Invalid token"));
    }
}

// Handle the JSON GET request
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $headers = array();

    // Iterate through all headers and append them to the array
    foreach (getallheaders() as $name => $value) {
        $headers[$name] = $value;
    }
    // Create an SQL query to fetch all data from the 'order' table
    $authorizationHeader = $headers["Authorization"];

    if (isset($authorizationHeader)) {

        // Check if the header starts with "Bearer " (common for JWT tokens)
        if (strpos($authorizationHeader, 'Bearer ') === 0) {
            $token = substr($authorizationHeader, 7); // Remove "Bearer " from the header value

            // Validate the token
            if (validateBearerToken($token)) {
                http_response_code(200); // OK
                // Get the current month and year
                $currentMonth = date("m");
                $currentYear = date("Y");

                // Construct and execute the SQL query to filter data for the current month
                $sql = "SELECT * FROM `order` WHERE MONTH(dateOfCreated) = $currentMonth AND YEAR(dateOfCreated) = $currentYear";
                $result = $conn->query($sql);
                
                $single = -1;
                $appartments = 0;
                $commercial = 0;
                $orderReceived = 0;
                $orderTotalAmount = 0;

                if ($result->num_rows > 0) {
                    // Output data here or process it as needed
                    while ($row = $result->fetch_assoc()) {
                        // Access data using $row['serviceType'] and $row['count']
                        if($row['amount']){
                            $orderTotalAmount += $row['amount'];
                        }
                        if($row['serviceType'] == "Commercial"){
                            $commercial += 1;
                            $orderReceived += 1;
                        }
                        if($row['serviceType'] == "Apartment"){
                            $appartments += 1;
                            $orderReceived += 1;
                        }
                        else{
                            $single += 1;
                            $orderReceived += 1;
                        }
                    }
                    $data = [
                        "orderReceived" => $orderReceived,
                        "orderTotalAmount" => $orderTotalAmount,
                        "single" => $single,
                        "appartments" => $appartments,
                        "commercial" => $commercial
                    ];
                    
                    echo json_encode($data);
                } else {
                    echo "No records found for the current month.";
                }

                // Execute the SQL query with prepared statements for security
                // $stmt = $conn->prepare($sql);
                // if ($stmt) {
                //     $stmt->execute();
                //     $result = $stmt->get_result();
                //     $data = array();

                //     // Fetch all rows from the result set and store them in an array
                //     while ($row = $result->fetch_assoc()) {
                //         $data[] = $row;
                //     }

                //     // Return the data in JSON format
                //     echo json_encode($data);
                // } else {
                //     http_response_code(500); // Internal Server Error
                //     echo json_encode(array("message" => "Error: " . $conn->error));
                // }
                // $stmt->close();
            } else {
                http_response_code(401); // Unauthorized
                echo json_encode(array("message" => "Invalid token"));
            }
        } else {
            http_response_code(400); // Bad Request
            echo json_encode(array("message" => "Invalid Authorization header format"));
        }
    } else {
        http_response_code(401); // Unauthorized
        echo json_encode(array("message" => "Authorization header missing"));
    }
}

// Close the database connection
$conn->close();
?>