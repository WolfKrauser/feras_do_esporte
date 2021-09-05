<!DOCTYPE html>
<html>
    <head>
        <?php include('includes/head.php'); ?>
        <title>Feras do Esporte</title>
    </head>
    <body id="mainPage">
        <?php include('includes/header.php'); ?>

        <section class="firstContent mainContainer mgTop">
            <div class="main flex_r flex_w">
                <div class="leftPrincipal flex_c">
                    <div class="sliderPrincipal fullW">
                        <?php include('includes/sliderPrincipal.php'); ?>
                    </div>

                    <div class="gridDestaque fullW grid2">
                        <?php for($d=0;$d<2;$d++){ ?>
                            <a href="" class="itemNoticia fullW flex_c">
                                <div class="imgItemNoticia fullW flex rel">
                                    <img src="assets/img/imgNoticia.png">
                                </div>

                                <div class="txtItemNoticia fullW flex_c">
                                    <span class="orangeFont bold uppercase margin20">Campeonato Série A</span>
                                    <h6 class="small-t bold">Daniel Alves se manifesta após eliminação do São Paulo</h6>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>

                <div class="rightPrincipal flex_c">
                    <a href="" class="itemNoticia fullW flex_c">
                        <div class="imgItemNoticia fullW flex rel">
                            <img src="assets/img/imgNoticia.png">
                        </div>

                        <div class="txtItemNoticia fullW flex_c">
                            <span class="orangeFont bold uppercase margin20">Campeonato Série A</span>
                            <h6 class="small-t bold">Daniel Alves se manifesta após eliminação do São Paulo</h6>
                        </div>
                    </a>

                    <div class="tabelaIndex fullW flex_r flex_w">
                        <h6 class="flex middle bold uppercase fullW"><img src="assets/img/icon_ball.png"> Campeonato Brasileiro</h6>

                        <!-- Selecionar séries -->
                        <a href="javascript:;" class="itemSerie ativo">Série A</a>
                        <a href="javascript:;" class="itemSerie">Série B</a>

                        <!-- Listagem de times -->
                        <div class="gridTimes fullW grid">
                            <?php for($t=0;$t<25;$t++){ ?>
                            <a href="javascript:;"><img src="assets/img/icon_time.png" alt="Flamengo" title="Flamengo"></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('includes/bloco1.php'); ?>

        <section class="maisLidas mainContainer bgWhite">
            <div class="main flex_r flex_w middle">
                <h2 class="main-t letterSpacing medium uppercase darkFont">Mais Lidas</h2>

                <ul class="filtroMaisLidas">
                    <li class="ativo"><a href="javascript:;">Hoje</a></li>
                    <li><a href="javascript:;">Semana</a></li>
                    <li><a href="javascript:;">Mês</a></li>
                </ul>

                <select>
                    <option value="">Hoje</option>
                    <option value="">Semana</option>
                    <option value="">Mês</option>
                </select>

                <div class="gridMaisLidas fullW grid4">
                    <?php for($ml=0;$ml<4;$ml++){ ?>
                        <a href="" class="itemNoticia itemNoticia2 fullW flex_c">
                            <div class="imgItemNoticia2 fullW flex rel">
                                <img src="assets/img/imgNoticia.png">
                                <span>1</span>
                            </div>

                            <div class="txtItemNoticia2 fullW flex_c">
                                <span class="orangeFont bold uppercase margin20">Campeonato Série A</span>
                                <h6 class="small-t bold">Daniel Alves se manifesta após eliminação do São Paulo</h6>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="trends mainContainer bgWhite">
            <div class="main flex_r flex_w middle rel">
                <div class="trendsContent fullW flex_r flex_w middle">
                    <div class="imgTrends flex">
                        <img src="assets/img/trends.png">
                    </div>

                    <a href="">#Campeonato Brasileiro</a>
                    <a href="">#Futebol</a>
                    <a href="">#LoremIpsum</a>
                    <a href="">#Goias</a>
                    <a href="">#Whatif</a>
                    <a href="">#Marvel</a>
                    <a href="">#Brasil</a>
                </div>
            </div>
        </section>

        <?php include('includes/footer.php'); ?>
    </body>
</html>