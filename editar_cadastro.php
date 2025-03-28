<?php 
    include './DB/config.php';

    $livro = [];

    $id_recebido = $_GET['id'] ?? null;

    if ($id_recebido) {
        $sql = "SELECT * FROM livros WHERE id = $id_recebido";
        $result = mysqli_query($conn, $sql);

        $livro = mysqli_fetch_assoc($result) ?? [];
    }

    if (isset($_POST['editar'])) {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $sinopse = $_POST['sinopse'];
        $ano = $_POST['ano'];
        $data_obtencao = $_POST['data_obtencao'];

        $sql_update = "UPDATE livros SET titulo='$titulo', autor='$autor', genero='$genero', sinopse='$sinopse', ano='$ano', data_obtencao='$data_obtencao' WHERE id = $id_recebido";
        mysqli_query($conn, $sql_update);

        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar livro</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header id="menu-adm">
        <div id="logo-text-adm">
            <a href="home.php" id="logo-nav-adm">Biblioteca Digital</a>
        </div>
        <div id="second-div-adm">
            <div class="search-container-pg-inicial-adm">
                <input type="text" placeholder="Pesquise aqui" />
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="change-to-general">
                <a href="index.php" class="change-to-general-btn">Geral</a>
            </div>
        </div>
    </header>

    <section class="cadastrar-livro">
        <h2 class="page-title">Cadastrar livro</h2>
        <div class="cadastrar-livro-content">
            <div class="cadastrar-livro-form">
                <form method="post">
                    <div id="form-div1">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" value="<?php echo $livro['titulo'] ?? ''; ?>" required>

                        <label for="autor">Autor</label>
                        <input type="text" name="autor" id="autor" value="<?php echo $livro['autor'] ?? ''; ?>" required>

                        <label for="genero">Gênero</label>
                        <input type="text" name="genero" id="genero" value="<?php echo $livro['genero'] ?? ''; ?>" required>

                        <label for="sinopse">Sinopse</label>
                        <input type="text" name="sinopse" id="sinopse" value="<?php echo $livro['sinopse'] ?? ''; ?>" required>

                        <label for="ano">Ano de publicação</label>
                        <input type="date" name="ano" id="ano" value="<?php echo $livro['ano'] ?? ''; ?>" required>

                        <label for="data_obtencao">Data de aquisição</label>
                        <input type="date" name="data_obtencao" id="data_obtencao" value="<?php echo $livro['data_obtencao'] ?? ''; ?>" required>
                    </div>
                    <div class="submit-btn">
                        <button type="submit" name="editar" id="bot" value="cadastrar">Salvar alterações</button>
                    </div>
                </form>
            </div>
            <div class="upload-cover">
                <label for="imageUpload" class="upload-box" id="uploadBox">
                    <span>Carregar imagem de capa</span>
                    <img src="./assets/imgs/817bVkQAWhL._AC_UF1000,1000_QL80_.jpg" id="previewImage">
                </label>
                <input type="file" id="imageUpload" accept="image/*" style="display: none;">
                <button class="upload-btn">Upar <i class="fa-solid fa-arrow-up-from-bracket"></i></button>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
