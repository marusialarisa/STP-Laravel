<?php


namespace Rentit\Controllers;


use Rentit\Controller;

use Rentit\Models\Database;
use Rentit\Models\Registrar;
new Database();
final class RegistrarController extends Controller
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

    function error()
    {
        throw new \Exception("[ERROR::]:Non existent method");
    }





    public function create_user($username, $password)
    {
        $user = Registrar::create([

            'username' => $username,
            'password' => $password]);

       // echo 'User created';
        return $user;
    }

    public function registrar()
    {

        if (!empty($_REQUEST['username']) &&
            !empty($_REQUEST['password']) &&
            !empty($_REQUEST['password2'])
        ) {


            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $passwd1 = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $passwd2 = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING);

          //  session_id();

            session_name($username);


            if ($passwd1 == $passwd2) {
                $passwdhash = password_hash($passwd1, PASSWORD_ARGON2I);


               try {

                    $user = $this->create_user($username, $passwdhash);
                   var_dump($user);

                   $_SESSION['username'] = $_POST['username'];

                   session_start();
                   

                    header('location:/');
                return true;

                } catch (\Exception $e) {
                    $this->error($e->getMessage());

                }


            } else {
                $this->error("Password does not match");
            }
        }
        $this->error("Fill the form");


    }



}



