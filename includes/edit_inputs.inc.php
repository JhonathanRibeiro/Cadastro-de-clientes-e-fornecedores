<!-- CAMPO NOME -->
<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
    <label for="nome">Nome do Cliente</label>
</div>
<!-- CAMPO EMAIL -->
<div class="input-field col s12">
    <i class="material-icons prefix">email</i>
    <input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required>
    <label for="email">Email do Cliente</label>
</div>
<!-- CAMPO TELEFONE -->
<div class="input-field col s12">
    <i class="material-icons prefix">phone</i>
    <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15" required>
    <label for="telefone">Telefone do Cliente</label>
</div>
<!-- CAMPO FORNECEDOR -->
<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    <input type="text" name="fornecedor" id="fornecedor" value="<?php echo $fornecedor ?>" maxlength="35" required>
    <label for="fornecedor">Fornecedor</label>
</div>
<!-- CAMPO CONFERENTE -->
<div class="input-field col s12">
    <i class="material-icons prefix">assignment</i>
    <input type="text" name="conferente" id="conferente" value="<?php echo $conferente ?>" maxlength="35" required>
    <label for="conferente">Conferente</label>
</div>