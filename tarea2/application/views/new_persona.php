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
<br><br>
<h3>Agregar Persona</h3>
<br>
<form method="post" action="">

  <?= asgInput('cedula', 'Cedula', ['placeholder'=>'Digite su Cedula'])?>
  <?= asgInput('nombre', 'Nombre', ['placeholder'=>'Digite su Nombre'])?>
  <?= asgInput('apellido', 'Apellido', ['placeholder'=>'Digite su Apellido']) ?>
  <?= asgTipo('tipificacion', 'Tipo de Sangre')?>
  <?= asgRadio('sexo',"Sexo") ?>
  <?= asgTextArea('comentario', 'Comentario') ?>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"></label>
      <div class="col-sm-5">
        <input type="checkbox" class="form-check-label" value="Acepto enviar esta informacion" required> <b> Acepto enviar esta informacion</b>
          <br>
          <br>
        <button type="submit"class="btn btn-primary" >
          <i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
        <button onclick="return confirm('¿Esta seguro?');" class="btn btn-danger" type="reset" >
          <i class="fa fa-trash" aria-hidden="true"></i> Limpiar</button>
          </div>
    </div>
</form>
</div>
