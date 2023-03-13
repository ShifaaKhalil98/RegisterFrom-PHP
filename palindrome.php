<?php

$str=$_GET['str'];
$reversed="";

for($i=0;$i<strlen($str);$i++){
    $reversed=$str[$i] . $reversed;
}

if(strtolower($reversed)==strtolower($str)) $palindrome=true;
else $palindrome=false;

echo json_encode($palindrome);

?>