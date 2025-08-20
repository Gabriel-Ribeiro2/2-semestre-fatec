<?php
class ProdutoController
{
    public function listar()
    {
        //buscar os dados de produto no bd
        $parametros = "mysql:host=localhost;dbname=banco;charset=utf8mb4";

        $conn = new PDO($parametros, "root", "");
        $sql = "SELECT * FROM busca";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $conn = null;
        $resultado = $stm->fetchAll(PDO::FETCH_OBJ);
        //mostrar uma visao
        require_once "Views/listaprodutos.php";
    }
}
