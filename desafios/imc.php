<?php

$altura = 1.72;
$peso = 72;
$imc = $peso/($altura*$altura);

if ($imc <= 18.5){
    echo "Seu imc é de $imc, você está abaixo do seu peso ideal.";
} else if ($imc <= 24.9){
    echo "Seu imc é de $imc, você está no seu peso ideal.";
} else if ($imc <= 29.9){
    echo "Seu imc é de $imc, você está acima do seu peso ideal.";
} else if ($imc <= 34.9){
    echo "Seu imc é de $imc, você está obeso.";
} else if ($imc >= 35){
    echo "Seu imc é de $imc, você está obeso ao extremo.";
}

?>