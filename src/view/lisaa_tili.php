<?php $this->layout('template', ['title' => 'Uuden tilin luonti']) ?>

<h1>Uuden tilin luonti</h1>

<form action="" method="POST">
  <div>
    <label for="etunimi">Etunimi:</label>
    <input id="etunimi" type="text" name="etunimi" value="<?= getValue($formdata,'etunimi') ?>">
    <div class="error"><span><?= getValue($error,'etunimi'); ?></span></div>
  </div>
  <div>
    <label for="sukunimi">Sukunimi:</label>
    <input id="sukunimi" type="text" name="sukunimi" value="<?= getValue($formdata,'sukunimi') ?>">
    <div class="error"><?= getValue($error,'sukunimi'); ?></div>
  </div>
  <div>
    <label for="email">Sähköposti:</label>
    <input id="email" type="email" name="email" value="<?= getValue($formdata,'email') ?>">
    <div class="error"><?= getValue($error,'email'); ?></div>
  </div>
  <div>
    <label>Salasana:</label>
    <input type="password" name="salasana1">
    <div class="error"><?= getValue($error,'salasana'); ?></div>
  </div>
  <div>
    <label>Salasana uudelleen:</label>
    <input type="password" name="salasana2">
  </div>
  <div>
    <input type="submit" name="laheta" value="Luo tili">
  </div>
</form>
