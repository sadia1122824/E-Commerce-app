<?php
include('../includes/dbcon.php');
$payload = json_decode(file_get_contents('php://input'), true);

session_start();
if (!isset($_SESSION['id'])) {
    echo json_encode(['success' => false, 'message' => 'User is not logged in']);
    exit;
}
$user_id = $_SESSION['id'];

$query = "SELECT * FROM `products` WHERE `user_id` = '$user_id'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_array($result)){
        $image_path = json_decode($row['image_paths'],true);
        $image = $image_path[0];
        
        $data[] = [
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
}
echo json_encode($data);