

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Td 5 Nouri MOHAMED </title>
    <link rel="stylesheet" type="text/css" href="Style/Style.css">

      <link href='http://fonts.googleapis.com/css?family=Rajdhani|Pacifico' rel='stylesheet' type='text/css'/>
  </head>
<body>
    
     <div class="wrapper">
    <div class="title">
      Resualt
  
         
         
<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 25/04/2017
 * Time: 20:23
 */

require ("Functions.php");

     if(checked()){
     echo getoperation($_GET["Number1"],$_GET["Number2"],$_GET["op"]);


     }else{
   echo ("invalide operation please try agin later");


     }




        
        
    ?>
        
        
</div>