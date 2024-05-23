<?php
  $EmailPassword = 'teste';
  $hash = password_hash($EmailPassword, PASSWORD_DEFAULT);

  echo $hash;

  echo "<br>";

  if( password_verify($EmailPassword, $hash) ){
    echo "O hash corresponde ao texto.";
  }else{
    echo "O hash não corresponde ao texto.";
  }