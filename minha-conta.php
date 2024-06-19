<?php require_once("header.php"); ?>

<div class="minha-conta">
    <div class="container">
        <div class="linha">
            <div class="col-2">

                <img src="assets/img/banner-1.png" alt="" width="100%">

            </div>
            <div class="col-2">
                <div class="fomulario">
                    <div class="btn-form">
                        <span onclick="Entrar()">Entrar</span>
                        <span onclick="Cadastro()">Cadastro</span>
                        <hr id="Indicador">
                    </div>

                    <form action="" method="post" id="EntrarPainel">
                        <input type="email" name="email" id="" placeholder="E-mail de acesso">
                        <input type="password" name="senha" id="" placeholder="Digite sua senha">
                        <button type="submit" name="senEntrar" class="btn">Entrar</button>
                        <a href="" title="">Esqueceu sua senha?</a>
                    </form>


                    <form action="" method="post" id="CadastroSite">
                        <input type="text" name="nome" id="" placeholder="Nome Completo">
                        <input type="email" name="email" id="" placeholder="E-mail de acesso">
                        <input type="password" name="senha" id="" placeholder="Digite sua senha">
                        <button type="submit" name="sendCad" class="btn">Cadastre-se</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once("footer.php"); ?>