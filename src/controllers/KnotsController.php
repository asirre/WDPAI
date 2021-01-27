<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Knot.php';
require_once __DIR__.'/../repository/KnotsRepository.php';

class KnotsController extends AppController
{
    private $knotsRepository;
    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/img/';

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

    public function addKnot()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['file']['name']
            );

            $knot = new Knot($_POST['name'], $_POST['description'], $_FILES['file']['name']);
            $this->knotsRepository->addKnot($knot);

        }

        return $this->render('add-knot', ['messages' => $this->message]);

    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }

}
