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


    public function knots()
    {
        $knots = $this->knotsRepository->getKnot();
        $this->render('knots', ['knots' => $knots]);

    }
}
