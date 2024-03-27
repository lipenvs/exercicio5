<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXERCÍCIO 5 - DESAFIO DEV - FIBONACCI</title>
</head>

<body>
  <h1>
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
  </h1>
</body>

</html>