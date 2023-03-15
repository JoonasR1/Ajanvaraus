<?php $this->layout('template', ['title' => $varaa['name']]) ?>

<h1><?= $varaa['name'] ?></h1>
<h2><div><?= $varaa['specialty'] ?></div></h2>
<br>
<div><?= $varaa['info'] ?></div>
<br>




<form action="ilmoittautuminen.php" method="post">
<input type="datetime-local" id="datetime-picker" name="datetime-picker" min="<?php echo date('Y-m-d\TH:i'); ?>" step="1800">

<?php
  if ($loggeduser) {
    if (!$ilmoittautuminen) {
      
      echo "<div class='flexarea'><a href='ilmoittaudu?id=$varaa[doc_id]' class='button'>VARAA</a></div>";
    } else {
      echo "<div class='flexarea'>";
      echo "<div>Olet varannut lääkäriajan!</div>";
      echo "<a href='peru?id=$varaa[doc_id]' class='button'>PERU AIKA</a>";
      echo "</div>";
    }
  }
?>
</form>