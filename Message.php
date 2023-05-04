<?php
class Message {
    private $id;
    private $message;
    private $date;

    public function __construct($message, $date, $id) {
        $this->message = $message;
        $this->date = $date;
        $this->id = $id;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getDate() {
        return $this->date;
    }
    public function getId() {
        return $this->id;
    }
    
}