<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$IMC = $peso / ($altura * $altura);
$IMC = round($IMC, 2);

if ($IMC < 18.5) {
    echo "ABAIXO DO PESO" . $IMC;
} elseif ($IMC < 25) {
    echo "peso normal" . $IMC;
} elseif ($IMC < 30) {
    echo "excesso de peso" . $IMC;
} elseif ($IMC < 35) {
    echo "obesidade classe 1" . $IMC;
} elseif ($IMC < 40) {
    echo "obesidade classe 2" . $IMC;
} else {
    echo "obesidade classe 3" . $IMC;
    echo " Sai do fake thais carla";
}
