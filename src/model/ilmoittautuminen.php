<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeIlmoittautuminen($idhenkilo,$iddoc) {
    return DB::run('SELECT * FROM booking WHERE idhenkilo = ? AND iddoc = ?',
                   [$idhenkilo, $iddoc])->fetchAll();
  }

  function lisaaIlmoittautuminen($idhenkilo,$iddoc) {
    DB::run('INSERT INTO booking (idhenkilo, iddoc) VALUE (?,?)',
            [$idhenkilo, $iddoc]);
    return DB::lastInsertId();
  }

  function poistaIlmoittautuminen($idhenkilo, $iddoc) {
    return DB::run('DELETE FROM booking  WHERE idhenkilo = ? AND iddoc = ?',
                   [$idhenkilo, $iddoc])->rowCount();
  }

?>
