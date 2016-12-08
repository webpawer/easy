<?php
require "vendor/autoload.php";

use App\Controllers\UsersControllers;
use App\Models\User;
use Plagin\Time;
use Haks\ShelMysql;
use Any\ClassDefold;



$users = new UsersControllers();
$users->show("Michael");

$user = new User();

$getDate = new Time();

$mysql = new ShelMysql();

echo "<br>" . klei("Klaus"," Hallo");

$classtemp = new ClassTemp();

$classdefold = new ClassDefold();