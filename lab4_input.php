<?php
$json = file_get_contents('php://input');
$data = json_decode($json);

if ($data !== null) {
    echo "Username: " . htmlspecialchars($data->username ?? '') . "<br>";
    echo "Password: " . htmlspecialchars($data->password ?? '');
} else {
    echo "Invalid JSON data.";
}
?>
