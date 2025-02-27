<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'search_student' && isset($_POST['mobile_number'])) {
        $mobile = $_POST['mobile_number'];

        if (preg_match('/^[6-9]\d{9}$/', $mobile)) {
            $userFound = true;

            echo json_encode(['success' => $userFound]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid mobile number format.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid action or missing parameters.']);
    }
}
?>
