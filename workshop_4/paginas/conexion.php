<?php
class Conexion extends mysqli{

private $DB_HOST='localhost';
private $DB_USER='root';
private $DB_PASS='';
private $DB_NAME='workshop_4';

/**
* función donde se conecta a la base de datos
*/
public function __construct(){
parent:: __construct($this->DB_HOST,$this->DB_USER,$this->DB_PASS,$this->DB_NAME);
$this->set_charset('utf-8');
$this->connect_errno ? die('Eror en la conexion'. mysqli_connect_errno()): $m= 'Conectado';
}
}
?>