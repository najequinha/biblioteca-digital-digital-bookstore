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
    <title>Home - Biblioteca Digital</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header id="menu">
        <div id="logo-text">
            <a href="index.php" id="logo-nav">
                Biblioteca Digital
            </a>
        </div>
        <div id="second-div">
            <div class="search-container-pg-inicial">
                <input type="text" placeholder="Pesquise aqui" />
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="change-to-adm">
                <a href="adm-homepage.php" class="change-to-adm-btn">Administrador</a>
            </div>
        </div>
    </header>

    <section id="carousel">
        <p id="carousel-text">
            Um site; Todos os livros que você precisa.
        </p>
    </section>

    <section id="catalog">
        <h2 class="page-title">
            Catálogo
        </h2>
        <div id="full-catalog">
            <div id="filters">
                <span>
                    Filtrar por:
                </span>

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

                <div class="break-line" style="display: none;"></div>

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
            <div id="books-in-storage">
            <?php
            if ($result) {
                while ($linha = mysqli_fetch_assoc($result)) {
                    $titulo = htmlspecialchars($linha['titulo']);
                    $autor = htmlspecialchars($linha['autor']);
                    $ano = htmlspecialchars($linha['ano']);

                    echo ' 
                        <div class="book-card">
                            <img src="./assets/imgs/61kif0Iav7L._AC_UF1000,1000_QL80_.jpg" alt="Capa do livro" id="book-cover">
                            <div class="book-attributes">
                                <h3 class="book-title">'.$titulo.'</h3>
                                <span>'.$autor.'</span>
                                <span>'.$ano.'</span>
                            </div>
                        </div>';
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
