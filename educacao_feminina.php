<?php
require_once 'config.php';

class EducacaoFeminina {
    private $conn;

    public function __construct() {
        $this->conn = (new Database())->connect(); // Chamada da função de conexão do arquivo config.php para conectar ao banco de dados.
    }

    // Função para criar um novo registro
    public function create($nome, $quantidade_alunas, $quantidade_alunos, $curso) {
        // Comando SQL para inserir dados na tabela educacao_feminina.
        $sql = "INSERT INTO educacao_feminina (nome, quantidade_alunas, quantidade_alunos, curso) 
                VALUES (:nome, :quantidade_alunas, :quantidade_alunos, :curso)";

        // Preparando a consulta SQL, que vai proteger o banco contra injeção de SQL.
        $stmt = $this->conn->prepare($sql);

        // Associando os valores aos parâmetros da consulta.
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':quantidade_alunas', $quantidade_alunas);
        $stmt->bindParam(':quantidade_alunos', $quantidade_alunos);
        $stmt->bindParam(':curso', $curso);

        // Executando a consulta SQL e retornando true ou false, dependendo se a execução foi bem-sucedida.
        return $stmt->execute();
    }

    // Função para ler todos os registros
    public function read() {
        $sql = "SELECT * FROM educacao_feminina";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        // Retorna todos os registros encontrados, em formato de array associativo.
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Função para atualizar um registro
    public function update($id, $nome, $quantidade_alunas, $quantidade_alunos, $curso) {
        $sql = "UPDATE educacao_feminina SET nome = :nome, quantidade_alunas = :quantidade_alunas, 
                quantidade_alunos = :quantidade_alunos, curso = :curso WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':quantidade_alunas', $quantidade_alunas);
        $stmt->bindParam(':quantidade_alunos', $quantidade_alunos);
        $stmt->bindParam(':curso', $curso);

        return $stmt->execute();
    }

    // Função para excluir um registro
    public function delete($id) {
        $sql = "DELETE FROM educacao_feminina WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Função para encontrar um registro específico pelo ID
    public function find($id) {
        $sql = "SELECT * FROM educacao_feminina WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
