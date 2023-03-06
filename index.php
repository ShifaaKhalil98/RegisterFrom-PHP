<?php
    include('connection.php');

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $first_name = $_POST['confirm_pwd'];
    $year = $_POST['year'];

        if(strlen($pwd) >= 8 && preg_match('/[A-Z]/', $pwd) && preg_match('/\d/', $pwd) && preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $pwd)
        && preg_match('/[a-z]/', $pwd)) {
            $response['status'] = 'registered';
            echo json_encode($response);

        } else {
            $response['status'] = 'password not validated';
            echo json_encode($response);
        }

?>