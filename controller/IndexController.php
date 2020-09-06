<?php

    require_once 'server/config.php';

    class IndexController{
        public function __construct(){}

        public function index(){
            require_once LIB;
            require_once 'views/home.html';
        }

        public function login(){
            require_once LIB;
            require_once 'views/login.html';
        }
    }

?>