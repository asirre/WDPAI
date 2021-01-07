<?php


class Question

{

    private $question;
    private $id_correct_ans;
    private $image;

    public function __construct($question, $correct_ans, $image)
    {
        $this->question = $question;
        $this->id_correct_ans = $correct_ans;
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


    public function getIdCorrectAns()
    {
        return $this->id_correct_ans;
    }


    public function setIdCorrectAns($id_correct_ans): void
    {
        $this->id_correct_ans = $id_correct_ans;
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