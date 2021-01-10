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
        $page = (int) $_GET['page'] ?? 1;
        $knot = $this->knotsRepository->getKnots($page);
        if(is_null($knot))
        {
            unset($_GET['page']);
            $_GET['page'] = '1';
            $page = 1 ;
            echo $_GET['page'], $page;
        }
            $this->render('knots', ['knot' => $knot, 'page' => $page]);

    }
}
