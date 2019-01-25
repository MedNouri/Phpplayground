<?php
require ("Functions.php");
  $errors =[];
   $missing = [];

if (isset( $_GET['op'])) {

    $expected = ['Number1','Number2'];
    $required= ['Number1','Number2'];
    finderror();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>STRING APP BY Nouri MOHAMED </title>
    <link rel="stylesheet" type="text/css" href="Style/Style.css">

    <link href='http://fonts.googleapis.com/css?family=Rajdhani|Pacifico' rel='stylesheet' type='text/css'/>
</head>
<body>



<div class="wrapper">
    <div class="title">
        Floating calculator app
        <?php if ($missing|| $errors) : ?>
        <p class="errormes">Pleae fix the item (s) indicated</p>
        <?php endif; ?>
    </div>
    <form class="form" method="get" action="<?php $_SERVER['PHP_SELF'];?> ">

        <?php if (($missing )&& (in_array('Number1',$missing)) ): ?>
        <span class="errormes">Please enter  your First Number </span>
        <?php endif; ?>
        <input type="text" class="name field-in font"  name="Number1"  placeholder="First Number"  value="   <?php
         if($errors || $missing ){
             echo $Number1;  } ?>

        "/>
        <?php if (empty($missing )&& (in_array('Number1',$missing))) : ?>
            <span class="errormes">Please enter  your   Second Number </span>
            <?php endif; ?>


        <input type="text" class="email field-in font" name="Number2" placeholder="Second Number  " value=" <?php if($errors || $missing ){
            echo $Number2;  } ?>

        "/>
        <button class="submit font"    value="+" name="op" href="#">ADD</button>
        <button class="submit font"   value="-"  name="op"  href="#">SUB</button>
        <button class="submit font"   value="*"  name="op"  href="#">MUL</button>
        <button class="submit font"   value="/"  name="op"  href="#">DIV</button>
<br>
        <br>


  <?php

  $s =null;
  if (isset( $_GET['op'])) {

      if (checked() ) {

          $s = getoperation($_GET['Number1'], $_GET['Number2'], $_GET['op']);

      }
  }
  ?>

        <input type="text" class="name field-in font"  name="Reualt"  placeholder=" <?= $s ?> "/>
    </form>
    <div class="shadow"></div>
</div>

</body>
</html>