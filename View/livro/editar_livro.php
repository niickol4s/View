<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/geral.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/section.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <title>Biblioteca Online | Editar Livro</title>
</head>
<body>
    <main-header></main-header>

    <main>
        <section class="container">
            <form action="editar_livro.php" method="POST">
                <h1>Editar Livro</h1>
                <p>Edite de forma rápida livros com seus respectivos títulos, autores e anos de publicação.</p>

                <label for="titulo">Título:</label>
                <input type="text" placeholder="Título" name="titulo" id="titulo" required>

                <label for="autor">Autor:</label>
                <input type="text" placeholder="Autor" name="autor" id="autor" required>

                <label for="ano_publicacao">Ano de Publicação:</label>
                <input type="number" placeholder="Ano de Publicação" name="ano_publicacao" id="ano_publicacao" min="0" required>

                <input type="submit" value="Editar Livro">
                <input type="reset" value="Limpar">
            </form>
        </section>
    </main>


    <main-footer></main-footer>

    <script src="../js/header.js"></script>
    <script src="../js/footer.js"></script>
</body>
</html>