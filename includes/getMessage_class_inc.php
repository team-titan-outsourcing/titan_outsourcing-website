<?php

if(isset($_POST['get_id'])){
    include '../classes/dbh_class.php';
    include '../classes/messages_class.php';
    include '../classes/getmessagescont_class.php';
    
    $get_id = $_POST['get_id'];
    $messages = new MessageData($get_id);
    $datas = $messages->getMessagedata();

    foreach ($datas as $data) {
        if('admin'==$data['usertype']){
            ?>
                <div class="user-rev">
                    <div class="img">

                    </div>
                    <div class="message-info message-send">
                        <p>
                           <?=$data['message_text'] ?>
                        </p>
                    </div>
                </div>
            <?php
        }elseif('client'==$data['usertype']){
            ?>
                <div class="user-sent">
                    
                    <div class="message-info message-send">
                        <p>
                            <?=$data['message_text'] ?>
                        </p>
                    </div>
                </div>
            <?php
        }
    }

}   
?>