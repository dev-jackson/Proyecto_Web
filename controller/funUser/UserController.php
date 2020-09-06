<?php
     require_once './model/DAO/UserDAO.php';
     require_once './model/DTO/UserDTO.php';
    class UsuarioController{
        private $user;

        public function __construct(){
            $this->user = new UserDAO();
        }

        public function registerUser(){
            try{
                $u = new  UserDTO();
                $u->setId($_POST['id']);
                $u->setFirstName($_POST['frits_name']);
                $u->setLastName($_POST['last_name']);
                $u->setPassword($_POST['password']);
                $u->setTypeUser('C');
                $this->user->createUser($u);
            }catch(Exception $e){
                echo $e->gerMessage();
            }
        }
    }

?>