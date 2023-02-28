<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeAjanvaraus() {
    return DB::run('SELECT * FROM doctors ORDER BY specialty;')->fetchAll();
  }

?>
