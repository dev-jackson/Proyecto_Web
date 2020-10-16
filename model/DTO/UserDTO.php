<?php
    class UserDTO{
        private $id;
        private $name;
        private $edad;
        private $correo;
        private $idtipo;
        private $password;

    //getters
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getPassword(){
        return $this->password;
    }
    public  function getIdtipo(){
        return $this->idtipo;
    }
    //setters
    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function setCorreo($correo){
        $this->correo = $correo;
    }
    public function setPassword($password){
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }
    public function setIdtipo($tipo){
        $this->id = $tipo;
    }
}

class EmpresaDTO extends UserDTO {
    private $ruc;
    private $tipo;
    private $horario;
    private $formaPago;

    public function getRuc(){
        return $this->ruc;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getHorario(){
        return $this->horario;
    }
    public function getFormaPago(){
        return $this->formaPago;
    }
    public function setRuc($ruc){
        $this->ruc = $ruc;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setHorario($horario){
        $this->horario = $horario;
    }
    public function setFormaPago($formaPago){
        $this->formaPago = $formaPago;
    }
}
class ClienteDTO extends UserDTO{
    private $formaPago;

    public function setFormaPago($formaPago){
        $this->formaPago = $formaPago;
    }
    public function getFormaPago(){
        return $this->formaPago;
    }
}
class Administrador extends UserDTO{
    private $fecha;
    private $idReporte;

    public function getFecha(){
        return $this->fecha;
    }
    public function getIdReporte(){
        return $this->idReporte;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setIdReporte($idr){
        $this->idReporte = $idr;
    }
}
?>