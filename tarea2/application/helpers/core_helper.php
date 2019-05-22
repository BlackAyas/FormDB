<?php

/**
 *
 */
class core_persona{

  static function guardar($persona){
    $CI =& get_instance();
    $CI -> db -> insert('persona',$persona);
  }

  static function listado() {
    $CI =& get_instance();
    $rs = $CI->db->get('persona')->result();
    return $rs;
  }

  static function borrar($id) {
    $CI =& get_instance();
    $sql = "DELETE FROM persona WHERE id=?";
    $CI->db->query($sql,[$id]);
  }

  static function persona_x_id($id) {
    $CI =& get_instance();
    $CI ->db->where('id',$id);
    $rs = $CI->db->get('persona')->result();
    return $rs;
  }


} ?>
