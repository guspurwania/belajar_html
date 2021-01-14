<!DOCTYPE html>
<html>
<body>

<?php
    $str = $_POST['input'];
    $arr = explode(" ",$str);

    require 'func/calculate.php';

    $hasil = kalkulator($arr[0], $arr[2], $arr[1]);
    echo $str .' = '. $hasil;
?> 

</body>
</html>