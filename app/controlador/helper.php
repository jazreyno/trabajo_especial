<?php
class helper {
    public function __construct() {
        $this->view = new vistausuarios;
        
    }
    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            //header("Location: " . BASE_URL . "error");
            $this->view->errorUser();
            die();
        }
    } 

    public function booleanLog() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            return true;
        }
        return false;
    }

}