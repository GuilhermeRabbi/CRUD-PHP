<?php

$servidor = "localhost";
$login = "root";
$senha="123456";
$database="aula_php";

$conexao = mysqli_connect($servidor, $login, $senha, $database);

$query = "SELECT * FROM CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT ALUNOS.NOME_ALUNO, CURSOS.NOME_CURSO, ALUNOS_CURSOS.ID_ALUNO_CURSO
          FROM ALUNOS, CURSOS, ALUNOS_CURSOS 
          WHERE ALUNOS_CURSOS.ID_ALUNO = ALUNOS.ID_ALUNO 
            AND ALUNOS_CURSOS.ID_CURSO = CURSOS.ID_CURSO";
$consulta_matricula = mysqli_query($conexao, $query);







