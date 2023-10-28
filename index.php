<?php
$num1 = 6;
$num2 = 9;

echo 'Primer parrafo <br>';

if ($num1 < $num2) {
  echo 'Segundo parrafo <br>';
} elseif ($num1 > $num2) {
  echo 'Segundo - Primero parrafo <br>';
} else {
  echo 'No se cumple nada <br>';
}

echo 'Tercer parrafo <br>';


//operadores ternarios
$valor = $num1 > $num2 ? 'mayor' : ($num1 < $num2 ? 'menor' : 'igual');
echo $valor;
echo '<br>';


$color = 'amarillo';

//seleccion multiple
switch ($color) {
  case 'azul':
    echo 'Color del cielo';
    break;

  case 'amarillo':
    echo 'Color del sol';
    break;

  case 'rojo':
    echo 'Color que molesta a los toros';
    break;

  default:
    echo 'Estas equivocado, selecciona un color valido';
    break;
}

echo '<br>';

echo match ($color) {
  'azul' => 'Color del cielo',
  'amarillo' => 'Color de los girasoles',
  default => 'Estas equivocado'
};

echo '<br>';

//bucles repetitivos

$num = 0;

while ($num <= 10) {
  echo ++$num;

  if (($num % 2) === 0) {
    echo ' Eres par <br>';
  } else {
    echo ' Eres impar <br>';
  }
}
