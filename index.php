<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/style/style.css">
    <title>Projeto 01</title>
</head>
<body>
    <base base="<?php echo INCLUDE_PATH; ?>" />
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        switch ($url):
            case 'depoimentos':
                echo '<target target="depoimentos" />';
                break;
            
            case 'servicos':
                echo '<target target="servicos" />';
                break;
        endswitch;
    ?>
    <header>
        <div class="container flex justify-content-between">
            <div class="logo"><a href="<?php echo INCLUDE_PATH; ?>">Logomarca</a></div>
            <nav class="desktop">
                <ul class=" flex center-y">
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>

            <nav class="mobile">
                <div class="menu-hamburger">
                    <i class="fa-solid fa-bars"></i>
                </div>  

                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <?php

        if(file_exists("pages/$url.php")):
            include("pages/$url.php");
        else:
            if($url != 'depoimentos' && $url != 'servicos'):
                $pagina404 = true;
                include("pages/404.php");
            else:
                include('pages/home.php');
            endif;
        endif;

        ?>
    </main>

    <footer>
        <div class="container">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/menu.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/navegacao.js"></script>
    <?php
        if($url == 'home' || $url == ''):
    ?>
        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php
        endif;
    ?>
</body>
</html>