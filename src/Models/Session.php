<?php


namespace Rentit\Models;


use Illuminate\Database\Eloquent\Model as Eloquent;

class Session extends Eloquent
{

    public function save(){
      //  $_SESSION['username'] ;
        $this->session('id');
        $this->session('username');
    }

}