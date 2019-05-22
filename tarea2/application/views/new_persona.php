<?php

if($_POST){
  $persona = $_POST;
  $persona['fecha'] = time();
  core_persona::guardar($persona);
  redirect('main/listx');
}
plantilla::aplicar();
?>

<div class="container">

<h3>Agregar Persona</h3>
<form method="post" action="">
  <div class="row">
    <div class="col-md-6">

  <?= asgInput('cedula', 'Cedula', ['placeholder'=>'Digite su Cedula'])?>
  <?= asgInput('nombre', 'Nombre', ['placeholder'=>'Digite su Nombre'])?>
  <?= asgInput('apellido', 'Apellido', ['placeholder'=>'Digite su Apellido']) ?>
  <?= asgTipo('tipificacion', 'Tipo de Sangre')?>
  <?= asgRadio('sexo',"Sexo") ?>
  <?= asgTextArea('comentario', 'Comentario') ?>
</div>
</div>
  <input type="checkbox" class="form-check-label" value="Acepto enviar esta informacion" required> Acepto enviar esta informacion
    <br>
    <div class="text-center">
    <button type="submit"class="btn btn-primary" >
      <i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
    <button onclick="return confirm('¿Esta seguro?');" class="btn btn-danger" type="reset" >
      <i class="fa fa-trash" aria-hidden="true"></i> Borrar</button>
    <br>
  </div>
</form>
</div>
