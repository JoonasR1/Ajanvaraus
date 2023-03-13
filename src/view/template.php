<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Lääkärin ajanvaraus - <?=$this->e($title)?></title>
    <meta charset="UTF-8">    
    <link href="styles/styles.css" rel="stylesheet">
  </head>
  <body>
  <header>
      <h1>Doc Booker</h1>
      <div class ="nav"><a href="<?=BASEURL."/etusivu"?>">Etusivu</a></div>
      <div class ="nav"><a href="<?=BASEURL."/ajanvaraus"?>">Varaa lääkärinaika</a></div>
      <div class ="nav"><a href="<?=BASEURL."/about"?>">Yhteystiedot</a></div>
      <div class="profile">
        <?php
          if (isset($_SESSION['user'])) {
            echo "<div>Käyttäjä</div>";
            echo "<div>$_SESSION[user]</div>";
            echo "<div><a href='logout'>Kirjaudu ulos</a></div>";
          } else {
            echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
          }
        ?>
      </div>
    </header>

    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>Lääkärin ajanvaraus by Joonas Riiski</div>
    </footer>
  </body>
</html>
