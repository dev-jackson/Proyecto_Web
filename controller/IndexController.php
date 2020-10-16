<?php

    require_once 'server/config.php';

    class IndexController{
        public function __construct(){}

        public function index(){
            require_once 'views/home.php';
        }

        public function login(){
            require_once LIB;
            require_once 'views/login.php';
        }

        public function pages(){
            require_once LIB;
            $page = $_REQUEST['p'];
            require_once 'views/'.$page.'.php';
        }
    }

?>