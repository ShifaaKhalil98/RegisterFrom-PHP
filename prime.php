<?php

$year=$_POST['year'];

$response['status']=true;

for($i=2;$i<$year;$i++){
    if($year%$i==0){
        $response['status']=false;
        break;
    }
}
echo json_encode($response);
?>