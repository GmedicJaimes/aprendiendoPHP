<?php 
  //tipos de datos en php
  $un_bool = TRUE;   // un valor booleano
  $un_str  = "foo";  // una cadena de caracteres
  $un_str2 = 'foo';  // una cadena de caracteres
  $un_int  = 12;     // un número entero

  echo gettype($un_bool); // imprime: boolean
  echo '<br>';
  echo gettype($un_str);  // imprime: string
  echo '<br>';
  echo gettype($un_int);

  // Si este valor es un entero, incrementarlo en cuatro
  if (is_int($un_int)) {
      $un_int += 4;

      echo "El nuevo numero es: " . $un_int;
  }

  // Si $un_bool es una cadena, imprimirla
  // (no imprime nada)
  if (is_string($un_bool)) {
      echo "String: $un_bool";
  }
?>