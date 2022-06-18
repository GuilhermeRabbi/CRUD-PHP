<?php
include 'db.php';

    $aluno_escolhido = $_POST['escolha_aluno'];
    $curso_escolhido = $_POST['escolha_curso'];

    $query = "INSERT INTO ALUNOS_CURSOS (ID_ALUNO, ID_CURSO) VALUES ($aluno_escolhido, $curso_escolhido)";

    mysqli_query ($conexao, $query);

    header("location:index.php?pagina=matricula");

?>