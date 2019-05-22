<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function index(){

    $this -> load -> view("index");
  }

  public function new_persona(){
    $this -> load -> view("new_persona");
  }

  public function borrar($id=0) {
    core_persona::borrar($id);
    redirect('main/listx');
  }

  public function listx(){
    $this -> load -> view("listx");
  }

  public function editar($id=0){
    $this -> load -> view('new_persona',['id'=>$id]);

  }

}
?>
