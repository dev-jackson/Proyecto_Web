<?php
    require_once './model/DAO/UserDAO.php';
    require_once './model/DTO/UserDTO.php';
    class UserController{
        private $user;

        public function __construct(){
            $this->user = new UserDAO();
        }

        public function registerUser(){
            try{
                $u = new UserDTO();
                $u->setCi($_POST['ci']);
                $u->setFirstName($_POST['firts_name']);
                $u->setLastName($_POST['last_name']);
                $u->setPassword($_POST['password']);
                $u->setTypeUser('C');
                $this->user->createUser($u);
                return true;
            }catch(Exception $e){
                echo $e->gerMessage();
                return flase;
            }
        }
    }

?>