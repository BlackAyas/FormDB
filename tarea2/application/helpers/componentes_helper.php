<?php

function asgInput($nombre, $label, $place = []){

  $placeholder ='';
  foreach ($place as $key => $value) {
    $$key = $value;
  }
  return <<<CODIGO
  <div class="form-group row">
    <label class="col-sm-2 col-form-label"><b>{$label}:</b></label>
    <div class="col-sm-5">
      <input type="text" class="form-control" placeholder="{$placeholder}" name='{$nombre}' required/>
    </div>
  </div>
CODIGO;
  // code...
}

function asgTextArea($nombre, $label, $valor=''){
  // code...
  return <<<CODIGO
  <div class="form-group row">
    <label class="col-sm-2 col-form-label"><b>{$label}:</b></label>
    <div class="col-sm-5">
      <textarea class='form-control' name='{$nombre}' required></textarea>
    </div>
  </div>
CODIGO;
}

function asgRadio($label, $nombre){
  return <<<CODIGO
  <div class="form-group row">
    <label class="col-sm-2 col-form-label"><b>{$nombre}:</b></label>
    <div class="col-sm-5">
    <input type='radio' name='{$label}' value = 'Masculino' required/> Hombre
    <input type='radio' name='{$label}' value = 'Femenino' required/> Mujer
    </div>
  </div>
CODIGO;
}

function asgTipo($nombre, $label){
  return <<<CODIGO
  <div class="form-group row align-items-center">
    <label class="col-sm-2 col-form-label"><b>{$label}:</b></label>
    <div class="col-sm-5">
    <select required class='custom-select mr-sm-2' name='{$nombre}'>
    <option value=''>Seleccionar</option>
    <option value='A+' >A+</option>
    <option value='A-' >A-</option>
    <option value='B+' >B+</option>
    <option value='B-' >B-</option>
    <option value='AB+' >AB+</option>
    <option value='AB-' >AB-</option>
    </select>
    </div>
  </div>
CODIGO;
} ?>
