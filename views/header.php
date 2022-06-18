<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Cursos</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    
    <header>
        <div class="container">
            <a href="?pagina=home"> <img src="./img/logo.png" title="logo" alt ="logo"></a>
            <div id="menu">
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matricula">Matriculas</a>
                <?php if(isset($_SESSION['login'])){?>
                <a href="logout.php"> <?php echo $_SESSION['usuario']; ?> (Sair)  </a>}<?php } ?>
            </div>
        </div>
    </header>

    <div id="conteudo" class="container">


</body>



</html>