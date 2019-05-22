<?php plantilla::aplicar(); ?>

<br>
<h3 class="container">Listado de Personas Agregadas</h3>

<table class ='table container'>
  <thead>
    <tr>
      <th>Cedula</th>
      <th>Fecha</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Sexo</th>
      <th>Tipificacion</th>
      <th>Comentario</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $rs = core_persona::listado();
    foreach ($rs as $persona) {
      $urlBorrar = base_url("main/borrar/{$persona->id}");
      $urlEditar = base_url("main/editar/{$persona->id}");
      $persona->fecha = date('d/m/Y G:i', $persona->fecha);
      echo <<<PERSONA
    <tr>
      <td>{$persona->cedula}</td>
      <td>{$persona->fecha}</td>
      <td>{$persona->nombre}</td>
      <td>{$persona->apellido}</td>
      <td>{$persona->sexo}</td>
      <td>{$persona->tipificacion}</td>
      <td>{$persona->comentario}</td>
      <td>
        <a href="{$urlBorrar}" class ="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
        <!--<a href="$urlEditar" class ="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>-->

      </td>
    </tr>
PERSONA;
  }?>
  </tbody>
</table>
