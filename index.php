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


$color = 3;

//seleccion multiple
switch ($color) {
  case 'azul':
    echo 'Color del cielo';
    break;

  case 'amarillo':
    echo 'Color del sol';
    break;

  case '3':
    echo 'Color que molesta a los toros';
    break;

  default:
    echo 'Estas equivocado, selecciona un color valido';
    break;
}

echo '<br>';

echo match ($color) {
  // '3' => 'Color del cielo',
  3 => 'Numero'
};
