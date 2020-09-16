<?php
    class UserDTO{
        private $id;
        private $ci;
        private $first_name;
        private $last_name;
        private $password;
        private $type_user;
    //getters
    public function getId(){
        return $this->id;
    }
    public function getCi(){
        return $this->ci;
    }
    public function getFirstName(){
        return $this->first_name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getPassword(){
        return $this->password;
    }
    public  function getTypeUser(){
        return $this->type_user;
    }
    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setCi($ci){
        $this->ci = $ci;
    }
    public function setFirstName($first_name){
        $this->first_name = $first_name;
    }
    public function setLastName($last_name){
        $this->last_name = $last_name;
    }
    public function setPassword($password){
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }
    public function setTypeUser($type_user){
        $this->type_user = $type_user;
    }
}
?>