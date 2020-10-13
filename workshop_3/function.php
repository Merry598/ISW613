<?php
/**
 *  Gets a new mysql connection
 */

function getConnection() {
  $connection = new mysqli('localhost', 'root', '', 'workshop_3');
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}

function saveCategorias($categorias) {
    $conn = getConnection();
    $sql = "INSERT INTO categorias( `nombre`, `descripcion`)
            VALUES ('{$categorias['nombre']}', '{$categorias['descripcion']}')";
    $conn->query($sql);
  
    if ($conn->connect_errno) {
      $conn->close();
      return false;
    }
    $conn->close();
    return true;
  }

  function getcategorias(){
    $conn = getConnection();
    $sql = "SELECT * FROM categorias";
    $result = $conn->query($sql);
  
    if ($conn->connect_errno) {
      $conn->close();
      return [];
    }
    $conn->close();
    return $result;
  }

  function deletecategoria($id){
    $conn = getConnection();
    $sql = "DELETE FROM categorias WHERE id_categoria = $id";
    $result = $conn->query($sql);
  
    if ($conn->connect_errno) {
      $conn->close();
      return false;
    }
    $conn->close();
    return true;
  }