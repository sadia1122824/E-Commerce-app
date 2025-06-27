<?php
include('../../includes/dbcon.php');

header('Content-Type: application/json');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (isset($input['action']) && $input['action'] === 'save') {
        if (!empty($input['id']) && !empty($input['display_name']) && !empty($input['selectedShopValue'])) {
            // Save data to session
            $_SESSION['shopData'] = [
                'StoreId' => $input['id'],
                'StoreName' => $input['display_name'],
                'StoreApikey' => $input['selectedShopValue'],
            ];

            echo json_encode(['status' => 'success', 'message' => 'Data saved successfully!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Incomplete data provided.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid action.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
