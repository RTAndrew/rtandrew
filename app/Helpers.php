<?php


// Numeros Romanos
function romanNumerals($num) {
    $n = intval($num);
    $res = '';
 
    /*** roman_numerals array  ***/
    $roman_numerals = array(
                'M'  => 1000,
                'CM' => 900,
                'D'  => 500,
                'CD' => 400,
                'C'  => 100,
                'XC' => 90,
                'L'  => 50,
                'XL' => 40,
                'X'  => 10,
                'IX' => 9,
                'V'  => 5,
                'IV' => 4,
                'I'  => 1);
 
    foreach ($roman_numerals as $roman => $number) 
    {
        /*** divide to get  matches ***/
        $matches = intval($n / $number);
 
        /*** assign the roman char * $matches ***/
        $res .= str_repeat($roman, $matches);
 
        /*** substract from the number ***/
        $n = $n % $number;
    }
 
    /*** return the res ***/
    return $res;
}







// Truncar a descricao dos textos
function truncarDescricao($descricao) {
     $truncar = str_limit($descricao, 340);
     return $truncar;
}






// Tamanho das Letras
function determineFontSize($quote, $descricao) {

$numWords=strlen ($quote);
$numDescricao=strlen ($descricao);
$tamanho = 0;

   

    // Condicao apenas para o Titulo
    if (($numWords > 1) && ($numWords < 10)) {
        $tamanho = 60;

    } elseif (($numWords >= 10) && ($numWords < 20)) {
        $tamanho = 50;

    } elseif (($numWords >= 20) && ($numWords < 30)) {
        $tamanho = 35;

    } elseif ( (($numWords >= 30) && ($numWords < 40)) && ($numDescricao <= 100)) {
        $tamanho = 25;

    } else {
        $tamanho = 10;

    }




    if ($numDescricao < 50) {
        $tamanho = 50;
    } if (($numDescricao < 50) && ($numWords > 20)) {
        $tamanho = 35;
    }



    if ($numDescricao >= 320) {
        $tamanho = 30;
    } if ( ($numDescricao >= 300) && (($numWords > 1) && ($numWords < 10)) )  {
        $tamanho = 65;
    }





    return $tamanho;

    

}

