<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Question.php';

class TestRepository extends Repository
{

    public function getQuestion(int $id): ?Question
    {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.test WHERE id = :id ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
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
