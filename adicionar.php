<?php
include_once './includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Cliente</h3>
        <form action="">
            <div class="input-field col s12">
                <input type="text" name="name" id="name">
                <label for="name">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="lastname" id="lastname">
                <label for="lastname">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="age" id="age">
                <label for="age">Idade</label>
            </div>
            <button type="submit" class="btn">Cadastrar</button>
            <button type="submit" class="btn green">Lista de clientes</button>
        </form>
    </div>
</div>

<?php
include_once './includes/footer.php';
?>