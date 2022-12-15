<?php
 $n=8;

 for ($i=0; $i < $n; $i++) {
  $arrayFila=[];
  for ($j=0; $j <$n; $j++) {
    if ($i==$j) {
      array_push($arrayFila, "X");
    } else {
       array_push($arrayFila, "_");
    }
    
  }
  $arrayFilaReverce= array_reverse($arrayFila);
  $resulX = "";
  for ($k=0; $k < count($arrayFilaReverce) ; $k++) {
    if ($arrayFila[$k]=="X" || $arrayFilaReverce[$k] == "X") {
      $resulX = $resulX."X";
    } else {
       $resulX = $resulX."_";
    }
  }
  echo "<br>";
  print_r($resulX);
 }

