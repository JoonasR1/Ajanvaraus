<?php $this->layout('template', ['title' => $varaa['name']]) ?>

<h1><?= $varaa['name'] ?></h1>
<h2><div><?= $varaa['specialty'] ?></div></h2>
<br>
<div><?= $varaa['info'] ?></div>





<?php
  if ($loggeduser) {
    if (!$ilmoittautuminen) {
      
      echo "<div class='flexarea'><a href='ilmoittaudu?id=$varaa[doc_id]' class='button'>ILMOITTAUDU</a></div>";
    } else {
      echo "<div class='flexarea'>";
      echo "<div>Olet ilmoittautunut tapahtumaan!</div>";
      echo "<a href='peru?id=$varaa[doc_id]' class='button'>PERU ILMOITTAUTUMINEN</a>";
      echo "</div>";
    }
  }
?>
