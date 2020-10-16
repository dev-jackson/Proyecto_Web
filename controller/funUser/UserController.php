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
                $u->setName($_POST['name']);
                $u->setCorreo($_POST['email']);
                $u->setEdad($_POST['edad']);
                $u->setPassword();
                $this->user->createUser($u,0);
                return true;
            }catch(Exception $e){
                echo $e->gerMessage();
                return flase;
            }
        }
        public function changedDatesUser(){
            $u = new UserDTO();
            $res = (array) $this->user->findIdUser($_REQUEST['id']);
            $u->setId($res['id_user']);
            $u->setCi($res['ci']);
            $u->setFirstName($res['first_name']);
            $u->setLastName($res['last_name']);
            $u->setPassword($res['password']);
            require_once LIB;
            require_once './views/registerUser.php';
        }
        public function login(){
            $correo = $_POST['correo'];
            $password = $_POST['password'];
            $u = new UserDAO();
            return $u->findIdUser($correo);
            
        }
    }

?>