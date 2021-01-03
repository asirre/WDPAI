<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Question.php';

class TestRepository extends Repository
{

    public function getQuestions(): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.test ');

        $stmt->execute();

        $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($questions as $question) {
            $result[] = new Question(
                $question['question'],
                $question['correct_ans'],
                $question['image']
            );
        }

        return $result;

    }
}
