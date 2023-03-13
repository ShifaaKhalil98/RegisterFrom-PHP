<?php
$input=$_POST['str'];
// $vowels="aeiou";
$first_consonants="";
$output="";
for($i=0;$i<strlen($input);$i++){
    if($input[$i]=="a" || $input[$i]=="e" || $input[$i]=="i" || $input[$i]=="o" || $input[$i]=="u"){
        break;
    }
    else{
        $first_consonants = $first_consonants . $input[$i];
    }
}
$num_consonants=strlen($first_consonants);
for($i=$num_consonants;$i<strlen($input);$i++){
    $output = $output . $input[$i];
}
$output = $output . $first_consonants . "ay";
echo $output;
?>