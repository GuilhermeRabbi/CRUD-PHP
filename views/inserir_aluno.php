
<?php 
    if(!isset($_GET['editar'])){?>

        <h1>Inserindo Novo Aluno!</h1>

        <form method="POST" action="./processar_aluno.php">
            <br><br>
            <label>Nome do Aluno: </label>
            <input type="text" name="nome_aluno" placeholder="Informe o nome"> <br> <br>

            <label>Data Nascimento: </label>
            <input type="text" name="data_nascimento" placeholder="Informe Dt_Nascimento"> <br><br>

            <input type="submit" value="Inserir Novo Aluno">

        </form>
<?php 
}else{
    while ($linha = mysqli_fetch_array($consulta_alunos)){
        if($linha['id_aluno'] == $_GET['editar']){?>    
        
        <h1>Alterando Aluno!</h1>

        <form method="POST" action="./editar_aluno.php">
            <br><br>
            <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno'];?>">
            <label>Nome do Aluno: </label>
            <input type="text" name="nome_aluno" placeholder="Informe o nome" value="<?php echo $linha['nome_aluno'] ?>"> <br> <br>

            <label>Data Nascimento: </label>
            <input type="text" name="data_nascimento" placeholder="Informe Dt_Nascimento" value="<?php echo $linha['data_nascimento'] ?>"> <br><br>

            <input type="submit" value="Alterar Aluno">

        </form>

<?php }}} ?>