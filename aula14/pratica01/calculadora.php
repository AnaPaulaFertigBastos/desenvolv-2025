<?php 
  namespace Calculadora;
  class Calculadora {

    public function validarNumero($numero1, $numero2) : bool {
       try {
        if (!is_numeric($numero1) || !is_numeric($numero2)) {
          return false;
        }

        $numero1 = (float) $numero1;
        $numero2 = (float) $numero2;

        if ($numero1 == null || $numero2 == null) {
          return false;
        }
        return true;
      }
      catch (Exception $e) {
        return false;
      }
    }

    public function somar($a, $b) {
      return $a + $b;
    }

    public function subtrair($a, $b) {
      return $a - $b;
    }

    public function multiplicar($a, $b) {
      return $a * $b;
    }

    public function dividir($a, $b) {
      if ($b == 0) {
        throw new \InvalidArgumentException("Divisão por zero não é permitida.");
      }
      return $a / $b;
    }
  }

?>