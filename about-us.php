<?php 
    include './DB/config.php';
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

    <section id="carousel-about-us">
        <h3 id="carousel-title">
            Sobre nós
        </h3>
        <p id="carousel-text">
            Somos uma empresa familiar, que nasceu muito além da necessidade de organização, mas nos limites da paixão daquilo em que acreditamos: histórias que inspiram, ensinam. 
        </p>
    </section>

    <section id="linha-do-tempo">
        <h3 class="page-title">
            Linha do tempo
        </h3>
        <div id="tl-img-div">
            <img src="./assets/imgs/hbliegaieub.jpg" alt="" id="timeline-img">
        </div>
        <div class="timeline">
            <div class="timeline-left">
                <h5 class="timeline-year">
                    1956
                </h5>
                <span class="timeline-moment">
                    Nascimento da nossa matriarca
                </span>
            </div>
            <div class="timeline-right">
                <h5 class="timeline-year">
                    1986
                </h5>
                <span class="timeline-moment">
                    Fundação da Biblioteca Agostinho Carrara em Xique-xique, Bahia
                </span>
            </div>
        </div>
        <div class="final-statement">
            <i class="fa-solid fa-book-open"></i>
            <p class="final-text">
                E assim nasceu nossa biblioteca
            </p>
        </div>
    </section>



    <footer id="simple-footer">
        <div id="footer-content">
            <div class="contact-support">
                <span>
                    Contato e suporte
                </span>
                <div class="break-line-white">
                </div>
                <div class="informations">
                    <p>
                        (67) 99999-6666
                    </p>
                    <p>
                        vajulinhadmdabiblioteca@hotmail.com
                    </p>
                    <p>
                        R. do Parque, 75 - Centro, Campo Grande, MS
                    </p>
                </div>
            </div>
            <div class="follow-us-our-story">
                <div class="follow-us">
                    <span>
                        Siga nossas redes sociais
                    </span>
                    <div class="break-line-white">
    
                    </div>
                    <div class="social-media-btns">
                        <a href="#">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-square-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-square-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="about-us">
                    <span>
                        Sobre a empresa
                    </span> 
                    <div class="break-line-white">
    
                    </div>
                    <a href="about-us.php">Nossa história</a>
                </div>
                
            </div>
        </div>
        

    <script src="script.js"></script>
</body>
</html>