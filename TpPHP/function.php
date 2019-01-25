
<?php

function strfunction($str){
    // get the string
$arr1 = str_split($str);
if ($str!=null){
    echo ("<h1>Your Word was  :<br><i>".$str."</i><br></h1>");

foreach ($arr1 as $item)
   {
echo ("<p>".strtoupper($item)."</p> / ");
      
    }

}
    $_POST=null;
}


?>