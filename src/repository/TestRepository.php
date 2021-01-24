<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Question.php';

class TestRepository extends Repository
{

    public function getPages(): ?int
    {


        $stmt = $this->database->connect()->prepare('
            SELECT COUNT(*) FROM public.question');

        $stmt->execute();

        $max_pages = $stmt->fetchColumn();

        if ($max_pages == false) {
            return 0;
        }

        return $max_pages;

    }

    public function getCorrectAnswId($data): ?int
    {
        $answ_id = (int) $data["id"];

        $stmt = $this->database->connect()->prepare('
           SELECT id FROM public.answers WHERE question_id =
            (SELECT question_id FROM public.answers WHERE id=:answ_id) 
            AND is_correct = true;
        ');
        if($data) {
            $stmt->bindParam(':answ_id', $answ_id, PDO::PARAM_INT);
        }
        $stmt->execute();


        return $stmt->fetch(PDO::FETCH_ASSOC)["id"];

    }

    public function getQuestion(int $page = null): ?Question
    {

        $stmt = $this->database->connect()->prepare('
           SELECT * FROM public.question LIMIT 1 OFFSET :page-1;
        ');


        if($page) {
            $stmt->bindParam(':page', $page, PDO::PARAM_INT);
        }

        $stmt->execute();

        $question = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($question == false) {
            return new Question(
                $question[''],
                $question[''],
                $question['']
            );
        }

        return new Question(
            $question['question'],
            $question['id'],
            $question['image']
        );

    }
}
