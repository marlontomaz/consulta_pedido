<?php

require "bd.php";  // chamar o arquivo para referenciar a função criada no arquivo bd

$nome = $_POST['nome'];
$email = $_POST['email'];
$turma = $_POST['turma'];
$data = $_POST['data'];

$sql = "INSERT INTO alunos (id, nome, email, turma, data) 
VALUES (NULL, '$nome', '$email', '$turma', '$data')";

//echo $sql; // sempre testar e verificar se vai inserir com echo e variavel da conexao 

$con = dbcon();
    
    $sql = "SELECT * FROM alunos ORDER BY $coluna ASC";
    
    $res = mysqli_query($con, $sql);  //grava no banco de dados 
    
    if($res == true){              // a opção insert do mysql retorna apenas true ou false 
        echo "Dados cadastrados com sucesso";
        header("location: index.php");
    } else {
        echo"Ocorreu um erro ao Cadastrar";
}