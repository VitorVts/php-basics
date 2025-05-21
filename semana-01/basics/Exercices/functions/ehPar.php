<!-- 2. Crie uma função ehPar que retorna true se o número for par -->

<?php

function ehPar($num): string {

    if ($num % 2 == 0) {
        return "$num é par" . PHP_EOL;
    }
    return "$num não é par" . PHP_EOL;
}


echo ehPar(2);