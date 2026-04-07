<?php

include 'conexao.php';
?>

<h2 class="text-center" >Fazer Orçamento</h2>
<!--Link HTML que leva o usuario
para o formulario de cadastro(form.php)-->
<a href="form.php">NOVO</a><br><br>
<hr>
<?php

$res = mysqli_query($conn, "SELECT * FROM id");

while ($r = mysqli_fetch_assoc($res)){
    echo 
    $r['nome'] . " | " .
    $r['documento'] ." | " .  
    $r['email'] . " | " . 
    $r['telefone'] . " | " . 
    $r['cep'] . " | " . 
    $r['estado'] . " | " .
    $r['cidade'] . " | " .
    $r['bairro'] . " | " .
    $r['logradouro'] . " | " .
    $r['numero'] . " | " .
    $r['complemento'] . "<br>";
}

?>