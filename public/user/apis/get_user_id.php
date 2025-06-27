<?php
include('../includes/dbcon.php');
$payload = json_decode(file_get_contents('php://input'), true);
session_start(); 

$url = $payload['currentUrl'];
$id = 0;

$query = "SELECT * FROM `users`";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $domain_name = $row['domain_name'];
        if (strpos($url, $domain_name) === 0) {
            $id = $row['id'];

            $company_name_get_qery = "SELECT * FROM `navbars` WHERE `user_id` = '$id'";
            $result_company = mysqli_query($conn,$company_name_get_qery);
            if(mysqli_num_rows($result_company)>0){
                $company_row = mysqli_fetch_array($result_company);
                $company_name = $company_row['company_name'];
            }
            break; 
        }
    }
}

$_SESSION['id'] = $id;
echo json_encode($company_name);
?>
