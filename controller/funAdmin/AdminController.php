<?php
require_once './model/DAO/UserDAO.php';
require_once './server/config.php';
class AdminController{
    private $user;

    public function __construct(){
        $this->user = new UserDAO();
    }

    public function findUser(){
        $id = $_GET['id'];

    }
    public function showAllUsers(){
        $res = $this->user->allUser();
        require_once LIB;
        require_once 'views/users.php';
    }

    public function deleteUser(){
        $res = $this->user->deleteForIdUser(
            $_GET['id']
        );
        return $res;
    }
}

?>