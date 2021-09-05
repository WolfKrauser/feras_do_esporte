<header>
    <!-- Header rádio/social/menu contato -->
    <div class="header1 mainContainer mainContainerP">
        <div class="main flex middle">
            <div class="contentHeader1 flex_r flex_w middle right">
                <!-- Btn rádio -->
                <a href="" class="btnRadio flex middle">
                    <div class="iconPlay flex">
                        <button><img src="assets/img/icon_play.png" alt="Radio"></button>
                        <div class="span"></div>
                        <div class="span"></div>
                    </div>

                    <p class="whiteFont uppercase"><span class="exoFont bold orangeFont">Rádio ao Vivo</span> <br>Feras do Esporte <strong>820FM</strong></p>
                </a>


                <!-- Menu e redes sociais -->
                <div class="menuSocial flex middle">
                    <div id="menu1">
                        <?php include('includes/menu.php'); ?>
                    </div>

                    <div class="socialH flex">
                        <?php include('includes/social.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header2 mainContainer mainContainerP">
        <div class="main flex_r flex_w middle rel">
            <!-- Logo -->
            <a href="index.php" class="logoH">
                <img src="assets/img/logoH.png" alt="Feras do Esporte" title="Feras do Esporte">
            </a>

            <div class="contentHeader2 flex_r flex_w middle right">
                <!-- Menu 2 -->
                <div id="menu2">
                    <?php include('includes/menu.php'); ?>
                </div>


                <!-- Filtro de clubes -->
                <div class="filtroClubes flex middle">
                    <ul>
                        <li class="drop"><a href="javascript:;">
                            <img src="assets/img/icon_clubes.png" id="shieldClubs"> <span>Filtrar por <br><strong class="tekoFont">Clubes</strong></span> <img src="assets/img/dropFilterMenu.png" id="arrowDrop"></a>
                            <ul>
                                <div class="contentMenu flex_r flex_w">
                                    <h6 class="flex middle bold uppercase fullW"><img src="assets/img/icon_ball.png"> Campeonato Brasileiro</h6>

                                    <!-- Selecionar séries -->
                                    <li class="selectSeries ativo"><a href="javascript:;">Série A</a></li>
                                    <li class="selectSeries"><a href="javascript:;">Série B</a></li>

                                    <!-- Listagem de times -->
                                    <?php for($t=0;$t<25;$t++){ ?>
                                    <li><a href="javascript:;"><img src="assets/img/icon_time.png" alt="Flamengo" title="Flamengo"></a></li>
                                    <?php } ?>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="posHeader mainContainer mainContainerP">
    <div class="main flex_r flex_w middle rel">
        <div class="contentHeader3 flex_r flex_w middle right">
            <a href="" class="chamadaInLive flex middle">
                <div class="btnPulseLive flex middle"><span></span> <p>Ao Vivo</p></div>

                <h6><strong>Assista ao Feras do Esporte</strong> | 15/08/2021</h6>
            </a>
        </div>
    </div>
</div>