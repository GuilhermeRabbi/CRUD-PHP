
<?php 

if(!isset($_GET['editar'])){?> 

    <h1>Inserir Novo Curso</h1>

    <form method="post" action="./processar_curso.php">
        <br>
        <label>Nome Curso: </label><br>
        <input type="text" name="nome_curso" placeholder="Nome do Curso"><br><br>
        <label>Carga Horaria do Curso: </label><br>
        <input type="text" name="carga_horaria" placeholder="Carga Horaria"> <br> <br>
        <input type="submit" value="Inserir Curso">
    </form>

<?php 

}else{
    while ($linha = mysqli_fetch_array($consulta_cursos)){ 
        if($linha['id_curso'] == $_GET['editar']){?>
        <h1>Editar Curso</h1>

        <form method="post" action="./edita_curso.php">
            <br>
            <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
            <br>
            <label>Nome Curso: </label><br>
            <input type="text" name="nome_curso" placeholder="Nome do Curso" value="<?php echo $linha['nome_curso']; ?>"><br><br>

            <label>Carga Horaria do Curso: </label><br>
            <input type="text" name="carga_horaria" placeholder="Carga Horaria" 
            value="<?php echo $linha['carga_horario']; ?>"> <br> <br>

            <input type="submit" value="Alterar Curso">
        </form>


<?php }}} ?>




