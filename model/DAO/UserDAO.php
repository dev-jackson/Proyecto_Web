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

        public function createUser(User $u){
            $sql = "INSERT INTO user(`id_user`,`first_name`,`last_name`,`password`,`type_user`) VALUES(?,?,?,?,?)";
            try{
                $prStm = $this->connec->prepare($sql);
                $prStm->execute(array(
                    $u->getId(),
                    $u->getFirstName(),
                    $u->getLastName(),
                    $u->getPassword(),
                    $u->getTypeUser()
                ));
            }catch(PDOException $e){
                echo $e->getMenssage();
            }
        }
    }

?>