<?php

class GetInfoContr extends Message{

    private $get_id;

    public function __construct($get_id){
        $this->get_id = $get_id;
    }

    public function getuserinfo(){
        return $this->getUser($this->get_id);
    }
}