<?php 
include('header.php');
?>

  <section class="page-section about-heading">
    <div class="container">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper text-center">Entre em contacto conosco</span>
              </h2>
              <form action="formulario.php" method="POST" style="text-align: center;">
                <label for="nome" style="margin-top: 5px;">Nome</label> <br>
                <input type="text" placeholder="Digite o seu nome..." id="nome" required name="nome"> <br>
                <label for="email" style="margin-top: 5px;" >Email</label> <br>
                <input type="email" placeholder="Digite o seu email..." required  name="email"> <br>
                <label for="text" style="margin-top: 5px;" >Assunto</label> <br>
                <input type="text" placeholder="Escreva o assunto..." name="assunto"> <br>
                <label for="mensagem" style="margin-top: 5px;" >Mensagem</label> <br>
                <textarea class="col-xl-9 col-lg-10 mx-auto" type="text" rows="4" cols="50" name="mensagem"> </textarea><br>
                <input type="submit" style="padding: 5px; margin-top: 6px;" value="Enviar">
            </form>
              </div> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    window.onload = function() {
      document.getElementById("nome").focus();
    };
    </script>
<?php 
include('footer.php');
?>