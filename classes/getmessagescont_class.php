<?php

class MessageData extends Message{

    private $get_id;

    public function __construct($get_id){
        $this->get_id = $get_id;
    }

    public function getMessagedata(){
        return $this->getMessage($this->get_id);
    }

    public function getActivite(){
        return $this->getActiviteShow($this->get_id);
    }

}