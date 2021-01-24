<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Knot.php';
require_once __DIR__.'/../repository/KnotsRepository.php';

class KnotsController extends AppController
{
    private $knotsRepository;

    public function __construct()
    {
        parent::__construct();
        $this->knotsRepository = new KnotsRepository();
    }


    function knots()
    {
        Shared::checkSession();
        $page = (int) $_GET['page'] ?? 1;
        $knot = $this->knotsRepository->getKnots($page);
        $max_pages = $this->knotsRepository->getPages();
        $this->render('knots', ['knot' => $knot, 'page' => $page, 'max_pages' => $max_pages]);

    }
}
