<?php


class Question

{

    private $question;
    private $correct_ans;
    private $image;

    public function __construct($question, $correct_ans, $image)
    {
        $this->question = $question;
        $this->correct_ans = $correct_ans;
        $this->image = $image;
    }

    public function getQuestion()
    {
        return $this->question;
    }


    public function setQuestion($question): void
    {
        $this->question = $question;
    }


    public function getCorrectAns()
    {
        return $this->correct_ans;
    }


    public function setCorrectAns($correct_ans): void
    {
        $this->correct_ans = $correct_ans;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }


}