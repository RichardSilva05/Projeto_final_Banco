<?php

include 'conexao.php';

if(
    empty ($_POST['nome']) ||
    empty ($_POST['documento']) ||
    empty ($_POST['email']) ||
    empty ($_POST['telefone']) ||
    empty ($_POST['cep']) ||
    empty ($_POST['estado']) ||
    empty ($_POST['cidade']) ||
    empty ($_POST['bairro']) ||
    empty ($_POST['logradouro']) ||
    empty ($_POST['numero']) ||
    empty ($_POST['complemento'])
){
    die("Preencha todos os campos!!");
}

mysqli_query($conn, "INSERT INTO id(
    nome,documento,email,telefone,cep,estado,cidade,bairro,logradouro,numero,complemento
    ) VALUES (
    '$_POST[nome]',
    '$_POST[documento]',
    '$_POST[email]',
    '$_POST[telefone]',
    '$_POST[cep]',
    '$_POST[estado]',
    '$_POST[cidade]',
    '$_POST[bairro]',
    '$_POST[logradouro]',
    '$_POST[numero]',
    '$_POST[complemento]'
    )");



header("Location: index.php");



?>