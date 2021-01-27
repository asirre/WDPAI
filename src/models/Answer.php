<?php

class Answer {

    private $id;
    private $answer;
    private $is_correct;
    private $question_id;

    public function getIsCorrect()
    {
        return $this->is_correct;
    }


    public function setIsCorrect($is_correct): void
    {
        $this->is_correct = $is_correct;
    }


    public function getQuestionId()
    {
        return $this->question_id;
    }

    public function setQuestionId($question_id): void
    {
        $this->question_id = $question_id;
    }

    public function __construct($id, $answer, $is_correct, $question_id)
    {
        $this->id = $id;
        $this->answer = $answer;
        $this->is_correct = $is_correct;
        $this->question_id = $question_id;
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