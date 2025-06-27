<?php
header('Content-Type: application/json');
include('../includes/dbcon.php');
session_start();

$response = [];
$data = [];

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];

    $query = "SELECT * FROM `banners` WHERE `user_id` = '$user_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $data[] = [
                "banner_one_title" => $row['banner_one_title'],
                "banner_one_description" => $row['banner_one_description'],
                "banner_one_image" => ltrim($row['banner_one_image'], './'),
                "banner_two_title" => $row['banner_two_title'],
                "banner_two_description" => $row['banner_two_description'],
                "banner_two_image" => ltrim($row['banner_two_image'], './'),
                "banner_three_title" => $row['banner_three_title'],
                "banner_three_description" => $row['banner_three_description'],
                "banner_three_image" => ltrim($row['banner_three_image'], './'),
                "created_on" => $row['created_on'],
            ];
        }
    }

    $response = [
        "status" => "success",
        "data" => $data
    ];
} else {
    $response = [
        "status" => "error",
        "message" => "Session ID not set"
    ];
}

echo json_encode($response);
