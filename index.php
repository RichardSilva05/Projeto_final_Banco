<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro de Usuários</title>

</head>
<body>

<h2 class="text-center">Fazer Orçamento</h2>

<a href="form.php">NOVO</a>
<hr>

<table>
    <tr>
        <th>Nome</th>
        <th>Documento</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>CEP</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Bairro</th>
        <th>Logradouro</th>
        <th>Número</th>
        <th>Complemento</th>
        <th>Status</th>
    </tr>

<?php

$res = mysqli_query($conn, "SELECT * FROM formclientes");

while ($r = mysqli_fetch_assoc($res)) {
    echo "<tr>
        <td>{$r['Nome']}</td>
        <td>{$r['Documento']}</td>
        <td>{$r['Email']}</td>
        <td>{$r['Telefone']}</td>
        <td>{$r['CEP']}</td>
        <td>{$r['Estado']}</td>
        <td>{$r['Cidade']}</td>
        <td>{$r['Bairro']}</td>
        <td>{$r['Logradouro']}</td>
        <td>{$r['Numero']}</td>
        <td>{$r['Complemento']}</td>
        <td>
            <select>
                <option>Pendente</option>
                <option>Aprovado</option>
                <option>Cancelado</option>
            </select>
        </td>

    </tr>";
}
?>

</table>

</body>
</html>