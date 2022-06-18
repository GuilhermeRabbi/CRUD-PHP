
<h1>Inserir Nova Matricula</h1>
<p>Selecione o Aluno</p>

<form method="POST" action="processar_matricula.php">
    <select name="escolha_aluno">
        <?php
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<option value="'.$linha['id_aluno'].'">' .$linha['nome_aluno']. '</option>';
            }
        ?>
    </select>

    <select name="escolha_curso">
        <?php
            while($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<option value="' .$linha['id_curso']. '">' .$linha['nome_curso']. '</option>';
            }
        ?>
    </select>

    <input type="submit" value="Enviar Matricula">
</form>