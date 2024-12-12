<?php
  $idade = 17;
  if ($idade >= 19) {
    echo "VocÊ é maior de idade.<br>";
  }else{
    echo "Você é menor de idade.<br>";
  }

  echo "números de 1 a 10:<br>";
  for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
  }
  
  echo "<br> Verificação Par ou Impar:<br>";
  for ($i = 1; $i <= 10; $i++) {
    echo "$i é " . ($i % 2 == 0 ? "par" : "impar") . "<br>";
  }
?>