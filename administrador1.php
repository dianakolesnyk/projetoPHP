<?php
include('header.php');
?>

<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded">
          <p style="font-size: 20px;"><b>Insira os seus dados de Administrador</b></p>
          <form action="administrador2.php" method="post">
            Nome: <br> <input type="text" name="nome" style="margin-bottom: 5px;">
            <p>
            Password: <br> <input type="password" name="password" id="">
            <p>
            <input type="submit" value="Entrar" id="">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
include('footer.php');
?>