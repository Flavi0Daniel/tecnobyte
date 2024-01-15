<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tecnobyte - Contactos</title>
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

    <section id="informacoes-contato">
        <h2>Contacte-nos</h2>
        <p>Estamos aqui para ajudar. Preencha o formulário abaixo e entraremos em contato o mais breve possível.</p>

        <form id="formulario-contato">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

            <button type="submit">Enviar Mensagem</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Tecnobyte. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
