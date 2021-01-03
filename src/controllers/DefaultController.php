<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {

        $this->render('login');
    }

    public function main() {
        $this->render('main');
    }


    public function boat() {
        $this->render('boat');
    }

    public function naped() {
        $this->render('naped');
    }

    public function kotwice() {
        $this->render('kotwice');
    }




}