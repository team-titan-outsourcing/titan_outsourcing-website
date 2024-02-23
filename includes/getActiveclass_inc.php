<?php

if(isset($_POST['admin'])){

    include '../classes/dbh_class.php';
    include '../classes/messages_class.php';
    
    $message = new Message();
    $ids = $message->getIds();



    for($x=0;$x<count($ids);$x++){
        $data = $message->getLatest($ids[$x][0]);
        ?>
            <a class="user-info <?php echo ($data['status']==0?"unseen":"seen") ?>" href="chat_admin.php?id=<?=$data['reciever_id'] ?>">
                <div class="circle"></div>
                <div class="user-name">
                    <?=$data['full_name'] ?>
                </div>
                <div class="user-chat">
                    <?=$data['message_text'] ?>
                </div>
                <div class="count-unseen-message">
                    <div class="unseen-color">
                        1
                    </div>
                </div>
            </a>
            <hr>
        <?php
    }
    
}?>