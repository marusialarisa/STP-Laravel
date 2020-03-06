<?php


require '../../vendor/autoload.php';
require '../../config.php';
//new \Rentit\Models\DB();
new \Rentit\Models\Database();
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users',function($table){
    $table->increments('id');
    $table->string('username')->unique();
    $table->string('password');
    $table->timestamps();

});
Capsule::schema()->create('reserva',function($table){
    $table->increments('idreserva');
    $table->string('fecha_hora_inicio');
    $table->string('fecha_hora_fin');
    $table->string('descripcion');
    $table->integer('idusuario')->unsigned();
    $table->integer('idsala')->unsigned();
    $table->timestamps();

    $table->foreign('idusuario')->references('id')->on('users');
});
/*
Capsule::schema()->create('users',function($table){
    $table->increments('id');
    $table->string('email')->unique();
    $table->string('passw');
    $table->string('phone');
    $table->json('roles')->nullable();
    $table->rememberToken();
    $table->timestamps();
});
Capsule::schema()->create('properties',function($table){
    $table->increments('id');
    $table->string('title');
    $table->string('price');
    $table->string('description');
    $table->integer('user_id')->unsigned();
    $table->timestamps();
    $table->foreign('user_id')->references('id')->on('users');
});
*/