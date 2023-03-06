<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaHenkilo($nimi,$email,$sukunimi,$salasana) {
    DB::run('INSERT INTO appointmentuser (nimi, email, sukunimi, salasana) VALUE  (?,?,?,?);',[$nimi,$email,$sukunimi,$salasana]);
    return DB::lastInsertId();
  }

?>
