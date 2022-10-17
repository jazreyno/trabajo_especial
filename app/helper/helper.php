<?php

class userHelper {
//lo que hace este if es que si ya esta la session empezada  no la vuelva a comenzar
    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) {
        session_start();
        }
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
     } 
     //este ves si estas iniciado
     public function checkInicio() {
        if(!isset($_SESSION)) { 
            session_start(); 
          } 
    }
}