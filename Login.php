<link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script>

<div class="container mt-5">
    <h2 class="text-center">Login</h2>
    <form action="processar_login.php" method="POST">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </form>
    <div class="text-center mt-3">
        <p>Não tem uma conta? <a href="cadastro1.php">Cadastre-se aqui</a></p>
    </div>
</div><?php


?>





