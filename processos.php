<?php

    require_once("conexao.php");    
   
    $file = $_FILES['file'];
    $name = $_POST['name'];
    $price = $_POST['price'];


    if(!empty($file['name'])) {
        $diretorio = "./";
        $imagem = $file['name'];
        move_uploaded_file($file['tmp_name'], $imagem);
    }

    $consulta = $conn->prepare("INSERT INTO produtos (imagem, nome, preco) VALUES (:imagem, :nome, :preco)");
    $consulta->bindParam(':imagem', $imagem);
    $consulta->bindParam(':nome', $name);
    $consulta->bindParam(':preco', $price);

    $consulta->execute();

    if($consulta) {
        header("Location: index.php");
    }else {
        echo "Erro ao inserir dados";
    }

?>