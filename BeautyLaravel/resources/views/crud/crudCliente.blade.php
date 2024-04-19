<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Clientes</title>
    <link rel="stylesheet" href="cliente.css">
    @vite(['resources/css/crudCliente.css'])

</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Clientes</h1>

        <div id="form-container">
            <h2>Novo Cliente</h2>
            <form id="cliente-form">
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>
                </div>
                <center>
                    <button type="submit">Salvar</button>
                    <button class="excluir" type="reset">Excluir</button>
                    <button class="editar" type="button">Editar</button>
                </center>            </form>
        </div>

        <div id="table-container">
            <h2>Lista de Clientes</h2>
            <table id="clientes-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    </tbody>
            </table>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
