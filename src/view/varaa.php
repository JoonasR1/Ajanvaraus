<?php $this->layout('template', ['title' => $varaa['name']]) ?>


<h1><?=$varaa['name']?></h1>
<h2><div><?=$varaa['specialty']?></div></h2>
<div><?=$varaa['info']?></div>
<label for="date-input">Valitse päivä:</label>
<input type="date" id="date-input" min="<?php echo date('Y-m-d'); ?>" required>
<input id="time" type="time" min='01:00' max= '03:00'>



