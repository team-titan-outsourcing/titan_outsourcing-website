<?php

class MessageCont extends Message{

    private $message;
    private $sender;
    private $receiver;

    public function __construct($message, $sender, $receiver){
        $this->message = $message;
        $this->sender = $sender;
        $this->receiver = $receiver;
    }

    public function sendMessage(){
        if(!$this->isEmpty()){
            $this->insertMessage();
            return 'success';
        }else{
            return 'empty_input';
        }
    }


    public function isEmpty(){
        $isEmpty = false;
        if($this->message == ""){
            $isEmpty = true;
        }else{
            $isEmpty = false;
        }
        return $isEmpty;
    }

    public function insertMessage(){
        $this->insert($this->sender, $this->message, $this->receiver);
    }


}