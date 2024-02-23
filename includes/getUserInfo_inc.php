<?php

if(isset($_POST['get_id'])){
    include '../classes/dbh_class.php';
    include '../classes/messages_class.php';
    include '../classes/getUserInfoContr_class.php';
    
    $get_id = $_POST['get_id'];

    $userInfo = new GetInfoContr($get_id);
    print_r(json_encode($userInfo->getuserinfo()));

}