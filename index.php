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
                if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                        <tr>
                            <td><?php echo $data['nome']; ?></td>
                            <td><?php echo $data['sobrenome']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['idade']; ?></td>
                            <td><a href="editar.php?id=<?php echo $data['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                            <td><a href="#modal<?php echo $data['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                            <!-- Modal Structure -->
                            <div id="modal<?php echo $data['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Opa!</h4>
                                    <p>Tem certeza que deseja excluir esse cliente?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="./php-action/delete.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>
                                </div>
                            </div>

                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
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