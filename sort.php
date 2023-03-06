
<?php
    include('connection.php');

    $input= $_GET['input'];
    $array = array();
    for($i=0;$i<10;$i++){
        $array.append($input);
    }
  $len = $array.length;
  for ($i = 0; $i < $len; $i++) {
    $min = $array[0];
    $index = 0;
    for ($j = 0; $j < num.length; $j++) {
      if ($array[$j] < $min) {
        $min = $array[$j];
        $index = $j;
      }
    }
    $new_array.append($min);
}
echo json_encode($new_array);
?>