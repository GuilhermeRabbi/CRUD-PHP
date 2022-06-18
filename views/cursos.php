
<a href="?pagina=inserir_curso"><button id="botao-curso">Inserir Novo Curso</button></a> 



<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome Curso</th>
        <th>Carga Horária</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php  
        while ($linha = mysqli_fetch_array($consulta_cursos)){
            echo '<tr><td>' .$linha['nome_curso']. '</td>';
            echo '<td> '.$linha['carga_horario'].' </td> ';
            echo '<td> <a href="?pagina=inserir_curso&editar='. $linha['id_curso'] .'">Editar</a> </td>';
            echo '<td> <a href="./deleta_curso.php?id_curso='. $linha['id_curso'] .'">Excluir</a> </td> </tr>';
        }
    ?>
</table>