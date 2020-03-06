<?php


namespace Rentit\Models;

use Illuminate\Database\Capsule\Manager as Capsule;
class Database
{
    function __construct()
    {

        $capsule = new Capsule();

        $capsule->addConnection(
            [
                'driver' => DBDRIVER,
                'host' => DBHOST,
                'database' => DBNAME,
                'username' => DBUSER,
                'password' => DBPASS,
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix' => ''
            ]
        );
        $capsule->setAsGlobal();
        $capsule->bootEloquent();


    }



/*

    static function singleton(){
        if(!(self::$instance instanceof self)){
            self::$instance=new self();
        }
        return self::$instance;
    }

        protected function loadConf()
        {
            $file = 'config.php';
            $jsonStr = file_get_contents($file);
            $arrayJson = json_decode($jsonStr);
            return $arrayJson;
        }
*/


}