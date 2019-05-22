<?php

function asgInput($nombre, $label, $place = []){

  $placeholder ='';
  foreach ($place as $key => $value) {
    $$key = $value;
  }
  return <<<CODIGO
  <div>
    <label>{$label}: </lable>
    <input  class='form-control' placeholder='{$placeholder}' type='text' name='{$nombre}' required/>
  </div>
CODIGO;
  // code...
}

function asgTextArea($nombre, $label, $valor=''){
  // code...
  return <<<CODIGO
  <div>
  <label>{$label}: </lable>
  <textarea class='form-control' name='{$nombre}' required></textarea>
  </div>
CODIGO;
}

function asgRadio($label, $nombre){
  return <<<CODIGO
  <div>
  <label>$nombre:</label>
    <input type='radio' name='{$label}' value = 'Masculino' required/> Hombre
    <input type='radio' name='{$label}' value = 'Femenino' required/> Mujer
  </div>
CODIGO;
}

function asgTipo($nombre, $label){
  return <<<CODIGO
  <div class='form-row align-items-center'>

   <div class='col-auto my-1'>
   <label>{$label}: </label>
  <select required class='custom-select mr-sm-2' name='{$nombre}'>
  <option value=''>Seleccionar</option>
  <option value='A+' >A+</option>
  <option value='A-' >A-</option>
  <option value='B+' >B+</option>
  <option value='B-' >B-</option>
  <option value='AB+' >AB+</option>
  <option value='AB-' >AB-</option>

  </select>
  </div></div>
CODIGO;
} ?>
