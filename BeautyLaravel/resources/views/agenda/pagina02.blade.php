<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Agendamento</title>
</head>
<body>
        <div class="appointment">
            <div class="img">
                <img src="imagens/perfil.png"> 
            </div>
    
            <h2>Horário agendado com Bruna Blancardi</h2>
            <ul class="semana">
                <li>Seg</li>
                <li>Ter</li>
                <li>Qua</li>
                <li>Qui</li>
                <li>Sex</li>
                <li>Sab</li>
                <li>Dom</li>
            </ul>
            <center>
            <h3> Março</h3>
    
            <ul>
                <li>Quarta, 4 de março de 2024</li>
            </ul>
        </center>
            <div class="separaçao">
            <h3>Horários marcados</h3>
            <ul>
                <li>Quarta - Horário agendado com Bruna Blancardi de 13:00 a 14:00 - Pé e Mão</li>
                <li>Quarta - Horário agendado com Luiza Dias de 15:00 a 16:00 - Sobrancelha </li>
                <li>Quarta - Horário agendado com Carla Luiza de 19:00 a 20:00 - Cabelo</li>
            </ul>
        </div>

        </div>
    <section>
        <div class="forms">
            <h1>Agende um horário</h1>
           
                <label for="nome">Nome do Cliente:</label>
                <input type="text" id="nome" name="nome" required>
    
                <label for="servico">Serviço:</label>
                <select id="servico" name="servico" required>
                    <option value="">Selecione o serviço</option>
                    <option value="corte">Corte de Cabelo</option>
                    <option value="pemao">Pé e mão</option>
                    <option value="pedicure">Pedicure</option>
                    <option value="manicure">Manicure</option>
                    <option value="cilios">Cílios</option>
                    <option value="Sobrancelha">Sobrancelha</option>
                </select>
    
                <label for="horario">Horários Disponíveis:</label>
                <select id="servico" name="servico" required>
                    <option value="">Selecione o horário  </option>
                    <option value="uma">13:00</option>
                    <option value="duas">14:00</option>
                    <option value="tres">15:00</option>
                    <option value="quatro">16:00</option>
                    <option value="cinco">17:00</option>
                    <option value="seis">18:00</option>
                    <option value="sete">19:00</option>
                    <option value="oito">20:00</option>
                </select>
    
                <input type="submit" value="Finalizar Agendamento">
            </form>
        </div>
        </div>
    </section>
    
</body>
</html>