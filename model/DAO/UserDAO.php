<?php

    require_once './server/Connection.php';
    require_once './model/DTO/UserDTO.php';

class UserDAO {
    private $connec;

    public function __construct(){
        try{
            $this->connec = Connection::getConnection();
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function createUser(UserDTO $u){
        $sql = "INSERT INTO user(`ci`,`first_name`,`last_name`,`password`,`type_user`) VALUES(?,?,?,?,?)";
        try{
            $prStm = $this->connec->prepare($sql);
            $prStm->execute(array(
                $u->getCi(),
                $u->getFirstName(),
                $u->getLastName(),
                $u->getPassword(),
                $u->getTypeUser()
            ));
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function allUser(){
        $sql = "SELECT * FROM user";
        try{
            $prStm = $this->connec->prepare($sql);
            $prStm->execute();
            $result = $prStm->fetchAll();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function deleteForIdUser($id){
        $sql = "DELETE FROM user WHERE id_user=?";
        try{
            $prStm = $this->connec->prepare($sql);
            $prStm->execute(array(
                $id
            ));
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }   

    public function updateUser(UserDTO $u){
        $sql = "UPDATE `user` SET `ci` = ?, `first_name` = ?, `last_name` = ?, `password` = ? WHERE `user`.`id_user` = ?";
        try{
            $prStm = $this->connec->prepare($sql);
            $prStm->execute(array(
                $u->getCi(),
                $u->getFirstName(),
                $u->getLastName(),
                $u->getPassword(),
                $u->getId()
            ));
            return false;
        }catch(PDIException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function findIdUser($id){
        $sql = "SELECT * FROM user WHERE id_user=?";
        try{
            $prStm = $this->connec->prepare($sql);
            $prStm->execute(array($id));
            $result = $prStm->fetch(PDO::FETCH_OBJ);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>