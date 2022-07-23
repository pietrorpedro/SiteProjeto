<?php
include_once 'includes/head.php';
include_once 'includes/header.php';
?>

<div class="container login-page mt-5">
    <h1 class="text-center">Faça o seu login</h1>
    <form action="" method="post">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha" placeholder="Senha">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Entrar</button>
    </form>
</div>

<?php
include_once 'includes/footer.php';
?>