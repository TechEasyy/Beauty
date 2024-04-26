!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Procedimentos Estéticos</title>
    <link rel="stylesheet" href="crudStyle.css">
    @vite(['resources/css/crud.css'])

</head>

<body>
    <div class="container">
        <h1>CLIENTES</h1>

        <div class="quadrado">
           
            <h2 class="text1">Novo Cliente</h2>
            <div id="form-container">

            <form id="procedimento-form">
                    <div class="form-group">

                        <label for="nome">Nome Completo:</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="descricao">Telefone:</label>
                        <textarea id="descricao" name="descricao" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="valor">Email:</label>
                        <input type="number" id="valor" name="valor" required>
                    </div>

                </div>            
        </div>
    </div>
        
          <div class="button">
                <button type="submit">Salvar</button>
                <button class="excluir" type="reset">Excluir</button>
                <button class="editar" type="button">Editar</button>
           
            </div>
            </form>
     

        <div id="table-container">
            <h2>Lista de Clientes</h2>
            <table id="procedimentos-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefoe</th>
                        <th>Email</th>
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
