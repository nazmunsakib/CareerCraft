<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use CareerCraft\Classes\User;
$user   = new User();

/**
 * User Registration
 */
if( isset( $_POST['register'] ) ){
    $name       =  $_POST['name'] ?? '';
    $email      =  $_POST['email'] ?? '';
    $password   =  $_POST['password'] ?? '';
    $user_type  =  $_POST['user_type'] ?? '';

    $register   = $user->register($name, $email, $password, $user_type);

    var_dump(  $register );
}

/**
 * User Login
 */
if( isset( $_POST['login'] ) ){
    $username   =  $_POST['username'] ?? '';
    $password   =  $_POST['password'] ?? '';
    $user->login( $username, $password );
}