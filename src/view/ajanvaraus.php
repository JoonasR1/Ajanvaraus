<?php $this->layout('template', ['title' => 'Asiantuntijat']) ?>

<h1>Meidän asiantuntijat</h1>

<div class='ajanvaraus'>
<?php

foreach ($ajanvaraus as $ajanvaraus) {


  echo "<div>";
    echo "<div>$ajanvaraus[name]</div>";
    echo "<div>$ajanvaraus[specialty]</div>";
    echo "<div><a href='varaa?id=" . $ajanvaraus['doc_id'] . "'>Varaa aika</a></div>";
  echo "</div>";


}

?>
</div>
