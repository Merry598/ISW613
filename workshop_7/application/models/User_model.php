<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  /**
   *  Validate in the database that the user exists
   *
   * @param $username  The username
   * @param $password The user's password
   */
  public function authenticate($usuario, $password){
      $query = $this->db->get_where('usuario', array('usuario' => $usuario, 'password' => $password));
      if ($query->result()) {
        return $query->result()[0];
      } else {
        return false;
      }
  }


  /**
   *  Validate in the database that the user exists
   *
   * @param $username The username
   * @param $password The user's password
   */
  public function getByName($nombre){
      $query = $this->db->get_where('usuario', array('nombre' => $nombre));
      if ($query->result()) {
        return $query->result();
      } else {
        return false;
      }
  }

  /**
   *  Get user by Id
   *
   * @param $id  The user's id
   */
  public function getById($id_usuario){
      $query = $this->db->get_where('usuario', array('id_usuario' => $id_usuario));
      if ($query->result()) {
        return $query->result();
      } else {
        return false;
      }
  }

  /**
   *  Get all users from the database
   *
   */
  public function all(){
      $query = $this->db->get('usuario');
      return $query->result();
  }

    /**
   *  Inserts a new user in the database
   *
   * @param $user  An associative array with all user data
   */
  public function edit($usuario){
  $query=  $this->db->insert('usuario', $usuario);

 
  }
  /*
     * function to delete usuario
     */
    function delete($id_usuario)
    {
        return $this->db->delete('usuario',array('id_usuario'=>$id_usuario));
    }
  
}
