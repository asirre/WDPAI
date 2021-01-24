<?php

require_once 'AppController.php';
require_once __DIR__ . '/../shared/Shared.php';

class DefaultController extends AppController {

    public function index() {

        $this->render('login');
    }

    private function renderSecure($name){
        Shared::checkSession();
        $this->render($name);
    }

    public function main() {

        $this->renderSecure('main');

    }


    public function boat() {

        $this->renderSecure('boat');
    }

    public function drive() {

        $this->renderSecure('drive');
    }

    public function anchor() {

        $this->renderSecure('anchor');
    }

    public function sails() {

        $this->renderSecure('sails');
    }






}