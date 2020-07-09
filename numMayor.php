<?php
$numOne = $_POST['numOne'];
$numTwo = $_POST['numTwo'];


if ($numOne % 2 == 0 && $numTwo % 2 == 0) {
  // echo "Ambos numeros son enteros";
  if ($numOne > $numTwo) {
    echo "El numero 1 es mayor que el numero 2";
  }else if($numOne == $numTwo){
    echo "Ambos numeros son iguales";
  }else if($numOne < $numTwo){
    echo "El numero 2 es mayor que el numero 1";
  }
}else{
  echo "Revisa que los numeros sean enteros";
}
?>