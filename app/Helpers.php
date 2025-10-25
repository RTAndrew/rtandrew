<?php

use Carbon\Carbon;


// Saber a diferenca de dias entre 
// a data que do post publicado e o dia actual
    function getDiffPostData($data){
        $created = new Carbon($data);
        $now = Carbon::now();

        $difference = ($created->diff($now)->days < 40)
            ? 'novo'
            : "";
        return $difference;
    }


// Default delay time 
// To save the view count
function viewDelayTime() {
    return 3;
}








// Trocar os numeros inteiros 
// por numeros romanos
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










//Convert to UTF-8
function convert2utf8($text){
    return html_entity_decode($text, ENT_QUOTES, "utf-8");
}

    //Convert Text to HTML UTF-8
    function convertText2UTF($text) {
        $html_markup_array = array("\r", "\n", '"', '<div>', '</div>', '<p>', '</p>');
        $strip_html_markup = str_replace($html_markup_array, '', convert2utf8($text));
        return $strip_html_markup;
    }



    // Truncar a descricao para o uso no METATAG
    // 150 Maximum Characters
    function truncarMetaDescription($descricao) {
        $strip_html_markup = strip_tags($descricao, '<br>');
        $truncar = str_limit($strip_html_markup, 150);
        $result_utf8 = convert2utf8($truncar);
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








// Atribuir diferentes tamanhos do titulo do Texto
// Baseado no tamanho da descricao
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

    return $tamanho;    
}








// Opengraph Image Path
function getSiteIdentityImage() {
    $image = 'img/opengraph-image.jpg';
    return $image;
}


    // Atribuir a qualidade das imagens do Cloudinary
    function cloudinaryImagePath($image, $quality) {

        $cloudinary_url = "https://res.cloudinary.com/db9ha9ox6/image/upload/";
        
            if($quality != null ?? $quality != "") {
                $quality_of_transformation = "q_" . '' . $quality . '/';
                return $cloudinary_url . '' . $quality_of_transformation . '' . $image; 
            }

        return $cloudinary_url . '' . $image;
    }

    // Return Textos Image custom image
    function getTextoImage($texto_image){
        // Remove all white space, tabs, a line breaks
        $texto_with_no_space = preg_replace('/\s+/', '', $texto_image);

        if ($texto_with_no_space != null)
            return cloudinaryImagePath($texto_with_no_space, '');
        else
            return asset(getSiteIdentityImage());
    }
// Auto-reload test - Sat Oct 25 23:24:34 CEST 2025
