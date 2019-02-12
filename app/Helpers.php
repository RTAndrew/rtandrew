<?php

// Default delay time 
// To save the view count
function viewDelayTime() {
    return 3;
}

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

function getSiteIdentityImage() {
    $image = 'public/img/opengraph-image.jpg';
    return $image;
}


//Convert Text to HTML UTF-8
function convertText2UTF($text) {
    $convertion = html_entity_decode($text, ENT_QUOTES, "utf-8");
    $arrayOfChars = array("\r", "\n", '"', '<div>', '</div>', '<p>', '</p>');
    $removeChar = str_replace($arrayOfChars, '', $convertion);
    return $removeChar;
}



// Truncar a descricao para o uso no METATAG
// 150 Characteres allowed
function truncarMetaDescription($descricao) {
    $strip_html_markup = strip_tags($descricao, '<br>');
    $truncar = str_limit($strip_html_markup, 150);
    $result_utf8 = html_entity_decode($truncar, ENT_QUOTES, "utf-8");
    return str_replace("<br />", " ", $result_utf8);
}



// Remover HTML Markup
// Truncar a descricao dos textos
// Retornar String em formato UTF-8
function truncarDescricao($descricao) {
    $strip_html_markup = strip_tags($descricao, '');
    $truncar = str_limit($strip_html_markup, 340);
    // $result_utf8 = html_entity_decode($truncar, ENT_QUOTES, "utf-8");
    return $truncar;
}




// Tamanho das Letras
function determineFontSize($quote, $descricao) {

$numWords=strlen ($quote);
$numDescricao=strlen ($descricao);
$tamanho = 0;

   

    // Condicao apenas para o Titulo
    if (($numWords > 1) && ($numWords < 10)) {
        $tamanho = 65;

    } elseif (($numWords >= 10) && ($numWords < 20)) {
        $tamanho = 55;

    } elseif (($numWords >= 20) && ($numWords < 30)) {
        $tamanho = 42;

    } elseif ( (($numWords >= 30) && ($numWords < 40)) && ($numDescricao <= 100)) {
        $tamanho = 35;

    } else {
        $tamanho = 25;

    }




    // if ($numDescricao < 50) {
    //     $tamanho = 50;
    // } if (($numDescricao < 50) && ($numWords > 20)) {
    //     $tamanho = 35;
    // }



    // if ($numDescricao >= 320) {
    //     $tamanho = 30;
    // } if ( ($numDescricao >= 300) && (($numWords > 1) && ($numWords < 10)) )  {
    //     $tamanho = 65;
    // }





    return $tamanho;

    

}



function cloudinaryImagePath($image, $quality) {

    $cloudinary_url = "http://res.cloudinary.com/db9ha9ox6/image/upload/";
    
        if($quality != null ?? $quality != "") {
            $quality_of_transformation = "q_" . '' . $quality . '/';
            return $cloudinary_url . '' . $quality_of_transformation . '' . $image; 
        }

    return $cloudinary_url . '' . $image;


}

