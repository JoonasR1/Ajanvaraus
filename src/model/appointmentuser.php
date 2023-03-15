<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaHenkilo($nimi,$sukunimi,$email,$salasana) {
    DB::run('INSERT INTO appointmentuser (etunimi, sukunimi, email, salasana) VALUE  (?,?,?,?);',[$nimi,$sukunimi,$email,$salasana]);
    return DB::lastInsertId();
  }

  function haeHenkiloSahkopostilla($email) {
    return DB::run('SELECT * FROM appointmentuser WHERE email = ?;', [$email])->fetchAll();
  }

  function haeHenkilo($email) {
    return DB::run('SELECT * FROM appointmentuser WHERE email = ?;', [$email])->fetch();
  }



  function paivitaVahvavain($email,$avain) {
    return DB::run('UPDATE appointmentuser SET vahvavain = ? WHERE email = ?', [$avain,$email])->rowCount();
  }

  function vahvistaTili($avain) {
    return DB::run('UPDATE appointmentuser SET vahvistettu = TRUE WHERE vahvavain = ?', [$avain])->rowCount();
  }


  function asetaVaihtoavain($email,$avain) {
    return DB::run('UPDATE appointmentuser SET nollausavain = ?, nollausaika = NOW() + INTERVAL 30 MINUTE WHERE email = ?', [$avain,$email])->rowCount();
  }

  function tarkistaVaihtoavain($avain) {
    return DB::run('SELECT nollausavain, nollausaika-NOW() AS aikaikkuna FROM appointmentuser WHERE nollausavain = ?', [$avain])->fetch();
  }

  function vaihdaSalasanaAvaimella($salasana,$avain) {
    return DB::run('UPDATE appointmentuser SET salasana = ?, nollausavain = NULL, nollausaika = NULL WHERE nollausavain = ?', [$salasana,$avain])->rowCount();
  }

?>
