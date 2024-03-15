<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <title>Projeto 01</title>
</head>
<body>
    <header>
        <div class="container flex justify-content-between">
            <div class="logo">Logomarca</div>
            <nav class="desktop">
                <ul class=" flex center-y">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>

            <nav class="mobile">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="container banner-principal">
        <div class="">
            <form action="">
                <h2>Qual o seu melhor email?</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar">
            </form>
        </div>
    </section>

    <section class="container descricao-autor">
        <div class="flex mobile-column">
            <div class="">
                <h2>Fulano Ciclano</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In facilis harum nulla vitae! Dicta voluptate fugit quisquam, neque vel placeat praesentium reiciendis, deserunt exercitationem quidem quas, excepturi at consequuntur distinctio! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit aliquam nulla reprehenderit facilis vel excepturi possimus accusantium! Nam, ab reiciendis corporis ipsa aliquid impedit mollitia saepe non, aliquam, voluptatibus rerum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam magni corporis animi optio tempora commodi exercitationem soluta quos illo accusamus reiciendis atque quasi nesciunt cumque nobis, aspernatur qui quaerat sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit qui, possimus aliquam quo quos in minima, ipsa ratione iure neque magnam suscipit est enim dolore corrupti doloremque autem ex placeat.</p>
            </div>

            <div class="flex center-x">
                <img src="./img/perfil.jpg" alt="Minha foto de perfil" style="max-width: 500px; max-height: 650px">
            </div>
        </div>
    </section>

    <section class="container especialidades">
        <h2 class="title">Especialidades</h2>
        <div class="flex mobile-column">
            <div class="box-especialidades">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae temporibus quasi asperiores dignissimos aperiam possimus cum ex voluptatibus numquam nostrum id, optio minima, repellat enim sunt facere ad deserunt explicabo.</p>
            </div>

            <div class="box-especialidades">
                <h3><i class="fa-brands fa-css3-alt"></i></h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae temporibus quasi asperiores dignissimos aperiam possimus cum ex voluptatibus numquam nostrum id, optio minima, repellat enim sunt facere ad deserunt explicabo.</p>
            </div>

            <div class="box-especialidades">
                <h3><i class="fa-brands fa-js"></i></h3>
                <h3>Javascript</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae temporibus quasi asperiores dignissimos aperiam possimus cum ex voluptatibus numquam nostrum id, optio minima, repellat enim sunt facere ad deserunt explicabo.</p>
            </div>
        </div>
    </section>

    <section class="container extra">
        <div class="flex mobile-column">
            <div class="">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimentos-single">
                    <p class="depoimento-descricao">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempore cupiditate autem voluptate animi possimus quibusdam ipsa ratione! Atque perspiciatis iste officia in corporis, odio consequatur alias perferendis! Quo, architecto!
                    </p>

                    <p class="nome-autor">Lorem ipsun</p>
                </div>

                <div class="depoimentos-single">
                    <p class="depoimento-descricao">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempore cupiditate autem voluptate animi possimus quibusdam ipsa ratione! Atque perspiciatis iste officia in corporis, odio consequatur alias perferendis! Quo, architecto!
                    </p>

                    <p class="nome-autor">Lorem ipsun</p>
                </div>

                <div class="depoimentos-single">
                    <p class="depoimento-descricao">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempore cupiditate autem voluptate animi possimus quibusdam ipsa ratione! Atque perspiciatis iste officia in corporis, odio consequatur alias perferendis! Quo, architecto!
                    </p>

                    <p class="nome-autor">Lorem ipsun</p>
                </div>
            </div>

            <div class="">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate numquam molestias incidunt sequi minus inventore laboriosam earum omnis dolorum tempore, ab aliquam unde ullam. Sint eaque molestias non quasi excepturi?</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis recusandae natus dolorum voluptate error nulla quia quasi, deserunt mollitia! Delectus amet nostrum ipsa obcaecati. Harum eaque quaerat corrupti accusamus unde!</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, officiis nam sit quod eaque saepe corporis iure quidem veritatis delectus, recusandae consequuntur cupiditate culpa est praesentium quasi similique ipsum expedita?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum earum, temporibus quo repellat suscipit quas? Ea repellat sequi nesciunt iste sint natus corrupti nisi. Beatae minus nostrum error nihil magnam.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>
</body>
</html>