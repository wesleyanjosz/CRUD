<?php
require_once './php-action/db-connect.php';
require_once './includes/header.php';
require_once './includes/msg.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>E-mail:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = 'select * from clientes';
                $result = mysqli_query($connect, $sql);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $data['nome']; ?></td>
                    <td><?php echo $data['sobrenome']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['idade']; ?></td>
                    <td><a href="editar.php?id=<?php echo $data['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="./adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php
require_once './includes/footer.php';
?>