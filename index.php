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

//Estructuras repetitivas o bucles

$num = 0;

//? while
while ($num <= 9) {
  echo ++$num;

  if (($num % 2) === 0) {
    echo ' Eres par <br>';
  } else {
    echo ' Eres impar <br>';
  }
}

//? do while
do {
  echo 'Probando el do while';
  $num++;
} while ($num < 10);


//? for

$filas = 10;

for ($i = 0; $i <= $filas; $i++) {
  for ($j = 0; $j < $i; $j++) {
    echo "*";
  }
  echo '<br>';
};

//? FOREACH
//* en php existen dos formas de escribir arrays, usando los [] o usando la funcion array().

$nombres = ['Dayana', 'Gulliano', 'Daniel'];

foreach ($nombres as $nombre) {
  # code...
  echo $nombre . PHP_EOL;
}

echo '<br>';

$array = array(1, 2, 3, 4);
foreach ($array as $indice => $valor) {
  $valor = $valor * 2;
  echo " el numero es $valor  y su posición es $indice <br>";
}


//? funciones en php

$arg = true;

function name($arg)
{
  if ($arg) {
    echo 'tenemos valores para argumentar';
  }
};

name($arg);

echo '<br>';

function hacer_cafe($tipo = 'cafe con leche')
{
  echo "hacer una taza de $tipo.\n <br>";
}

hacer_cafe(); //llamado de la funcion
hacer_cafe("cafe tinto");


function factorial($num)
{
  $resultado = 1;

  for ($i = 1; $i <= $num; $i++) {
    # code...
    $resultado = $resultado * $i;
  }

  return $resultado;
}

$valor = factorial(6);

echo "el factorial del numero es: $valor <br>";


//? Ambito de las variables globales o locales

$nombre = 'gulliano';

function nombre()
{
  global $nombre; //variable global usada en una funcion
  echo $nombre . " dentro de la funcion <br>";

  $numero = 4; //variable local
  echo "Tengo $numero años de vivir con mi mujer <br>";
}

nombre();
echo $nombre . ' fuera de la funcion <br>';


//? argumentos fijos y variables

function mostrar($ciudad) //argumento fijo, se espera recibir un solo argumento
{
  echo $ciudad;
}

mostrar('Cúcuta');

echo "<br>";

function suma(...$suma_numeros) //argumento variable, acepta mas de un argumento, si no se sabe cuantos va a recibir
{

  $total = 0;

  foreach ($suma_numeros as  $numero) {
    # code...
    $total += $numero;
  }

  echo "La suma total es: $total";
}

suma(2, 50, 48);

echo '<br>';


//? funciones con tipado definido 

// declare(strict_types=1);

function soloStrings(string $valor1, int $valor2)
{
  return $valor1 . ' ' . $valor2;
}

echo soloStrings("Todo yo", 3);

echo '<br>';

//? cadena de strings

$cadena = 'Dayana jaimes y Gulliano Jaimes';

echo $cadena[3];
echo '<br>';

echo mb_strlen($cadena);
echo '<br>';

echo str_contains($cadena, 'Gulliano') ? 'Si se encuentra' : 'No se encuentra';
echo '<br>';

echo str_replace('&', 'y', $cadena);
echo '<br>';



//? Arrays unidimensionales

$array = []; //inicializacion de un array vacio

$array[] = 'tierra'; //de esta manera añadios un valor a nuestro array

echo $array[0];
echo '<br>';


$array_two = [
  'nombre' => 'Karen Dayana Jaimes',
  'email' => '',
  'celular' => 3142924255
];

$array_two['email'] = 'kdaza234@gmail.com';

echo $array_two['email'];
