<?php

    require_once("conexao.php");    
   
    $id2 = $_POST['id'];
    $file = $_FILES['file'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    if (empty($id2) || empty($name) || empty($price)) {
    die('Erro: Todos os campos são obrigatórios.');
}

if (!is_numeric($price)) {
    die('Erro: O preço deve ser um número.');
}

    if(!empty($file['name'])) {
        $diretorio = "./";
        $imagem = $file['name'];
        move_uploaded_file($file['tmp_name'], $imagem);
    }

    $consulta = $conn->prepare("UPDATE produtos SET imagem=:imagem, nome=:nome, preco=:preco WHERE id=:idd"); 
    
    $consulta->bindParam(':idd', $id2);
    $consulta->bindParam(':imagem', $imagem);
    $consulta->bindParam(':nome', $name);
    $consulta->bindParam(':preco', $price);

    $consulta->execute();

    if($consulta) {
        header("Location: index.php");
    }else {
        echo "Erro ao Atualizar dados";
    }

?>
