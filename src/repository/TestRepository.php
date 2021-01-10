<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Question.php';

class TestRepository extends Repository
{

    public function getQuestion(int $page = null): ?Question
    {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.knots LIMIT 1 OFFSET :page-1
        ');


        if($page) {
            $stmt->bindParam(':page', $page, PDO::PARAM_INT);
        }

        $stmt->execute();

        $question = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($question == false) {
            return null;
        }

        return new Question(
            $question['question'],
            $question['id_correct_ans'],
            $question['image']
        );

    }
}
