<?php
/**
 * Created by PhpStorm.
 * User: moham
 * Date: 25/04/2017
 * Time: 22:07
 */


function checked()
{


    foreach ($_GET as $name => $value) {
        if (!(isset($value)) && !(is_numeric($value))) {

            echo "<h3 class='error'> error $name </h3>";
            echo "<h3 class='error'> error $value </h3>";
            return false;
        }
        else return true;

    }

}
function getoperation( $number1 ,$number2,$op){

 if(! empty($number1) && ! empty($number2)) {
     switch ($op) {

         case  "+" :
             return (int)$number1 + (int)$number2;
             break;
         case  "-" :
             return (int)$number1 - (int)$number2;
             break;
         case  "*" :
             return (int)$number1 * (int)$number2;
             break;
         case  "/" :
             return (int)$number1 / (int)$number2;
             break;
     }
 }

}

 function finderror()
 {

     global $required;
     global $missing;
     global $expected;
     foreach ($_GET as $key => $value) {
        // $value = is_array($value) ? $value : trim($value);
         if (empty($value) && in_array($key, $required)) {

             $missing[] = $key;
             $$key = '';


         } elseif (in_array($key, $expected)) {
             $$key = $value;
         }

     }

 }