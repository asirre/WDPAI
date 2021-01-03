<?php

class Answer {

    private $id;
    private $answer;

    public function __construct($id, $answer)
    {
        $this->id = $id;
        $this->answer = $answer;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getAnswer()
    {
        return $this->answer;
    }

    public function setAnswer($answer): void
    {
        $this->answer = $answer;
    }



}