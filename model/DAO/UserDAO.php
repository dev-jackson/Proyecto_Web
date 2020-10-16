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
    public function createUser(UserDTO $u,$tipo){
        $sqlUser;
        $sqlTipo;
        if($tipo==0){
            //Tipo cliente
            $sqlUser = "INSERT INTO `usuario`(`nombre`, `edad`, `correo`, `id_cliente`) VALUES (?,?,?,?)";
            $sqlTipo = "INSERT INTO `cliente`(`id_cliente`, `forma_pago`) VALUES (?,?)";
        }elseif($tipo==1){
            //Tipo administrativo
            $sqlUser = "INSERT INTO `usuario`(`nombre`, `edad`, `correo`, `id_administracion`) VALUES (?,?,?,?)";
            $sqlTipo = "INSERT INTO `administrador`(`id_administrador`, `fecha`) VALUES (?,?)";
        }else{
            //Tipo Empresa
            $sqlUser = "INSERT INTO `usuario`(`nombre`, `edad`, `correo`, `id_empresa`) VALUES (?,?,?,?)";
            $sqlTipo ="INSERT INTO `empresa`(`id_empresa`, `ruc`, `tipo`, `horario`, `forma_pago`) VALUES (?,?,?,?,?)";
        }
        
        try{
            $prStm = $this->connec->prepare($sqlUser);
            $prStm->execute(array(
                $u->getName(),
                $u->getEdad(),
                $u->getCorreo()
            ));
            if($tipo==0){
                addCliente($u,$sqlTipo);
            }elseif($tipo==1){
                addAdministrativo($u,$sqlTipo);
            }else{
                addEmpresa($u ,$sqlTipo);
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function addEmpresa($u,$sql){
        try{
            $res = allUser();
            $id;
            foreach($res as $r){
                if($r['nombre']== $u->getNombre()){
                    $id = $res['id_usuario'];
                    break;
                }
            }
            $prStm = $this->connec->prepare($sql);
            $prStm->execute(array(
                $id,
                $u->getRuc(),
                $u->getTipo(),
                $u->getHorario(),
                $u->getFromaPago()
            ));

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function addCliente($u,$sql){
        try{
            $res = allUser();
            $id;
            foreach($res as $r){
                if($r['nombre']== $u->getNombre()){
                    $id = $res['id_usuario'];
                    break;
                }
            }
            $prStm = $this->connec->prepare($sql);
            $prStm->execute(array(
                $id,
                $u->getFormaPago()
            ));

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function addAdministrativo($u,$sql){
        try{
            $res = allUser();
            $id;
            foreach($res as $r){
                if($r['nombre']== $u->getNombre()){
                    $id = $res['id_usuario'];
                    break;
                }
            }
            $prStm = $this->connec->prepare($sql);
            $prStm->execute(array(
                $id,
                $u->getFecha()
            ));

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function allUser(){
        $sql = "SELECT * FROM usuario";
        try{
            $prStm = $this->connec->prepare($sql);
            $prStm->execute();
            $result = $prStm->fetchAll();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function deleteForIdUser($id,$nombre){
        $sql = "DELETE FROM user WHERE id_user=? or mombre=?";
        try{
            $prStm = $this->connec->prepare($sql);
            $prStm->execute(array(
                $id,
                $nombre
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
    public function findIdUser($correo){
        $sql = "SELECT * FROM usuario WHERE correo=?";
        try{
            $prStm = $this->connec->prepare($sql);
            $prStm->execute(array($correo));
            $result = $prStm->fetch(PDO::FETCH_OBJ);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>