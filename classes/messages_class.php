<?php

class Message extends Dbh{

    public function insert($sender, $message, $reciever){
        $this->connect()->prepare("INSERT INTO `message_tb`(`sender_id`,`message_text`, `reciever_id`) VALUES (?, ?, ?);")->execute(array($sender, $message, $reciever));
        return 'success';
    }

    public function getMessage($reciever_id){
        $sql = "SELECT c.fname, c.lname, c.usertype, m.sender_id, m.reciever_id ,m.message_text, m.sent_time FROM client_tb AS c INNER JOIN message_tb AS m ON m.reciever_id = c.client_id WHERE m.reciever_id = ? OR m.sender_id = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$reciever_id, $reciever_id]);
        if($stmt->rowCount()==0){
            return 'empty_message';
        }else{
            return $stmt->fetchAll();
        }
    }

    public function getIds(){
        $sql = "SELECT MAX(message_id) AS latest_id FROM message_tb WHERE sender_id = 1 GROUP BY reciever_id";
        $stmt = $this->connect()->query($sql);
        return $stmt->fetchAll();
    }

    public function getLatest($message_id){
        $sql = "SELECT m.message_id, CONCAT(c.fname, ' ',c.lname) as full_name, m.message_text, m.sent_time, c.usertype, m.reciever_id, m.status FROM message_tb as m INNER JOIN client_tb as c ON m.reciever_id = c.client_id WHERE m.message_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$message_id]);
        return $stmt->fetch();
    }

    public function getCountMessage(){

        $sql = "SELECT COUNT(status) AS total_number FROM message_tb WHERE sender_id = 1";
        $stml = $this->connect()->query($sql);
        return $stml->fetch();

    }

    public function getUser($user_id){
        $sql = "SELECT * FROM `client_tb` WHERE client_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetch();
    }
    

}