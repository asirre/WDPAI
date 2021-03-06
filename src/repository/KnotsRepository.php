<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/Knot.php';

class KnotsRepository extends Repository
{

    public function getPages(): ?int
    {

        $stmt = $this->database->connect()->prepare('
            SELECT COUNT(*) FROM public.knots');

        $stmt->execute();

        $max_pages = $stmt->fetchColumn();

        if ($max_pages == false) {
            return null;
        }

        return $max_pages;

    }


    public function getKnots(int $page = null): ?Knot
    {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.knots LIMIT 1 OFFSET :page-1
        ');

        if($page) {
            $stmt->bindParam(':page', $page, PDO::PARAM_INT);
        }


        $stmt->execute();

        $knot = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($knot == false) {
            throw new UnexpectedValueException('Knot not found');
        }

        return new Knot(
            $knot['name'],
            $knot['text'],
            $knot['image']
        );

    }

    public function addKnot(Knot $knot): void
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO knots (text, image, name)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $knot->getDescription(),
            $knot->getImage(),
            $knot->getName()
        ]);
    }

}

