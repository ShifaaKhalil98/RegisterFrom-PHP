<?php
    include('connection.php');

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $confirm_pwd = $_POST['confirm_pwd'];
    $year = $_POST['year'];
    
    $response=[];
    
    // $pattern = '/^[^@\s]+@[^@\s]+\.[^@\s]+$/';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status']= false;
    }else{
       if(strlen($pwd) >= 8 && preg_match('/[A-Z]/', $pwd) && preg_match('/\d/', $pwd) && preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $pwd)
        && preg_match('/[a-z]/', $pwd)) {
           
            if($pwd==$confirm_pwd){
                $response['status'] = true;
            }else{
                $response['status']=false;
            }
        }
        else {
            $response['status'] = false;
        }
    }
        echo json_encode($response);
?>