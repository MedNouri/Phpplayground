<!DCTYPE HTML>
<title>test clas  </title>

    <?php

include 'person.php';

$user= new person;
$user->name="Mohamed ";
$user->lastname="Nouri ";
$user->phone= "55924048";

    echo $user->display();

    ?>

<h3>Phone NUmber  :</h3>
<input type="text" name="name" id="username" value="<?= $user->phoneNumber()?>">
