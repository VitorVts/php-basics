<!-- 1. Crie uma função que retorne o fatorial de um número -->

<?php

function fatorial($n): int {
    
    if ($n == 0) {
        return 1;
    }
    
    return $n * fatorial($n -1);

}

var_dump(fatorial(5));