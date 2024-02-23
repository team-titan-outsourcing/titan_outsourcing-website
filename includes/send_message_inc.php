<?php

if(isset($_POST['get_id'])&&isset($_POST['message'])&&isset($_POST['admin'])){
    include '../classes/dbh_class.php';
    include '../classes/messages_class.php';
    include '../classes/messagescont_class.php';

    $get_id = $_POST['get_id'];
    $message = $_POST['message'];
    $admin = $_POST['admin'];
    $message = new MessageCont($message, $admin, $get_id);
    echo $message->sendMessage();
}