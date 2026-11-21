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
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome_de_usuario" placeholder=" Digite o seu nome" require></input><br>
        <!-- Campo de E-mail -->
            <label for="E-mail">E-mail:</label><br>
            <input type="email" id="mail" name="E-mail_de_usuario" placeholder="Digite aqui seu E-mail" required></input><br>

        <!-- Campo de Mensagem -->
            <label for="msg">Informe o Texto:</label><br>
            <input type="text" id="texto" name="campo_de_mensagem" placeholder="digite aqui"></input><br>

        <!-- Endereço usuario -->
            <label for="adress">Informe seu Endereço:</label><br>
            <input type="text" id="adress" name="endereco" placeholder="Digite seu endereço"></input><br>

        <!-- Data de Nascimento -->
            <label for="data_de_nascimento">Selecione seu ano de nascimento</label><br>
            <?php  echo "<select>";  for($i = date("Y"); $i >= date("Y")-100; $i--){  echo "</select>" . "<br>"; }        
             
            
            ?>
             <!-- Botão de Envio -->
             
         </div>

    </form>
<button type="button" name="Enviar">Enviar</button><br>
</body>
</html>