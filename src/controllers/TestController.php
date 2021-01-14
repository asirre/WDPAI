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
        Shared::checkSession();
        $page = (int) $_GET['page'] ?? 1;
        $question = $this->testRepository->getQuestion($page);
        $answers = $this->answerRepository->getAnswers($question->getId());
        $max_pages = $this->testRepository->getPages();
        $this->render('test', ['question' => $question,'answers' => $answers, 'page' => $page, 'max_pages' => $max_pages]);

    }
}
