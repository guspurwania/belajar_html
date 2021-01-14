<?php

function kalkulator($input1, $input2, $operator){
    switch($operator){
        case '+' : 
            return $input1 + $input2;
            break;
        case '-' : 
            return $input1 - $input2;
            break;
        case 'x' :
            return $input1 * $input2;
            break;
        case '/' :
            return $input1 / $input2;
            break;
        default : 
            return 0;
            break;
    }
}