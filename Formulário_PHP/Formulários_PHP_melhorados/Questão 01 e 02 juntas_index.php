<html>
  <head>
    <title>PHP formulário-melhorado</title>
     <!--Aluno: Willian Bongiovanni
QUESTÃO 1 E QUESTÃO 2 JUNTAS- CRIE UM FORMULARIO COM TODOS OS INPUTS E OUTRO FORMULÁRIO COM NO MINIMO 5 INPUTS-->
  </head>
    <style>
body {
  background-image: url('https://img.freepik.com/free-photo/colour-smoke-background_71163-197.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  color: gray
}
</style>

<center> <button onclick="alert('Qualquer pessoa de sucesso sabe que é uma peça importante, mas sabe que não conseguirá nada sozinho. ')" > <h1 style='color:DeepSkyBlue'>Formulário para cadastro  &#127873</h1> </center> </button>

   <form action="form_empresa.php" method="post"
     <!--method="get"- outra maneira de saída-->
     <h2 style='color:whitesmoke'>Cadastro do fornecedor: </h2>
     <br>
  <label for="nome"> Nome do fornecedor: </label>
     <br>
  <input type="text" id="nome_empresa" name="nome_empresa">
     <br>
  <label for="cnpj">CNPJ(Cadastro de pessoas júridicas):</label>
     <br>
  <input type="text" id="cnpj" name="cnpj" placeholder="00.000.000/0001-00"> 
     <br>
  <label for="num_nota">Número da nota:</label>
  <br>
  <input type="number" id="numero_nota" name="numero_nota">
  <br>
  <label for="valor_nota">Valor total da nota:</label>
  <br>  
  <input type="number" id="valor_nota" name="valor_nota">
  <br>
  <label for="telefone">Telefone com DDD(sem os parentese e com o -):</label>
     <br>
  <input type="tel" id="telefone" name="telefone" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}"placeholder="(00)000000000">
     <br>
     <br>
     <h3 style='color:whitesmoke'>Cadastro do produto: </h3>
     <br>
     <label for="nome"> Nome do produto: </label>
     <br>
  <input type="text" id="nome_produto" name="nome_produto">
     <br>
  <label for="cod_barra">Coloque o código de barras do produto:</label>
     <br>
  <input type="text" id="cod_barra" name="cod_barra"> 
     <br>
  <label for="num_nota">Valor unitário do produto:</label>
  <input type="number" id="custo_prod" name="custo_prod">
     <br>
      <label for="dta_validade">Data de válidade:</label>
  <input type="date" id="dta_validade" name="dta_validade">
     <br>
     <h4 style='color: white'><u>Classifique o produto:</u></h4>
  <input type="radio" name="class_prod" value="perecivel"/>Perecível
     <br>
  <input type="radio" name="class_prod" value="N_perecvel"/>Não perecível
     <br>
     <h4 style='color: white'><u>Classifique o produto:</u></h4>
     <input type="radio" name="class_prod1" value="duravel"/>Durável
     <br>
  <input type="radio" name="class_prod1" value="N_duravel"/>Não durável
     <br>
     <h4 style='color: white'> <big>Marque a opção de acordo com a característica do produto </big></h3>
  <input type="checkbox" name="materiais1" value="Produto embalado">
  <label for="Produto embalado">Produto embalado</label> 
     <br>
  <input type="checkbox" name="materiais2" value="Produto in-natura">
  <label for="Produto in-natura"> Produto in-natura</label
     <br>
     <br>
     <input type="checkbox" name="materiais3" value="grande durabilidade">
  <label for="grande durabilidade"> Grande durabilidade</label
     <br><br>
     <input type="checkbox" name="materiais4" value="Possuí uma alta demanda">
  <label for="Possuí uma alta demanda"> Possuí uma alta demanda</label
     <br><br>
     <input type="checkbox" name="materiais5" value="Precisa de cuidados especiais">
  <label for="Precisa de cuidados especiais"> Precisa de cuidados especiais</label
     <br><br>
  <input type="checkbox" name="materiais6" value="É algo que pode causar danos físicos ou materias">
  <label for="É algo que pode causar danos físicos ou materias"> É algo que pode causar danos físicos ou materias</label
     <br><br><br>
<label for="estudo" style='color: white'> <big>Funcionário</big></label>
<br>
<input type="radio" name="funcionario" value="Administração"/> Administração
     <br>
    <input type="radio" name="funcionario" value="Estoquista"/> Estoquista
    <br>
    <input type="radio" name="funcionario" value="Vendedor"/> Vendedor
<br>
  <label for="cad_hora">Data e hora do cadastro:</label>
  <input type="datetime-local" id="cad_hora" name="cad_hora">
     <br>
   <label for="id_funcionario">Id do funcionário:</label>
  <input type="number" id="id_funcionario" name="id_funcionario">
     <br>
<p1 style='color: white'> Informações adicionais sobre o produto </p1>
  <label for="favcolor">Selecione a cor aparente do produto: </label>
  <input type="color" id="fav_cor" name="fav_cor">
     <br>
  <label for="email">Coloque o email do fornecedor:</label>
  <input type="email" id="email" name="email">
     <br>
  <label for="arquivo">Selecione o arquivo que você deseja colocar como anexo para esse produto: </label>
  <input type="file" id="arquivo" name="arquivo">
     <br>
   <label for="mes_ano">Possível término do estoque:(mês e ano)</label>
  <input type="month" id="mes_ano" name="mes_ano">  
     <br>
  <label for="semana">Possível compra para repor o estoque:(semana e ano)</label>
  <input type="week" id="semana" name="semana">
     <br>
      <label for="pesquisa">Tem dúvida em alguma questão do produto, então pesquise no Google:</label>
  <input type="search" id="pesquisa" name="pesquisa"
     <br>
  <label for="url">Em sua pesquisa você encontrou algo legal sobre o produto, então link a url para que os demais funcionários possa saber dessa informação: </label>
  <input type="url" id="url" name="url">
    <br>
    <br>
     <p2 style='color: white'>Para nós é uma honra saber sua satisfação com o sistema e por isso coloque uma nota de 0 a 10, sendo que 0 é péssimo, 10 excelente e 5 intermediário</p2>
     <br>
     <label for="opiniao">Sua opinião de 0 a 10):</label>
  <input type="range" id="opiniao" name="opiniao" min="0" max="10">
    <br>
     <label for="expediente">Coloque a hora de término do seu expediente</label>
  <input type="time" id="expediente" name="expediente">
     <br>
     <br>
     <input type="submit" value="Salvar"/>
    
</form>
      
  </body>
</html>
