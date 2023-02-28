<?php $this->layout('template', ['title' => 'Tulevat tapahtumat']) ?>

<h1>Tulevat tapahtumat</h1>

<div class='tapahtumat'>
<?php

foreach ($ajanvaraus as $ajanvaraus) {


  echo "<div>";
    echo "<div>$ajanvaraus[name]</div>";
    echo "<div>$ajanvaraus[specialty]</div>";
  echo "</div>";

}

?>
</div>
