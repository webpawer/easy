<?php

namespace App\Controllers;

class UsersControllers{
    function __construct(){
        echo "User instantied";
    }

    function show($arg){
        echo "<br> $arg Heil Bruda";
    }
}