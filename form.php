<h2>Cadastro de usuários</h2>

<form action="salvar.php" method = "POST">
    Nome: <input type="text" name="nome" required><br>
    CPF/CNPJ: <input type="number" name="documento" required><br>
    E-mail: <input type="email" name="email" required><br>
    Telefone: <input type="number" name="telefone" min="1" required><br>
    CEP: <input type="number" name="cep" required><br>
    Estado: <input type="text" name="estado" required><br>
    Cidade: <input type="text" name="cidade" required><br>
    Bairro: <input type="text" name="bairro" required><br>
    Logradouro: <input type="text" name="logradouro" required><br>
    Número: <input type="number" name="numero" required><br>
    Complemento: <input type="text" name="complemento" required><br>
    <button>Salvar</button>
</form>