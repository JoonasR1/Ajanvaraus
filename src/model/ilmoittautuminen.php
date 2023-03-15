<?php




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['booking'])) {
    $date = $_POST['datetime-picker'];
    $idhenkilo = $loggeduser['idhenkilo'];
    $iddoc = $_GET['iddoc'];
    
    header('Location: varaa.php');
    
    exit();
  } else if (isset($_POST['cancel_booking'])) {
    $idhenkilo = $loggeduser['idhenkilo'];
    $iddoc = $_GET['iddoc'];
  
    header('Location: varaa.php');
    exit();
  }
}


require_once HELPERS_DIR . 'DB.php';

function haeIlmoittautuminen($idhenkilo,$iddoc) {
  return DB::run('SELECT * FROM booking WHERE idhenkilo = ? AND iddoc = ?',
                 [$idhenkilo, $iddoc])->fetchAll();
}

function lisaaIlmoittautuminen($idhenkilo,$iddoc, $date) {
  DB::run('INSERT INTO booking (idhenkilo, iddoc, date) VALUE (?,?,?)',
          [$idhenkilo, $iddoc, $date]);
  return DB::lastInsertId();
}

function poistaIlmoittautuminen($idhenkilo, $iddoc) {
  return DB::run('DELETE FROM booking  WHERE idhenkilo = ? AND iddoc = ?',
                 [$idhenkilo, $iddoc])->rowCount();
}

?>
