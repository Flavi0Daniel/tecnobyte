<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Inserir produto</title>
</head>

<body>
    <div class="container" style="padding-top: 30px;">
        <h1 class="text-center">Adicionar produto</h1>
        <div class="row">
            <form action="processos.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Imagem</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="name" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="price">Preço</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>

                <button type="submit" class="btn btn-primary" name="inserir">Adicionar Produto</button>
            </form>
        </div>
    </div>
</body>

</html>