<?php

/**
 * Created by PhpStorm.
 * User: moham
 * Date: 11/04/2017
 * Time: 00:25
 */
class person
{


    public $name;
    public $lastname;
    public $phone;

    function display(){

        $display="<br><b>Your Name: </b><br>";
        $display.=$this->name;
        $display.="<br> <b>Your Last name :</b><br>";
        $display.= $this->lastname;
        $display .=" <br><b>Your Phone Number: </b><br> ";
        $display.= $this->phone;
        return   $display;
    }


    function phoneNumber(){

        return $this->phone;

    }


}