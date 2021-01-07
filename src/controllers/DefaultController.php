<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {

        $this->render('login');
    }

    public function main() {
        session_start();
        $this->render('main');
    }


    public function boat() {
        session_start();
        $this->render('boat');
    }

    public function naped() {
        session_start();
        $this->render('naped');
    }

    public function kotwice() {
        session_start();
        $this->render('kotwice');
    }




}