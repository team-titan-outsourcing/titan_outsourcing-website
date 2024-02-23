<?php

class LoginContr extends Login{
    private $email;
    private $password;

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function isValid(){
        
        $valid = false;
        if($this->checkInput($this->email, $this->password)){
            $valid = false;
        }elseif(!($this->checkEmail($this->email))){
            $valid = false;
        }elseif($this->validData($this->email, $this->password)){
            $valid = true;
        }
        return $valid;
    }

    public function checkInput($email, $password){
        $check = false;
        if($email==""||$password==""){
            $check = true;
        }else{
            $check = false;
        }
        return $check;
    }

    public function checkEmail($email){
        $check = false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $check = false;
        }else{
            $check = true;
        }
        return $check;
    }

    function validData($email, $password){
        return $this->validDb($email, $password);
    }

}