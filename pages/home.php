    <section class="flex center-x center-y banner-principal column">
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>img/capa-1.jpg');" class="banner-single"></div>
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>img/capa-2.jpg');" class="banner-single"></div>
        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>img/capa-3.jpg');" class="banner-single"></div>
        <div class="overlay"></div>
        <div class="box-conteudo-principal flex">
            <div class="box-form">
                <form action="">
                    <h2>Qual o seu melhor email?</h2>
                    <input type="email" name="email" required>
                    <input type="submit" name="acao" value="Cadastrar">
                </form>
            </div>

            <div class="bullets flex gap-3 center-x"></div>
        </div>
    </section>

    <section class="container descricao-autor">
        <div class="flex justify-content-between mobile-column gap-10">
            <div class="text-descricao">
                <h2>Fulano Ciclano</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In facilis harum nulla vitae! Dicta voluptate fugit quisquam, neque vel placeat praesentium reiciendis, deserunt exercitationem quidem quas, excepturi at consequuntur distinctio! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit aliquam nulla reprehenderit facilis vel excepturi possimus accusantium! Nam, ab reiciendis corporis ipsa aliquid impedit mollitia saepe non, aliquam, voluptatibus rerum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam magni corporis animi optio tempora commodi exercitationem soluta quos illo accusamus reiciendis atque quasi nesciunt cumque nobis, aspernatur qui quaerat sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit qui, possimus aliquam quo quos in minima, ipsa ratione iure neque magnam suscipit est enim dolore corrupti doloremque autem ex placeat.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In facilis harum nulla vitae! Dicta voluptate fugit quisquam, neque vel placeat praesentium reiciendis, deserunt exercitationem quidem quas, excepturi at consequuntur distinctio! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit aliquam nulla reprehenderit facilis vel excepturi possimus accusantium! Nam, ab reiciendis corporis ipsa aliquid impedit mollitia saepe non, aliquam, voluptatibus rerum?</p>
            </div>

            <div class="img-perfil flex center-x center-y">
                <img src="<?php echo INCLUDE_PATH; ?>/img/perfil.jpg" alt="Minha foto de perfil">
            </div>
        </div>
    </section>

    <section class="especialidades">
        <h2 class="title">Especialidades</h2>
        <div class="container flex mobile-column gap-10">
            <div class="box-especialidades">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae temporibus quasi asperiores dignissimos aperiam possimus cum ex voluptatibus numquam nostrum id, optio minima, repellat enim sunt facere ad deserunt explicabo.</p>
            </div>

            <div class="box-especialidades">
                <h3><i class="fa-brands fa-css3-alt"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae temporibus quasi asperiores dignissimos aperiam possimus cum ex voluptatibus numquam nostrum id, optio minima, repellat enim sunt facere ad deserunt explicabo.</p>
            </div>

            <div class="box-especialidades">
                <h3><i class="fa-brands fa-js"></i></h3>
                <h4>Javascript</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae temporibus quasi asperiores dignissimos aperiam possimus cum ex voluptatibus numquam nostrum id, optio minima, repellat enim sunt facere ad deserunt explicabo.</p>
            </div>
        </div>
    </section>

    <section class="extras">
        <div class="container flex mobile-column gap-10">
            <div id="depoimentos"  class="depoimentos-container">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimentos-single">
                    <p class="depoimento-descricao">
                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempore cupiditate autem voluptate animi possimus quibusdam ipsa ratione! Atque perspiciatis iste officia in corporis, odio consequatur alias perferendis! Quo, architecto!"
                    </p>

                    <p class="nome-autor">Lorem ipsun</p>
                </div>

                <div class="depoimentos-single">
                    <p class="depoimento-descricao">
                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis tempore cupiditate autem voluptate animi possimus quibusdam ipsa ratione! Atque perspiciatis iste officia in corporis, odio consequatur alias perferendis! Quo, architecto!"
                    </p>

                    <p class="nome-autor">Lorem ipsun</p>
                </div>
            </div>

            <div id="servicos" class="depoimentos-container">
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