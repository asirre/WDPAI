<?php

class Shared
{
    public static function checkSession() {

        session_start();
        if (!isset($_SESSION['id'])) {
            header ("Location: login");
            exit();
        }
    }
}