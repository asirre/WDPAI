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

    public function checkAnswer()
    {
        Shared::checkSession();
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        $correct_answ_id = $this->testRepository->getCorrectAnswId($data);
        if((int)$data["id"]===$correct_answ_id)
        {
            $_SESSION['points']= $_SESSION['points']+1;
        }

        echo json_encode($correct_answ_id);
    }

    public function testResults()
    {
        Shared::checkSession();
        if ($this->isPost() && $_SESSION['points'] && $_SESSION['id']) {
            $this->testRepository->saveResults($_SESSION['id'], $_SESSION['points']);
            $_SESSION['points']=0;
            return $this->render('test-results', ['messages' => ['Zapisano!']]);

        }
        return $this->render('test-results');
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
