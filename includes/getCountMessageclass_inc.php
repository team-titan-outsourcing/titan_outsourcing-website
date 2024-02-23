<?php

if(isset($_POST['admin'])){

    include '../classes/dbh_class.php';
    include '../classes/messages_class.php';

    $message = new Message();
    $result = $message->getCountMessage();
    echo $result['total_number'];
}