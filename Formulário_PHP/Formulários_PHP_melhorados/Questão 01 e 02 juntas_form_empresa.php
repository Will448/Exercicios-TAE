 <style>
body {
  background-image: url('https://img.freepik.com/fotos-gratis/fundo-azul-gradiente-de-luxo-abstrato-azul-escuro-liso-com-vinheta-preta_1258-48251.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  color: whitesmoke;
}
</style>
<?php
/*
Aluno: Willian Bongiovanni
QUESTÃO 1 E QUESTÃO 2 JUNTAS- CRIE UM FORMULARIO COM TODOS OS INPUTS E OUTRO FORMULÁRIO COM NO MINIMO 5 INPUTS

echo "Nome: ".$_GET['nome']."</br>";
echo "CPF: ".$_GET['cpf']."</br>";
echo "Telefone: ".$_GET['telefone']."</br>";
echo "Sexo: ".$_GET['sexo']."</br>";
*/
echo "Visão dos dados preechidos: </br>";
echo "Dados do fornecedor: </br>";
echo "</br>";
echo "Nome da empresa: ".$_POST['nome_empresa']."</br>";
echo "CNPJ: ".$_POST['cnpj']."</br>";
echo "Número da nota: ".$_POST['numero_nota']."</br>";
echo "Valor da nota: ".$_POST['valor_nota']."</br>";
echo "Telefone: ".$_POST['telefone']."</br>";
echo "</br>";
echo "Dados do produto: </br>";
echo "Nome da produto: ".$_POST['nome_produto']."</br>";
echo "Código de barras: ".$_POST['cod_barra']."</br>";
echo "Data de válidade: ".$_POST['dta_validade']."</br>";
echo "Data de válidade: ".$_POST['class_prod']."</br>";
echo "Data de válidade: ".$_POST['class_prod1']."</br>";
echo "</br>";
echo "Você marcou as seguintes caixas de seleção: </br>";
echo "</br>";
echo $_POST['materiais1']."</br>";
echo $_POST['materiais2']."</br>";
echo $_POST['materiais3']."</br>";
echo $_POST['materiais4']."</br>";
echo $_POST['materiais5']."</br>";
echo $_POST['materiais6']."</br>";
echo "Dados do funcionário que cadastrou: </br>";
echo "</br>";
echo "Tipo de funcionário".$_POST['funcionario']."</br>";
echo "Hora e data do cadastro".$_POST['cad_hora']."</br>";
echo "Id do funcionário responsável: ".$_POST['id_funcionario']."</br>";
echo "Dados adicionais do produto: </br>";
echo "Cor aparente do produto ".$_POST['fav_cor']."</br>";
echo "Email do fornecedor ".$_POST['email']."</br>";
echo "Anexo ".$_POST['arquivo']."</br>";
echo "Possível término do produto: ".$_POST['mes_ano']."</br> Possível semana de compra para repor o estoque".$_POST['semana']."</br>";
echo "Resultado da pesquisa: ".$_POST['pesquisa']."</br>";
echo "Conteúdo extra: ".$_POST['url']."</br>";
echo "Sua satisfação e término de expediente:"."</br>";
echo "término de expediente: ".$_POST['expediente']."</br>";
echo "Sua nota de satisfação foi: ".$_POST['opiniao']."</br>";
echo "</br>";
?> 
