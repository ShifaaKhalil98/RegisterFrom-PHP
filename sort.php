
<?php
  $input = $_GET['input'];
  $array=explode(',', $input);
  $len=count($array);

  for ($i = 0; $i < $len - 1; $i++) {
    $min_index = $i;
    for ($j = $i + 1; $j < $len; $j++) {
      if ($array[$j] < $array[$min_index]) {
        $min_index = $j;
      }
    }
    $temp = $array[$i];
    $array[$i] = $array[$min_index];
    $array[$min_index] = $temp;
  }
  echo json_encode($array);
?>