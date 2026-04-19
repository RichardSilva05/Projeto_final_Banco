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
    $r['Nome'] . " | " .
    $r['Documento'] ." | " .  
    $r['Email'] . " | " . 
    $r['Telefone'] . " | " . 
    $r['CEP'] . " | " . 
    $r['Estado'] . " | " .
    $r['Cidade'] . " | " .
    $r['Bairro'] . "  " .
    $r['Logradouro'] . " | " .
    $r['Numero'] . " | " .
    $r['Complemento'] . "<br>";
}

?>