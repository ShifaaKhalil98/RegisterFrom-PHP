<?php
$input= $_GET['str'];
$output="";
$numbers="";

for($i=0;$i<strlen($input);$i++){
    if(is_numeric($input[$i])){
        $numbers=$input[$i].$numbers;
    }
}
$j=0;
for($i=0;$i<strlen($input);$i++){
    if(is_numeric($input[$i])){
        $output=$output.$numbers[$j];
        $j++;
    }
    else{
        $output=$output.$input[$i];
    }
}
echo $output;
?>