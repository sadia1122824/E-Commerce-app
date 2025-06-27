<?php
header('Content-Type: application/json');
include('../includes/dbcon.php');
session_start();

$response = [];
$user_id = $_SESSION['id'];
$payload = json_decode(file_get_contents('php://input'), true);
$product_id = $payload['id'];

$query = "SELECT * FROM `products` WHERE `id` = '$product_id' AND `user_id` = '$user_id'";
$result = mysqli_query($conn, $query);
$response = [];
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $image_path = json_decode($row['image_paths'], true);
    $image = $image_path[0];

    $response [] = [  
        "product_name" => $row['product_name'],
        "original_price" => $row['original_price'],
        "compare_price" => $row['compare_price'],
        "description" => $row['description'],
        "category" => $row['category'],
        "washing_instruction" => $row['washing_instruction'],
        "return_requirement" => $row['return_requirement'],
        "image_paths" => $image,
        "created_at" => $row['created_at'],
        "id" => $row['id'],
    ];
}

echo json_encode($response);
mysqli_close($conn);
