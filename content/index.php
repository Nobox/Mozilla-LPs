<?php
    // Random headers for non-Firefox users
    $headlines = array(
        'e seja mais rápido na Web.',
        'e navegue no seu ritmo.',
        'e naveuge numa Web mais privativa.',
        'e navegue por uma internet melhor.'
    );

    $header_bgs = array(
        '/images/bg-skateboard.jpg',
        '/images/bg-page-surfer.jpg',
        '/images/bg-rio-stairs.jpg',
        '/images/bg-drumline.jpg'
    );

?><!DOCTYPE html>
<html class="no-js" lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Título - Mozilla</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="//mozorg.cdn.mozilla.net/media/css/tabzilla-min.css">
        <script src="scripts/vendor/modernizr.custom.js"></script>
    </head>
    <body>
        <div id="outer-wrapper">
            <div class="row">
                <a href="https://www.mozilla.org/" id="tabzilla">mozilla</a>
            </div><!--/.row-->

            <header id="header" role="banner" style="background-image: url('<?php echo $header_bgs[array_rand($header_bgs)] ?>')">
                <div class="row">
                    <img src="images/logo-firefox.png" alt="Firefox" width="216" height="81">

                    <h1 class="for-not-firefox"><strong>Use o Firefox</strong> <?php echo $headlines[array_rand($headlines)] ?></h1>
                    <h1 class="for-old-firefox"><strong>Atualize seu Firefox</strong> e seja mais rápido na Web.</h1>
                    <h1 class="for-firefox"><strong>Baixe o tradutor</strong> e faça o Firefox ser ainda melhor.</h1>

                    <ul id="features">
                        <li>Rápido</li>
                        <li>Privativo</li>
                        <li class="last-child">Orgulhosamente<br>sem fins lucrativos</li>
                    </ul>

                    <div id="downloads">
                        <div class="download-button for-old-firefox for-not-firefox">
                            <a class="download-link" href="http://www.mozilla.org/pt-BR/firefox/new/#download-fx" target="_blank">
                                <span class="download-content">
                                    <strong class="download-title">Baixe agora</strong>
                                    <strong class="update-title" hidden>Atualize agora</strong>
                                </span>
                            </a>
                            <small class="download-other">
                                <a href="http://www.mozilla.org/pt-BR/firefox/all/" target="_blank">Sistemas e idiomas</a> |
                                <a href="http://www.mozilla.org/pt-BR/firefox/25.0.1/releasenotes/" target="_blank">O que há de novo</a> |
                                <a href="http://www.mozilla.org/pt-BR/legal/privacy/firefox.html" target="_blank">Privacidade</a>
                            </small>
                        </div>
                        <div class="download-translator for-firefox">
                            <a class="button-orange" href="#" target="_blank">
                                Instale o Tradutor
                            </a>
                        </div>
                    </div>

                </div><!--/.row-->
            </header><!--/#header-->

            <main id="main" role="main">
                <div class="row">
                    <ul id="tabs" role="tablist">
                        <li id="tab-1" class="tab">
                            <i class="icon icon-translate" role="presentation"></i>
                            <h2>Traduza</h2>
                            <p>Curta a experiência de ter a internet inteira no seu idioma. <a href="#panel-1" role="tab" aria-selected="true">Saiba mais</a></p>
                        </li>
                        <li id="tab-2" class="tab">
                            <i class="icon icon-privacy" role="presentation"></i>
                            <h2>Privativo</h2>
                            <p>Nós respeitamos a sua privacidade e cada clique ligado a ela. <a href="#panel-2" role="tab" aria-selected="false">Saiba mais</a></p>
                        </li>
                        <li id="tab-3" class="tab">
                            <i class="icon icon-nonprofit" role="presentation"></i>
                            <h2>Sem lucro</h2>
                            <p>Nossa missão foi sempre a mesma: inovar para você. <a href="#panel-3" role="tab" aria-selected="false">Saiba mais</a></p>
                        </li>
                    </ul>

                    <div id="panel-1" class="panel" role="tabpanel" aria-labelledby="tab-1">
                        <h2>Traduza</h2>
                        <img src="images/img-translate.jpg" alt="">
                        <p>O Google Translator para Firefox é uma das milhres de extensões que você pode instalar para personalizar a sua experiência. Baixe o Firefox e instale esta incrível extensão.</p>
                        <a href="#" class="button-green">Baixe o tradutor</a>
                    </div>

                    <div id="panel-2" class="panel" role="tabpanel" aria-labelledby="tab-2">
                        <h2>Privativo</h2>
                        <img src="images/img-privacy.jpg" alt="">
                        <p>Nós respeitamos a sua privacidade e cada clique ligado a ela. Por isso o Firefox oferece a você total controle sobre a sua navegação e privacidade.</p>
                        <a href="#" class="button-green">Saiba mais</a>
                    </div>

                    <div id="panel-3" class="panel" role="tabpanel" aria-labelledby="tab-3">
                        <h2>Sem lucro</h2>
                        <img src="images/img-nonprofit.jpg" alt="">
                        <p>A Firefox é uma organização apoiada por brasileiros como você que acredita que abertura, i novaça e oportunidades são chave para manter a saúde da internet.</p>
                        <a href="#" class="button-green">Saiba mais</a>
                    </div>
                </div><!--/.row-->
            </main><!--/#main-->

            <footer id="footer">
                <div class="row">
                    <a class="logo-mozilla" href="http://www.mozilla.org/pt-BR/" target="_blank">
                        <img src="images/logo-mozilla.png" alt="mozilla">
                    </a>

                    <aside id="social-pages">
                        Siga a gente:
                        <span>
                            <a class="social-facebook" href="http://facebook.com/firefox" target="_blank">Facebook</a>
                            <a class="social-twitter" href="https://twitter.com/firefoxbrasil" target="_blank">Twitter</a>
                            <a class="social-google" href="https://plus.google.com/+firefox/" target="_blank">Google+</a>
                        </span>
                    </aside>
                </div><!--/.row-->
            </footer><!--/#footer-->

        </div><!--/#outer-wrapper-->
        <script data-main="scripts/main" src="bower_components/requirejs/require.js"></script>
        <script src="//mozorg.cdn.mozilla.net/pt-BR/tabzilla/tabzilla.js"></script>
    </body>
</html>
