<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaHenkilo($nimi,$email,$sukunimi,$salasana) {
    DB::run('INSERT INTO appointmentuser (nimi, email, sukunimi, salasana) VALUE  (?,?,?,?);',[$nimi,$email,$sukunimi,$salasana]);
    return DB::lastInsertId();
  }

  function haeHenkiloSahkopostilla($email) {
    return DB::run('SELECT * FROM appointmentuser WHERE email = ?;', [$email])->fetchAll();
  }
  function haeHenkilo($email) {
    return DB::run('SELECT * FROM appointmentuser WHERE email = ?;', [$email])->fetch();
  }

?>
