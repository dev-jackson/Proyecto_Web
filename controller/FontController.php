<?php
    
    class FontController{
        public function __construct(){}

        public function routers(){
            $newcontroller = (isset($_REQUEST['c']))? $_REQUEST['c']: 'Index';
            $action = (isset($_REQUEST['a']))? $_REQUEST['a'] :  'index';
            $controller = strtolower($newcontroller);
            $newcontroller = ucwords($newcontroller)."Controller";
            if($controller==='admin'){
                require_once "controller/funAdmin/".$newcontroller.".php";
            }elseif($controller==="client"){
                require_once "controller/funClient/".$newcontroller.".php";
            }elseif($controller==="user"){
                require_once "controller/funUser/".$newcontroller.".php";
            }else{
                require_once "controller/" .$newcontroller.".php"; // require class controller index
            }

            $newcontroller = new $newcontroller;
            $newcontroller->$action();
        }
    }

?>