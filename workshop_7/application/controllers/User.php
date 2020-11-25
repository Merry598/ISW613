<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

 function _constructor(){
 $this->load->helper('url');
 }

	public function register()
	{
    // $username = $this->input->get('u');
    // $password = $this->input->get('p');
    // $data['username'] = $username;
    // $data['password'] = $password;
		$this->load->view('users/register');
  }

	public function login()
	{
    $usuario = $this->input->get('usuario');
    $password = $this->input->get('password');
    $data['usuario'] = $usuario;
    $data['password'] = $password;
		$this->load->view('users/login',$data);
  }
    //traer la información de la tabla
  public function list(){
    $this->load->model('User_model');
     $data['usuarios']=$this->User_model->all(); 
    //cargar la lista de los user desde la DB
    $this->load->view('users/list', $data);//A la hora de cargar la lista se envia un arreglo asociativo
  }
  

  public function authenticate()
	{
    $this->load->model('User_model');
    // read login params (user/pass)
    $usuario = $this->input->post('usuario');
    $password = $this->input->post('password');

    $valid = $this->User_model->authenticate($usuario, $password);

    if($valid) {
      redirect(site_url(['user','dashboard']));
    } else {
      redirect(site_url(['user','login']));
    }
  }

/**
 * Para no estar creando los parametros, se puede
 * crear un arreglo asociativo que el insert reciba
 * un arreglo asociativo con todos los datos
 */
	public function create()
	{
    $this->load->model('User_model');
   
    //$userData = array(
    //"usuario" => $this->input->post('usuario'),
    //"nombre" => $this->input->post('nombre'),
    //"apellidos" => $this->input->post('apellidos'),
    //"password" => $this->input->post('password')
    //);
    $userData = [];
    $userData['usuario']= $this->input->post('usuario');
    $userData['nombre'] = $this->input->post('nombre');
    $userData['apellidos'] = $this->input->post('apellidos');
    $userData['password'] = $this->input->post('password');

    $userId= $this->User_model->insert($userData);
    if($userId) {
      redirect(site_url(['user','list']));
    } else {
      //there was an error creating the user
   
    }
  }

}

    




