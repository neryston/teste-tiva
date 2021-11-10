<?php

include_once("conexao.php");

$nome= $_POST['nome'];
$descricoes= $_POST['descricoes'];
$email= $_POST['email'];
$contato= $_POST['contato'];
$upfoto=  $_POST['upfoto'];
$cep= $_POST['cep'];
$estado= $_POST['estado'];
$cidade= $_POST['cidade'];
$bairro= $_POST['bairro'];
$rua= $_POST['rua'];
$numero= $_POST['numero'];


$sql="INSERT INTO profissional (nome, descricao, email, numerocel, fotop) VALUES ('$nome','$descricoes','$email','$contato','$upfoto')";
$salvar=mysqli_query($conn,$sql);
$id_profissional = mysqli_insert_id($conn);
echo "<br>ID: ". $id_profissional;
if($salvar){
    echo "<br>SQL1 Salvo";
}else{
    echo "<br> SQL1 Error: ";
    echo mysqli_error($conn);
}
$sql2="INSERT INTO endereços (ID, CEP, Estado, Cidade, Bairro, Rua, Nº) VALUES ('$id_profissional', '$cep', '$estado', '$cidade', '$bairro', '$rua', '$numero')";
echo "<br> sql2: ". $sql2;

$salvar=mysqli_query($conn,$sql2);
if($salvar){
    echo "<br>SQL2 Salvo";
}else{
    echo "<br> SQL2 Error";
    echo mysqli_error($conn);
}
exit();
mysqli_close($conn);

