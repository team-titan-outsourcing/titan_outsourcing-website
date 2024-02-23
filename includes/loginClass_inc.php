<?php
session_start();
if(isset($_POST['password'])&&isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    include '../classes/dbh_class.php';
    include '../classes/login_class.php';
    include '../classes/loginContr_class.php';

    $login = new LoginContr($email, $password);
    echo var_export($login->isValid());
}