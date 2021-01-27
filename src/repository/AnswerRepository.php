<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Answer.php';

class AnswerRepository extends Repository
{

    public function getAnswers(int $question_id): array
    {

        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.answers WHERE answers.question_id = :question_id
        ');

        if($question_id) {
            $stmt->bindParam(':question_id', $question_id, PDO::PARAM_INT);
        }
        $stmt->execute();

        $answers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($answers as $answer) {
            $result[] = new Answer(
                $answer['id'],
                $answer['answer'],
                $answer['is_correct'],
                $answer['question_id']
            );
        }

        return $result;

    }
}
