<?php


class Question

{

    private $question;
    private $id;
    private $image;

    public function __construct($question, $id, $image)
    {
        $this->question = $question;
        $this->id = $id;
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


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
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