<?php 
    include './DB/config.php';

    $sql = 'SELECT * FROM livros';
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Administrador</title>
    <link rel="stylesheet" href="./style/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header id="menu-adm">
        <div id="logo-text-adm">
            <a href="index.php" id="logo-nav-adm">
                Biblioteca Digital
            </a>
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

    <section id="carousel">
        <p id="carousel-text">
            Um ótimo dia de trabalho!
        </p>
    </section>

    <section id="catalog">
        <div class="page-title-div">
            <h2 class="page-title">
                Catálogo
            </h2>
            <a href="cadastrar-livro.php">
                Cadastrar novo livro
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div id="full-catalog">
            <div id="filters">
                <span>Filtrar por:</span>

                <div class="filter-group">
                    <button id="show-date">
                        Data <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div id="filter-date" class="filter-options" style="display: none;">
                        <label for="start-date">De:</label>
                        <input type="date" id="start-date">
                        <label for="end-date">Até:</label>
                        <input type="date" id="end-date">
                    </div>
                </div>

                <div class="filter-group">
                    <button id="show-author">
                        Autor <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="select-author" style="display: none;">
                        <input type="text" placeholder="Pesquise aqui" />
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="books-to-manage">
                <div class="books-header">
                    <div class="checkbox-btn">
                        <input type="checkbox" id="select-all">
                        <label for="select-all">Selecionar tudo</label>
                    </div>
                    <div class="labels">
                        <span>Título</span>
                        <span>Autor</span>
                        <span>Ano</span>
                        <span>Data de aquisição</span>
                    </div>
                </div>

                <?php
                    if ($result) {
                        while ($linha = mysqli_fetch_assoc($result)) {
                            $id = htmlspecialchars($linha['id']);
                            $titulo = htmlspecialchars($linha['titulo']);
                            $autor = htmlspecialchars($linha['autor']);
                            $ano = htmlspecialchars($linha['ano']);
                            $data_obtencao = htmlspecialchars($linha['data_obtencao']);

                            echo "
                                <div class='book-card-adm'>
                                    <div class='book-cover-adm'>
                                        <input type='checkbox' class='select-book' value='$id'>
                                        <img src='./assets/imgs/818Hap7wCcL._UF894,1000_QL80_.jpg' alt='' class='book-cover-img-adm'>
                                    </div>
                                    <div class='labels'>
                                        <span>$titulo</span>
                                        <span>$autor</span>
                                        <span>$ano</span>
                                        <span>$data_obtencao</span>
                                    </div>
                                    <div class='btns'>
                                        <a href='editar_cadastro.php?id=$id' class='op-btn'><i class='fa-solid fa-pen-to-square'></i></a>
                                        <a href='excluir_cadastro.php?id=$id' class='op-btn'><i class='fa-solid fa-trash-can'></i></a>
                                    </div>
                                </div>
                                <div class='break-line'></div>";
                        }
                    }
                ?>
            </div>
        </div>
    </section>

    <footer id="simple-footer">
        <div id="footer-content">
            <div class="contact-support">
                <span>Contato e suporte</span>
                <div class="break-line-white"></div>
                <div class="informations">
                    <p>(67) 99999-6666</p>
                    <p>vajulinhadmdabiblioteca@hotmail.com</p>
                    <p>R. do Parque, 75 - Centro, Campo Grande, MS</p>
                </div>
            </div>
            <div class="follow-us-our-story">
                <div class="follow-us">
                    <span>Siga nossas redes sociais</span>
                    <div class="break-line-white"></div>
                    <div class="social-media-btns">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
                    </div>
                </div>
                <div class="about-us">
                    <span>Sobre a empresa</span> 
                    <div class="break-line-white"></div>
                    <a href="about-us.php">Nossa história</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
