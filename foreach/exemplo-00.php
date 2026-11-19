<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Formulario Basico</title>
</head>
<body>
    <!-- Criação de um Formulario Basico usando PHP --> 

    <form action="envia-dados" method="GET">
        <!-- Campo Nome -->
         <div>
            <label for="nome">NOME:</label>
            <input type="text" id="nome" name="nome_de_usuario" placeholder=" Digite o seu nome" require></input>
        <!-- Campo de E-mail -->
            <label for="E-mail">E-MAIL:</label>
            <input type="email" id="mail" name="E-mail_de_usuario" placeholder="Digite aqui seu E-mail" required></input>

        <!-- Campo de Mensagem -->
            <label for="msg">DIGITE A MENSAGEM:</label>
            <input type="text" id="texto" name="campo_de_mensagem" placeholder="digite aqui"></input>

        <!-- Endereço usuario -->
            <label for="adress">SEU ENDEREÇO:</label>
            <input type="text" id="adress" name="endereco" placeholder="Digite seu endereço"></input>

        <!-- Data de Nascimento -->
            <label for="data_de_nascimento">SELECIONE SEU ANO DE NASCIMENTO</label> 
            <?php
            echo "<select>";
            for($i = date("Y"); $i >= date("Y")-1990; $i--):
             echo "</select>";
             
            endfor;
            ?>
            

         </div>

         <!-- Botão de Envio -->
          <button type="submit">Enviar</button>
    </form>

</body>
</html>