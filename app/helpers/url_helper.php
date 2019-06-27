<?php
  // Simple page redirect
  function redirect($page){
    header('location: '.URLROOT.'/'.$page);
  }

//   function clean($string) {
//     $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
 
//     return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
//  }


 function cleaner($string) {
  

  $string  = preg_replace('#Ç#', 'C', $string );
    $string  = preg_replace('#ç#', 'c', $string );
    $string  = preg_replace('#è|é|ê|ë#', 'e', $string );
    $string  = preg_replace('#È|É|Ê|Ë#', 'E', $string );
    $string  = preg_replace('#à|á|â|ã|ä|å#', 'a', $string );
    $string  = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $string );
    $string  = preg_replace('#ì|í|î|ï#', 'i', $string );
    $string  = preg_replace('#Ì|Í|Î|Ï#', 'I', $string );
    $string  = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $string );
    $string  = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $string );
    $string  = preg_replace('#ù|ú|û|ü#', 'u', $string );
    $string  = preg_replace('#Ù|Ú|Û|Ü#', 'U', $string );
    $string  = preg_replace('#ý|ÿ#', 'y', $string );
    $string  = preg_replace('#Ý#', 'Y', $string );

    $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
    $string = preg_replace("/[^a-zA-Z]/", "-", $string);
  
    return $string;
}