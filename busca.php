<?php 
 session_start();
 include_once 'includes/header.inc.php';
 include_once 'includes/menu.inc.php';
?>
<div class="row container">
    <table class="striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Cliente</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Fornecedor</th>
                    <th>Conferente</th>
                    <th>Data cadastro</th>
                    <th>Data alteração</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'BD/conexao.php';
                    $busca = $_GET['pesquisa'];

                    $querySelect = $link->query("SELECT * FROM clientes WHERE nome LIKE '%$busca%' ");
                    while($registros = $querySelect->fetch_assoc()):
                    $id       = $registros['id'];
                    $nome     = $registros['nome'];
                    $email     = $registros['email'];
                    $telefone     = $registros['telefone'];
                    $fornecedor = $registros['fornecedor'];
                    $conferente    = $registros['conferente'];
                    $created   = $registros['created_at'];
                    $update   = $registros['updated_at'];

                    echo "
                    <tr>
                    <td>$id</td>
                    <td>$nome</td>
                    <td>$email</td>
                    <td>$telefone</td>
                    <td>$fornecedor</td>
                    <td>$conferente</td>
                    <td>$created</td>
                    <td>$update</td>
                    </tr>
                    ";
                endwhile;

                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once 'includes/footer.inc.php' ?>
