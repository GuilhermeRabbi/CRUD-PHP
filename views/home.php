

<h1 style="text-align:center;">Bem Vindo ao Dog Cursos</h1>
<br><br>

<form style="text-align:center;" method="POST" action="login.php">
<label>Usuario:</label>
    <input type="text" name="usuario" placeholder="Usuario">
<br><br>
<label>Senha:</label>
    <input type="password" name="senha" placeholder="Senha">
<br><br>
    <input type="submit" value="Entrar">

</form>
<br>
<?php 
    if(isset($_GET['erro'])){?>
    <div style="background-color: rgba(233, 105, 105, 0.678);text-align: center; margin:auto;">
        Usuário e/ou senha inválida.
    </div>


<?php } ?>