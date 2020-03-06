<?php
//development mode
ini_set('display_errors','On');
//autoload
require __DIR__.'/vendor/autoload.php';

require 'config.php';

//use Rentit\Models\DB;
use Rentit\Models\Database;
use Illuminate\Database\Capsule\Manager as Capsule;

use Rentit\Database\BuilderSQL;
use Rentit\Controller\RegistrarController;
use Rentit\Controller\LoginControler;
use Rentit\Controller\ReservaController;

use Rentit\App;




//session_start();


//El método estático de de la classe App
App::run();




//new Database();
//$user=\Rentit\Controllers\RegistrarController::create_user("mirela",password_hash("stpstp",PASSWORD_BCRYPT));
