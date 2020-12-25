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

    public function getKnots(): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.knots ');

        $stmt->execute();

        $knots = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($knots as $knot)
        {
            $result[] = new Knot(
                $knot['name'],
                $knot['text'],
                $knot['image']
            );
        }

        return $result;

    }
}
    {
}

