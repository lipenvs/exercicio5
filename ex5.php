
<?php

function generateFibonacci($size)
{
  $fibonacci = array();

  $fibonacci[0] = 1;
  $fibonacci[1] = 1;

  for ($i = 2; $i < $size; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
  }

  return $fibonacci;
}

// Coloque aqui um valor númerico (Input)
$input = 6;

$result = generateFibonacci($input);
echo "Output: [" . implode(", ", $result) . "]";

?>
