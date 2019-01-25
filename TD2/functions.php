<?php
/**
 * Created by PhpStorm.
 * User: mohamed Nouri
 * Date: 06/03/2017
 * Time: 19:43
 */


// exercice 1



function afficher_date(){
// Prints the day, date, month, year, time, AM or PM
    echo date("l jS  f F Y h:i:s A");
}


function afficher_msg_date($msg){

echo ("$msg ".date("f F Y h:i;s"));

echo ("<hr>");
}

function   Aficher_tableau($tab,$border){
    echo("<table style=" . $border . ">");

    foreach ($tab as $item => $indice) {
        echo ("<tr >");
        echo ("<th>".$indice."</th>");
        echo ("</tr ><tr >");
        echo ("<td>".$item."</td>");
        echo ("</tr>");
    }
    echo ("</table>");

}
