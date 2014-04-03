<!DOCTYPE html>
<html class="no-js" lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Firefox OS | Use #FirefoxOS para responder a nossas perguntas semanais sobre como o Firefox OS pode impactar o mundo e concorra.</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=1000px">

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="//mozorg.cdn.mozilla.net/media/css/tabzilla-min.css">

        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-35433268-53', 'impactofirefoxos.com');
          ga('send', 'pageview');

        </script>
    </head>
    <body>
        <div id="outer-wrapper">
            <div class="row">
                <a href="https://www.mozilla.org/" id="tabzilla">mozilla</a>
            </div><!--/.row-->
            <header id="header" role="banner">
                <img src="images/logo-firefox.png" alt="Firefox" width="154" height="47">
                <div class="row">
                    <h1>#<strong>Firefox</strong>OS</h1>
                    <p>Tuite sua resposta para nossa <br> pergunta semanal e concorra <br>a um smartphone Firefox OS!</p>
                </div><!--/.row-->
                <a href="#participate" class="scroll-down"></a>
            </header><!--/#header-->

            <main id="main" role="main">
                <div class="row">
                    <h2>Prêmios</h2>
                    <span class="left">Firefox OS da LGs</span>
                    <span class="right">Firefox OS da Alcatel</span>
                </div><!--/.row-->
            </main><!--/#main-->

            <section id="participate">
                <div class="row">
                    <h2>Como participar:</h2>
                    <span class="list-item">1. Siga <b>@FirefoxBrasil</b> ou <b>@MozillaBrasil</b></span>

                    <div class="btn-container">
                        <a href="//twitter.com/intent/user?screen_name=FirefoxBrasil" class="button follow-button participate-button" target="_blank">
                            <b class="follow-title">Siga @FirefoxBrasil</b>
                        </a>
                        <a href="//twitter.com/intent/user?screen_name=MozillaBrasil" class="button follow-button participate-button last" target="_blank">
                            <b class="follow-title">Siga @MozillaBrasil</b>
                        </a>
                    </div>
                    <span class="list-item">2. Tuite sua resposta a nossas perguntas semanais usando <b>#FirefoxOS</b></span>
                    <div class="btn-container">
                        <strong>Como um smartphone mais barato e potente pode impactar a vida dos estudantes?</strong>
                        <a href="//twitter.com/intent/tweet?text=%23FirefoxOS" class="button-green participate-button" target="_blank">
                            <b class="follow-title">Participe já</b>
                        </a>
                        <p>Responda a esta pergunta com #FirefoxOS e participe.</p>
                    </div>

                    <p>
                        Você pode enviar quantas respostas quiser. Quanto mais respostas enviar, mais chances de ganhar.
                    </p>

                    <a class="terms js-terms" href="#terms">Termos e condições</a>
                </div>
            </section>

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

        <div id="terms-overlay" class="js-terms-close"></div>
        <div id="terms-lightbox">
            <button class="terms-lightbox-close js-terms-close">X</button>
            <?php include_once('partials/terms.php'); ?>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="bower_components/bowser/bowser.min.js"></script>
        <script src="//mozorg.cdn.mozilla.net/pt-BR/tabzilla/tabzilla.js"></script>
        <script src="scripts/main.js"></script>
    </body>
</html>
