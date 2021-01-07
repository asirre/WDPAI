<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Answer.php';

class AnswerRepository extends Repository
{

    public function getAnswers(int $page = null): array
    {
        $page_limit = $page*3;
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.answers LIMIT :page_limit OFFSET (:page_limit-3)
        ');

        if($page) {
            $stmt->bindParam(':page_limit', $page_limit, PDO::PARAM_INT);
        }
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
