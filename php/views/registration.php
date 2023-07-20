<?php
  require_once(__DIR__ . "/layout/head.php");
  require_once(__DIR__ . "/layout/header.php");
?>
<main>
  <section class="registration">
    <div class="wrapper">
      <form action="" method="POST">
        <?= $text ?>
        <input type="text" placeholder="Логин" require>
        <input type="text" placeholder="Логин телеграм" require>
        <input type="text" placeholder="Пароль" require>
        <input type="text" placeholder="Повторить пароль" require>
        <input type="submit" value="Регистрация">
      </form>
    </div>
  </section>
</main>
<?php require_once(__DIR__ . "/layout/footer.php") ?>