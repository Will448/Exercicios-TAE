<?php

class BD {

    private $host ="localhost";
    private $dbname ="tai_aula_2022";
    private $port = 3306;
    private $usuario = "root";
    private $senha = "";
    private $db_charset = "utf8";

    public function conn(){
        $conn = "mysql:host=$this->host;
            dbname=$this->dbname;port=$this->port";

        return new PDO($conn,$this->usuario,$this->senha,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ". $this->db_charset]
    );
    }
     public function select(){
         $conn = $this->conn();
         $st = $conn->prepare("SELECT * FROM usuario");
         $st->execute();

        return $st;
     }

     public function inserir($dados){
        $conn = $this->conn();
        $sql = "INSERT INTO usuario SET 'nome' = ?, 'telefone' = ?, 'cpf' = ? where id = ?";
        $st = $conn->prepare($sql);
        $arrayDados = [];
        $arrayDados [] = $dados['nome'];
        $arrayDados [] = $dados['telefone'];
        $arrayDados [] = $dados['cpf'];
/*pode ser feita a conexão desta maneira--- $arrayDados = [$dados['nome'], $dados['telefone'], $dados['cpf']];*/
       
        $st->execute($arrayDados);

    return $st;
    }

    public function update($dados){
        $conn = $this->conn();
        $sql = "UPDATE usuario SET 'nome' = ?, 'telefone' = ?, 'cpf' = ? where id = ?";
        $st = $conn->prepare($sql);
        $arrayDados = [$dados['nome'], $dados['telefone'], $dados['cpf']];

//pode ser feita a conexão desta maneira--- $arrayDados = [$dados['nome'], $dados['telefone'], $dados['cpf']];
       
        $st->execute($arrayDados);

    return $st;
    }

    public function delete($dados){
        $conn = $this->conn();
        $sql = "DELETE FROM usuario WHERE id = ?";
        $st = $conn->prepare($sql);
        $arrayDados = [$dados];

//pode ser feita a conexão desta maneira--- $arrayDados = [$dados['nome'], $dados['telefone'], $dados['cpf']];
       
        $st->execute($arrayDados);

    return $st;
    }

    public function buscar($id){
        $conn = $this->conn();
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $st = $conn->prepare($sql);
        $arrayDados = [$id];

//pode ser feita a conexão desta maneira--- $arrayDados = [$dados['nome'], $dados['telefone'], $dados['cpf']];
       
        $st->execute($arrayDados);

    return $st;
    }

}
?>