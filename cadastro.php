<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <title>Teste-tiva</title>
  </head>
  <body>
    <form method="post" action="processa.php">
    <fieldset class="grupo">
    <h2 id="cadP">Cadastro de Profissionais</h2><br>
    <div>
      <label for="nome">Nome</label>
      <input type="text" size="80" name="nome" id="nome">
    </div>
    <div class="campo">
      <label for="descricoes">Descrições</label>
      <textarea rows="6" style="width: 26em" id="descricoes" name="descricoes"></textarea>
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" size="60" name="email" id="email">
    </div>
    <div>
      <label for="contato">Número de celular</label>
      <input type="tel" name="contato" placeholder="(xx) xxxxx-xxxx">
    </div>
    <div>
      <label for="upfoto">Foto de Perfil</label>
      <input type="file" name="upfoto" id="upfoto"><br><br>
    </div>
    <h2 id="cadE">Cadastro de Endereço</h2> <br>
    <div>
        <label for="cep">CEP</label>
        <input type="number" name="cep" id="cep" min="0">
    </div>
    <div>
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado">
    </div>
    <div>
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade">
    </div>
    <div>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro">
    </div>
    <div>
        <label for="rua">Rua</label>
        <input type="text" name="rua" id="rua">
    </div>
    <div>
        <label for="numero">Nº</label>
        <input type="number" name="numero" id="numero" min="0">
    </div>
    </fieldset>
    <button class="botao" type="submit">Enviar</button>
    </form>
  </body>
</html>
