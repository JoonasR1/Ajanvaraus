<?php $this->layout('template', ['title' => 'Asiantuntijat']) ?>

<h1>Meidän asiantuntijat</h1>

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
