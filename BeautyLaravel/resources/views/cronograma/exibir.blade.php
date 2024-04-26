<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/montarCronograma.css">
    @vite(['resources/css/montarCronograma.css', 'resources/js/app.js'])
    <title>Montar cronograma</title>
</head>

<body>
    <div id="calendario">
        <img src="/public/imgs/perfil.png" alt="perfil" width="100px" id="perfil">
        <p>Horário agendendado com Bruna Biancardi</p>
        <div id="marco">
            <img src="img/seta_pra_direita.png" alt="" width="27px" height="27px">
            <p class="mes">Março</p>
            <img src="img/seta_pra_esquerda.png" alt="" width="27px" height="27px">
        </div>
        <table>
            <tr>
                <td>
                    <p class="diasem"><a href="#seg">Dom</a></p>
                    <p>1</p>
                </td>
                <td>
                    <p class="diasem"><a href="#seg">Seg</a></p>
                    <p>2</p>
                </td>
                <td>
                    <p class="diasem"><a href="#ter">Ter</a></p>
                    <p>3</p>
                </td>
                <td>
                    <p class="diasem"><a href="#quar">Quar</a></p>
                    <p>4</p>
                </td>
                <td>
                    <p class="diasem"><a href="#quin">Quin</a></p>
                    <p>5</p>
                </td>
                <td>
                    <p class="diasem"><a href="#sex">Sex</a></p>
                    <p>6</p>
                </td>
                <td>
                    <p class="diasem"><a href="#sab">Sab</a></p>
                    <p>7</p>
                </td>
            </tr>
            <p class="diasem"></p>
            <p></p>
        </table>
        <div id="agendado">
            <h2>Horarios marcados</h2>
            <p></p>
        </div>
    </div>
    <div id="horarios">
        <h2>Agende um horário</h2>
        <p>Nome do cliente</p>
        <input type="text" class="Caixa">
        <p>Qual serviço será realizado?</p>
        <input type="text" class="Caixa">
        <p>Horário de início:</p>
        <input type="text" class="Caixa">
        <p>Horário de finalização:</p>
        <input type="text" class="Caixa">
        <button id="agendamento">Finalizar agendamento</button>
    </div>

</body>

</html>