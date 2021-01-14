<?php

require 'func/calculate.php';

$input1 = 0;
$input2 = 0;

if($_POST['input1'] != '')
    $input1 = $_POST['input1'];
else
    echo "Data Input 1 harus diisi <br />";

if($_POST['input1']  != '')
    $input2 = $_POST['input2'];
else
    echo "Data Input 2 harus diisi <br />";

$operator = $_POST['operator'];

$hasil = kalkulator($input1, $input2, $operator);
echo "Hasil dari $input1 $operator $input2 = " . $hasil;