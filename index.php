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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

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
                            <p><?php echo number_format($produtos["preco"], 2, ",", "."); ?> KZ</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="edita.php" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                
                            </div>
                            <div class="col-sm-6">
                                <a href="deletar.php" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                }
                ?>
                    <div class="col-sm-12">
                        <a href="inserir.php" class="btn btn-primary form-control" style="margin-top: 20px; margin-bottom: 20px"><i class="fa fa-plus"></i> Adicionar Produto</a>
                    </div>
            </div>
        </div>

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