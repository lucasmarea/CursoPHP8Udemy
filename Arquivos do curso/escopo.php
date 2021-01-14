<?php

$hcode = "https://hcode.com.br";


function exibir(){
   global $hcode;
   $hcode = "https://hcode.com.br";
  
}
exibir();
echo $hcode;