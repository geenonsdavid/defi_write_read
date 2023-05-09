<?php
class Message {
    private $id;
    private $content;
    private $date;

    public function __construct(string $content) {
        $this->content = $content;
        $this->date = new DateTime();
    }

    public function getId() {
        return $this->id;
    }
    public function getContent() {
        return $this->content;
    }

    public function getDate() {
        return $this->date;
    }

    
}