<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/Knot.php';

class KnotsRepository extends Repository
{
    public function getKnot(int $id): ?Knot
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.knots WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $knot = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($knot == false) {
            return null;
        }

        return new Knot(
            $knot['name'],
            $knot['text'],
            $knot['image']
        );
    }


    public function getKnots(int $page = null, int $pageSize = 6): ?Knot
    {


        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.knots LIMIT 1 OFFSET :page-1
        ');



        if($page) {
            $stmt->bindParam(':page', $page, PDO::PARAM_INT);
            //$stmt->bindParam(':page_size', $pageSize, PDO::PARAM_INT);
        }


        $stmt->execute();

        $knot = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($knot == false) {
            return null;
        }

        return new Knot(
            $knot['name'],
            $knot['text'],
            $knot['image']
        );

    }
}

