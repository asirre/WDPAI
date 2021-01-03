<?php
require_once 'AppController.php';
require_once __DIR__ . '/../models/Answer.php';
require_once __DIR__.'/../repository/AnswerRepository.php';

class AnswersController extends AppController
{
    private $answerRepository;

    public function __construct()
    {
        parent::__construct();
        $this->answerRepository = new AnswerRepository();
    }


    public function answers()
    {
        $answers = $this->answerRepository->getAnswers();
        $this->render('test', ['answers' => $answers]);

    }

}