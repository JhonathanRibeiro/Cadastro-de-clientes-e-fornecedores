<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
    <!-- FORMULARIO DE CADASTRO -->
    <div class="row container">
        <p>&nbsp;</p>
        <form action="BD/create.php" method="POST" class="col s12">
          <fieldset class="formulario" style="padding: 15px">
              <legend>
                  <img src="img/user.png" alt="[image]" width="150">
              </legend>
            <h5 class="light center">Cadastro de Clientes</h5>

            <?php include 'includes/input_fields.inc.php'; ?>
            <!-- BOTÕES -->
            <div class="input-field col s12">
                <input type="submit" value="cadastrar" class="btn blue" id="submit">
                <input type="reset" value="limpar" class="btn red">
            </div>
          </fieldset>
        </form>
    </div>
 <?php include_once 'includes/footer.inc.php' ?>