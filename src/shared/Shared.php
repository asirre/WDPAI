<?php

class Shared
{
    public static function checkSession() {
        if (!(isset($_SESSION['id']))) {
            header ("Location: login");
            exit();
        }
    }
}