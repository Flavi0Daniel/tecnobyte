<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tecnobyte - Produtos</title>
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

    <section id="catalogo">
        <div class="categoria">
            <h3>Auriculares</h3>
            <div class="produto" id="produto1">
                <img src="719aLEkzkGL._AC_SL1280_-removebg-preview.png" alt="Smartphone 1">
                <p>Mpow H7 Auricular Bluetooh</p>
                <p>Preço: 17.000,00 KZ</p>
            </div>
            
        </div>

        <div class="categoria">
            <h3>Laptops</h3>
            <div class="produto" id="produto2">
                <img src="baixados.png" alt="Laptop 1">
                <p>ASUS F415</p>
                <p>Preço: 550.000,00 KZ</p>
            </div>
            
        </div>
        
    </section>

    <script>
        
        document.querySelectorAll('.produto').forEach(function(produto) {
            produto.addEventListener('click', function() {
                alert('Clicou no produto: ' + produto.querySelector('p').textContent);
                
            });
        });
    </script>

    <footer>
        <p>&copy; 2023 Tecnobyte. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
