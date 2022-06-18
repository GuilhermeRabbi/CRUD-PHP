<a href="?pagina=inserir_matricula"><button id="botao-curso">Inserir Nova Matricula</button></a> 

<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome Aluno</th>
        <th>Nome Curso</th>
        <th>Excluir</th>
    </tr>
    <?php
        while($linha = mysqli_fetch_array($consulta_matricula)){
            echo '<tr> <td>' .$linha['NOME_ALUNO']. '</td>';
            echo '<td>' .$linha['NOME_CURSO']. '</td>';
            echo '<td><a href="./deletar_matricula.php?id_curso_aluno='.$linha['ID_ALUNO_CURSO'].'">Excluir</a></td></tr>';
        }
 
    ?>
  
</table>