<?php 
include_once('config.php');

if(isset($_GET['editId']) && is_numeric($_GET['editId'])){
    $id = $_GET['editId'];
    $row = $db->getAllRecords('formclientes','*'," AND id='$id'");
}

if(isset($_POST['submit'])){
    
    $campos = ['nome','documento','email','telefone','cep','estado','cidade','bairro','logradouro','numero','complemento'];

    foreach($campos as $campo){
        if(empty($_POST[$campo])){
            header("location: ".$_SERVER['PHP_SELF']."?editId=".$_POST['editId']."&msg=erro");
            exit;
        }
    }

    $data = [
        'nome' => $_POST['nome'],
        'documento' => $_POST['documento'],
        'email' => $_POST['email'],
        'telefone' => $_POST['telefone'],
        'cep' => $_POST['cep'],
        'estado' => $_POST['estado'],
        'cidade' => $_POST['cidade'],
        'bairro' => $_POST['bairro'],
        'logradouro' => $_POST['logradouro'],
        'numero' => $_POST['numero'],
        'complemento' => $_POST['complemento'],
        'status' => $_POST['status'],
    ];

    $update = $db->update('formclientes', $data, ['id' => $_POST['editId']]);

    if($update){
        header('location: browser_user.php?msg=rus');
    } else {
        header('location: browser_user.php?msg=rnu');
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Cliente</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="container mt-4">

<h2 class="mb-4">Editar Cliente</h2>

<form method="POST">

<input type="hidden" name="editId" value="<?= $row[0]['id'] ?>">

<div class="row">

<div class="col-md-4 mb-3">
<label>Nome</label>
<input type="text" name="nome" class="form-control" value="<?= $row[0]['Nome'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Documento</label>
<input type="text" name="documento" class="form-control" value="<?= $row[0]['Documento'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" value="<?= $row[0]['Email'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Telefone</label>
<input type="text" name="telefone" id="telefone" class="form-control" value="<?= $row[0]['Telefone'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>CEP</label>
<input type="text" name="cep" class="form-control" value="<?= $row[0]['CEP'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Estado</label>
<input type="text" name="estado" class="form-control" value="<?= $row[0]['Estado'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Cidade</label>
<input type="text" name="cidade" class="form-control" value="<?= $row[0]['Cidade'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Bairro</label>
<input type="text" name="bairro" class="form-control" value="<?= $row[0]['Bairro'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Logradouro</label>
<input type="text" name="logradouro" class="form-control" value="<?= $row[0]['Logradouro'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Número</label>
<input type="text" name="numero" class="form-control" value="<?= $row[0]['Numero'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Complemento</label>
<input type="text" name="complemento" class="form-control" value="<?= $row[0]['Complemento'] ?>">
</div>

<div class="col-md-4 mb-3">
<label>Status</label>
<select name="status" class="form-control">
    <option <?= $row[0]['Status']=='Pendente'?'selected':'' ?>>Pendente</option>
    <option <?= $row[0]['Status']=='Aprovado'?'selected':'' ?>>Aprovado</option>
    <option <?= $row[0]['Status']=='Cancelado'?'selected':'' ?>>Cancelado</option>
</select>
</div>

</div>

<div class="mt-3">
<button type="submit" name="submit" class="btn btn-success">
    <i class="bi bi-check"></i> Atualizar
</button>
<input type="hidden" name="editId" id="editId" value="<?php echo $_REQUEST['editId']?>">
<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Atualizar o cliente/Update cliente</button>

<a href="browser_user.php" class="btn btn-secondary">
    Voltar
</a>
</div>

</form>

</div>

</body>
</html>