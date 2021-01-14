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

    public function search()
    {
        session_start();
        Shared::checkSession();
        $page = (int) $_GET['page'] ?? 1;
        $max_pages = $this->knotsRepository->getPages();
        /*
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER['CONTENT_TYPE']) : '';

        if($contentType === "application/json"){
            $content = trim(file_get_contents("pop://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
        */
            http_response_code(200);

            echo json_encode($this->knotsRepository->getKnotsJs($page));

    }



    function knots()
    {
        session_start();
        //Shared::checkSession();
        $page = (int) $_GET['page'] ?? 1;
        $knot = $this->knotsRepository->getKnots($page);
        $max_pages = $this->knotsRepository->getPages();
        /*
        if(is_null($knot))
        {
            $_GET['page'] = '1';
            $page=1;
            $knot = $this->knotsRepository->getKnots($page);
        }
        */
            $this->render('knots', ['knot' => $knot, 'page' => $page, 'max_pages' => $max_pages]);

    }
}
