<?php
require_once 'educacao_feminina.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $educacao = new EducacaoFeminina();
    $educacao->delete($id);
    
    header("Location: index.php");
}
?>
