<?php
include('../includes/dbcon.php');
$payload = json_decode(file_get_contents('php://input'), true);

session_start();
if (!isset($_SESSION['id'])) {
    echo json_encode(['success' => false, 'message' => 'User is not logged in']);
    exit;
}
$user_id = $_SESSION['id'];

$data = [];
$query = "SELECT * FROM `swiper` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = [
            "swiper" => $row['swiper'],
            "id" => $row['id'],
        ];
    }
}
echo json_encode($data);
