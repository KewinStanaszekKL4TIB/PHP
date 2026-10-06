<?php
 $value=5;
 function functionValue($val){
    $val++;
    echo $val. "<br>";
 }
   
  functionReference($value);
  echo $value;
?>

//Referencja jest to powiazanie zmienne z inna zmienna
