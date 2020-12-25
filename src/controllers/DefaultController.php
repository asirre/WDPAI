<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {

        $this->render('login');
    }

    public function main() {
        $this->render('main');
    }


    public function test() {
        $this->render('test');
    }




}