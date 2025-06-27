<?php
header('Content-Type: application/json');
include('../includes/dbcon.php');
session_start();

$response = [];
$user_id = $_SESSION['id'];

$company_name = '';
$navbar_query = "SELECT `company_name` FROM `navbars` WHERE `user_id` = '$user_id' LIMIT 1";
$navbar_result = mysqli_query($conn, $navbar_query);
if ($navbar_result && mysqli_num_rows($navbar_result) > 0) {
    $navbar_data = mysqli_fetch_assoc($navbar_result);
    $company_name = $navbar_data['company_name'];
}

$sql = "SELECT `id`, `navbar_id`, `field_value` FROM `navbar_fields`";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $navbar_field_id = $row['id'];
        $field_value = $row['field_value'];
        $navbar_id = $row['navbar_id'];

        $subfield_query = "SELECT `id`, `navbar_field_id`, `subfield_value` FROM `navbar_subfields` WHERE `navbar_field_id` = '$navbar_field_id'";
        $subfield_result = mysqli_query($conn, $subfield_query);

        $subfields = [];
        if ($subfield_result && mysqli_num_rows($subfield_result) > 0) {
            while ($subfield_row = mysqli_fetch_assoc($subfield_result)) {
                $subfields[] = [
                    'id' => $subfield_row['id'],
                    'subfield_value' => $subfield_row['subfield_value']
                ];
            }
        }

        $data[] = [
            'id' => $navbar_field_id,
            'navbar_id' => $navbar_id,
            'field_value' => $field_value,
            'subfields' => $subfields
        ];
    }

    $response = [
        'status' => 200,
        'message' => 'Success',
        'company_name' => $company_name,
        'data' => $data
    ];
} else {
    $response = [
        'status' => 204,
        'message' => 'No data found',
        'company_name' => $company_name,
        'data' => []
    ];
}

echo json_encode($response);
mysqli_close($conn);
?>
