<?php
/**
  *  @author María Ojeda García
  *  @version 1.0
*/

  /**
    * Función multiplica de dos números
    * @param int $num1 número a multiplicar
    * @param int $num2 número a multiplicar
    * @return float
  */

  function multiplica ($num1, $num2) {
      $resultadoMultiplicacion = $num1 * $num2;
      return $resultadoMultiplicacion;

  }


  /**
    * Función divide de dos números
    * @param int $num1 número a dividir
    * @param int $num2 número a dividir
    * @return float
  */

  function divide ($num1, $num2) {
      $resultadoDivision = $num1 / $num2;
      return $resultadoDivision;

  }


$multiplicacion = multiplica (24,42);
echo $multiplicacion;

$division = divide (24,42);
echo $division;
?>
