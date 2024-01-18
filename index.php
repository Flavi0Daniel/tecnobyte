<?php
    require_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tecnobyte - Página Inicial</title>
    <!-- shortcut icon & favicon-->
    <link rel="shortcut icon" href="logo-fundo.png" type="image/png">
    <link rel="icon" href="logo-fundo.png" type="image/png">
</head>

<body>
    <header>
        <h1>Tecnobyte</h1>
        <p>Sua Loja de Tecnologia</p>
        <nav>
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="produto.php">Produtos</a></li>
                <li><a href="contactos.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="destaques">

        <h2>Produtos em Destaque</h2>
        <?php
            $consulta_produtos = "SELECT * FROM produtos";
            $resultado_consulta = $conn->query($consulta_produtos);
        ?>

        <div class="container">
            <div class="row">
                <?php
                if ($resultado_consulta->rowCount() > 0) {
                    while ($produtos = $resultado_consulta->fetch()) {
                ?>
                <div class="col-sm-3">
                    <div class="produto">
                        <img src="<?= $produtos["imagem"] ?>" alt="Produto em Destaque 1">
                        <p><?= $produtos["nome"] ?></p>
                        <p><?= $produtos["preco"] ?></p>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>

        <!-- CRUD -->
        <form action="index.php" method="post">
            <button type="submit">Inserir Dados</button>
        </form>

        <form action="editar.php" method="post">
          <button type="submit">Editar Dados</button>
        </form>

        <form action="deletar.php" method="post">
          <button type="submit">Deletar Dados</button>
        </form>

        <!-- Insert into -->
        <?php
        require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "post") {
    $imagem = $_POST["RGB Keyboard.png"];
    $nome = $_POST["TECLADO GAMER RGB K100"];
    $preco = $_POST["Preço: 14.500,00 KZ"];

    $stmt = $conn->prepare("INSERT INTO produtos (imagem, nome, preco) VALUES (:imagem, :nome, :preco)");
    $stmt->bindParam(':imagem', $imagem);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);

    try {
        $stmt->execute();
        echo "Dados inseridos com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao inserir dados: " . $e->getMessage();
    }
}
?>




        <h2>Breve Descrição da Tecnobyte</h2>

        <p>Bem-vindo à Tecnobyte, sua loja online de tecnologia! Oferecemos uma ampla gama de produtos eletrônicos de alta qualidade, desde smartphones e laptops até acessórios inovadores. Nossa missão é proporcionar a você as últimas e melhores tecnologias a preços acessíveis. Explore nosso catálogo e descubra as soluções tecnológicas que você procura.</p>

    </section>
    

    <footer>
        <p>&copy; 2023 Tecnobyte. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>

</html>