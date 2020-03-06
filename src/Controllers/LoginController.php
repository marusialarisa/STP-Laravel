<?php


namespace Rentit\Controllers;


use Rentit\Controller;

use Rentit\Models\Database;
use Rentit\Models\Registrar;

use Rentit\Models\Session;
new Database();
final class LoginController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {
        $data = ['title' => 'STP'];

        $this->render($data);
    }
        function error() {
        throw new \Exception("[ERROR::]:Non existent method");
    }



    public function login(){
        if(!empty($_REQUEST['username'])&&(!empty($_REQUEST['password']))){
            $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
            $passwd_str=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            var_dump('DEBUG ENTRA ' . $username);

            session_name($username);

            $username = Registrar::where('username', $username)->first();

         //   var_dump($username->password);
         //   var_dump($passwd_str);
        //    var_dump(password_verify($passwd_str, $username->password));

          //  var_dump('VERIFICA?: '.password_verify($passwd_str, $username->password));

            if ($username != null && password_verify($passwd_str, $username->password)) {

                $_SESSION['username'] = $_POST['username'];

                session_start();

                var_dump('DEBUG USERNAME: '.$_POST['username']);
              //  Session::set('username',$username);
               // Session::set('logged',true);

                header('Location:/');
                return true;
            }
               else{
                  // header('location:/login');
                   $this->error("Password o usuario incorrecta");



               }
        }
    }
}