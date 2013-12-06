<?php
    // Random headers for non-Firefox users
    $headlines = array(
        'e seja mais rápido na web.',
        'e navegue com paz de espírito.',
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

        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
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
                    <h1 class="for-old-firefox"><strong>Faça o upgrade do Firefox</strong> e seja mais rápido na web.</h1>
                    <h1 class="for-firefox"><strong>Use o Firefox.</strong> É mais rápido que os outros navegadores e fala a sua língua.</h1>

                    <ul id="features">
                        <li>Rápido</li>
                        <li>Privativo</li>
                        <li class="last-child">Orgulhosamente<br>sem fins lucrativos</li>
                    </ul>
                    <div id="downloads">
                        <div class="download-button for-old-firefox for-not-firefox">
                            <a class="download-link for-not-firefox" href="http://www.mozilla.org/pt-BR/firefox/new/#download-fx?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=download_nonusers" target="_blank">
                                <span class="download-content">
                                    <strong class="download-title">Baixe agora</strong>
                                </span>
                            </a>
                            <a class="download-link for-old-firefox" href="http://www.mozilla.org/pt-BR/firefox/new/#download-fx?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=upgrade_users" target="_blank">
                                <span class="download-content">
                                    <strong class="download-title">Faça o Upgrade agora</strong>
                                </span>
                            </a>

                            <small class="download-other">
                                <a href="http://www.mozilla.org/pt-BR/firefox/all/" target="_blank">Sistemas e idiomas</a> |
                                <a href="http://www.mozilla.org/pt-BR/firefox/25.0.1/releasenotes/" target="_blank">O que há de novo</a> |
                                <a href="http://www.mozilla.org/pt-BR/legal/privacy/firefox.html" target="_blank">Privacidade</a>
                            </small>
                        </div>
                        <div class="download-translator for-firefox">
                            <a class="button-orange" href="https://addons.mozilla.org/pt-BR/firefox/addon/google-translator-for-firefox/?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=learnhow_uptodateusers" target="_blank">
                                Instale o tradutor
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
                            <p>Nós respeitamos a sua privacidade e cada clique seu. <a href="#panel-2" role="tab" aria-selected="false">Saiba mais</a></p>
                        </li>
                        <li id="tab-3" class="tab">
                            <i class="icon icon-nonprofit" role="presentation"></i>
                            <h2>Sem lucro</h2>
                            <p>Nossa missão sempre foi a mesma: inovar para você. <a href="#panel-3" role="tab" aria-selected="false">Saiba mais</a></p>
                        </li>
                    </ul>

                    <div id="panel-1" class="panel" role="tabpanel" aria-labelledby="tab-1">
                        <h2>Traduza</h2>
                        <img src="images/img-translate.jpg" alt="">
                        <p>Utilize este complemento para traduzir qualquer página para o português com apenas um clique. Baixe o Firefox e instale este complemento incrível.</p>

                        <a class="button-green for-firefox" href="https://addons.mozilla.org/firefox/downloads/latest/46308/addon-46308-latest.xpi?src=dp-btn-primary?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=translate_uptodateusers">Baixe o tradutor</a>
                        <a class="button-green for-old-firefox" href="https://addons.mozilla.org/firefox/downloads/latest/46308/addon-46308-latest.xpi?src=dp-btn-primary?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=translate_users">Baixe o tradutor</a>
                        <a class="button-green for-not-firefox" href="https://addons.mozilla.org/firefox/downloads/latest/46308/addon-46308-latest.xpi?src=dp-btn-primary?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=translate_nonusers">Baixe o tradutor</a>
                    </div>

                    <div id="panel-2" class="panel" role="tabpanel" aria-labelledby="tab-2">
                        <h2>Privativo</h2>
                        <img src="images/img-privacy.jpg" alt="">
                        <p>O Firefox respeita a sua privacidade deixando você com total controle dos seus dados com recursos como Não Me Rastreie e Navegação Privativa.</p>

                        <a class="button-green for-firefox" href="http://www.mozilla.org/pt-BR/firefox/features/#advancedsecurity?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=private_uptodateusers">Saiba mais</a>
                        <a class="button-green for-old-firefox" href="http://www.mozilla.org/pt-BR/firefox/features/#advancedsecurity?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=private_users">Saiba mais</a>
                        <a class="button-green for-not-firefox" href="http://www.mozilla.org/pt-BR/firefox/features/#advancedsecurity?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=private_nonusers">Saiba mais</a>
                    </div>

                    <div id="panel-3" class="panel" role="tabpanel" aria-labelledby="tab-3">
                        <h2>Sem lucro</h2>
                        <img src="images/img-nonprofit.jpg" alt="">
                        <p>A Firefox é uma organização sem ânimo de lucro apoiada por centenas de desenvolvidores brasileiros e apoiadores inovando por uma internet melhor.</p>

                        <a class="button-green for-firefox" href="http://www.mozilla.org/pt-BR/mission/?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=no-profit_uptodateusers">Saiba mais</a>
                        <a class="button-green for-old-firefox" href="http://www.mozilla.org/pt-BR/mission/?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=no-profit_users">Saiba mais</a>
                        <a class="button-green for-not-firefox" href="http://www.mozilla.org/pt-BR/mission/?utm_source=brazil_LP&amp;utm_medium=cta&amp;utm_campaign=branding_brazil&amp;utm_content=no-profit_nonusers">Saiba mais</a>
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
                            <a class="social-facebook" href="https://www.facebook.com/Firefox" target="_blank">Facebook</a>
                            <a class="social-twitter" href="https://twitter.com/firefoxbrasil" target="_blank">Twitter</a>
                            <a class="social-google" href="https://plus.google.com/+firefox/" target="_blank">Google+</a>
                        </span>
                    </aside>
                </div><!--/.row-->
            </footer><!--/#footer-->

        </div><!--/#outer-wrapper-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="bower_components/bowser/bowser.min.js"></script>
        <script src="scripts/main.js"></script>
        <script src="//mozorg.cdn.mozilla.net/pt-BR/tabzilla/tabzilla.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-35433268-47', 'usefirefox.org');
          ga('send', 'pageview');
        </script>
    </body>
</html>
