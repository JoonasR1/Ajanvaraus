<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Lääkärin ajanvaraus - <?=$this->e($title)?></title>
    <meta charset="UTF-8">    
    <link href="styles/styles.css" rel="stylesheet">
  </head>
  <body>
  <header>
      <h1><a href="<?=BASEURL?>">Doc Booker</a></h1>
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
