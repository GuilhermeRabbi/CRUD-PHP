
<a href="?pagina=inserir_aluno"> <button id="botao-curso">Inserir Novo Aluno</button> </a>

<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome</th>
        <th>Data Nascimento</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>

    <?php 
        while($linha = mysqli_fetch_array($consulta_alunos)){
            echo '<tr> <td>' .$linha['nome_aluno']. '</td>';
            echo '<td>' .$linha['data_nascimento']. '</td>';
            echo '<td> <a href=?pagina=inserir_aluno&editar='.$linha['id_aluno'] .'>Editar</a></td>';
            echo '<td> <a href=./deletar_aluno.php/?id_aluno='.$linha['id_aluno'] .'>Excluir</a> </td></tr>';
        }
    ?>

</table> 