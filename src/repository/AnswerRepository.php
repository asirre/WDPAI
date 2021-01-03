<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Answer.php';

class AnswerRepository extends Repository
{

    public function getAnswers(): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.answers ');

        $stmt->execute();

        $answers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($answers as $answer) {
            $result[] = new Answer(
                $answer['id'],
                $answer['answer']
            );
        }

        return $result;

    }
}
