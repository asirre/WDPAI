<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Question.php';
require_once __DIR__.'/../repository/TestRepository.php';
require_once __DIR__.'/../repository/AnswerRepository.php';

class TestController extends AppController
{
    private $testRepository;
    private $answerRepository;

    public function __construct()
    {
        parent::__construct();
        $this->testRepository = new TestRepository();
        $this->answerRepository = new AnswerRepository();
    }


    public function test()
    {
        $questions = $this->testRepository->getQuestions();
        $this->render('test', ['questions' => $questions]);

    }
}
