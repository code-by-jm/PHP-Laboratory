<?php

header("Content-Type: application/json");

$json = file_get_contents("php://input");

$data = json_decode($json, true);

$name = $data['name'] ?? '';

if (!empty($name)) {

    $response = [
        "status" => "success",
        "message" => "Welcome, " . $name . "!"
    ];

} else {

    $response = [
        "status" => "error",
        "message" => "Name is required."
    ];

}

echo json_encode($response);

?>
