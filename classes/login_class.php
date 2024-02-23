<?php

class Login extends Dbh{

    public function validDb($email, $password){
        $password_hash = md5($password);
        $valid = false;
        $sql = "SELECT `client_id`,`username`,`password`,`usertype` FROM `client_tb` WHERE `username`=? AND `password`=?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $password_hash]);
        $row = $stmt->fetch();
        if(count($row)==0){
            $valid = false;
        }elseif(count($row)>0){
            $_SESSION['client_id'] = $row['client_id'];
            $valid = true;
        }
        return $valid;
    }

}