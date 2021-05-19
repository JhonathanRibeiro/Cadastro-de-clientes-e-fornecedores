<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Consultas</h5><hr>
        
        <form action="busca.php" method="GET"> 
            <input type="text" name="pesquisa" size="50" placeholder="Nome cliente" autofocus> 
        </form>
        
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include_once 'BD/read.php';
                ?>
            </tbody>
        </table>
    </div>
</div>



















<?php include_once 'includes/footer.inc.php' ?>