<?php
// Localisation
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

if ($lang != 'es' && $lang != 'pt' && $lang != 'en')
    $lang = 'en';

$locale = '';
switch ($lang) {
    case 'es':
        $locale = 'es-MX';
        break;
    case 'en':
        $locale = 'en-US';
        break;
    case 'pt':
        $locale = 'pt-BR';
        break;
}

require_once('../lang/lang-' . $lang . '.php');

?><!DOCTYPE html>
<html class="no-js" lang="<?php echo $locale ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $trans['site.title'] ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="//mozorg.cdn.mozilla.net/media/css/tabzilla-min.css">
        <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
    </head>
    <body>
        <div id="outer-wrapper">
            <div class="tabzilla">
                <a href="https://www.mozilla.org/" id="tabzilla">mozilla</a>
            </div><!--/.row-->

            <header id="header" role="banner">
                <div class="row">
                    <img src="images/logo-firefox.png" alt="Firefox" width="216" height="81">
                    <h1 class="visuallyhidden"><?php echo $trans['site.title'] ?></h1>

                    <div id="downloads">
                        <?php if ('en' == $lang): ?>
                        <div class="download-button">
                            <a class="download-link" href="http://www.mozilla.org/en-US/firefox/new/#download-fx?utm_source=VansLP&amp;utm_medium=Button&amp;utm_campaign=VansSurf&amp;utm_content=en" target="_blank">
                                <span class="download-content">
                                    <strong class="download-title">Download now</strong>
                                </span>
                            </a>
                            <small class="download-other">
                                <a href="http://www.mozilla.org/en-US/firefox/all/" target="_blank">Systems &amp; Languages</a> |
                                <a href="http://www.mozilla.org/en-US/firefox/25.0.1/releasenotes/" target="_blank">What's New</a> |
                                <a href="http://www.mozilla.org/en-US/legal/privacy/firefox.html" target="_blank">Privacy</a>
                            </small>
                        </div>
                        <?php else: ?>
                        <div class="download-vans">
                            <a class="button" href="https://marketplace.firefox.com/app/vtcs?lang=<?php echo $lang ?>&amp;utm_source=VansLP&amp;utm_medium=Button&amp;utm_campaign=VansSurf&amp;utm_content=<?php echo $lang ?>" target="_blank">
                                <?php echo $trans['download.vans'] ?>
                            </a>
                        </div>
                        <?php endif ?>
                    </div>
                </div><!--/.row-->
            </header><!--/#header-->

            <main id="main" role="main">
                <div class="row">
                    <ul id="tabs">
                        <li class="tab">
                            <i class="icon icon-theme" role="presentation"></i>
                            <h2><?php echo $trans['theme.title'] ?></h2>
                            <p>
                                <?php echo $trans['theme.desc'] ?>
                                <a class="link" href="https://addons.mozilla.org/<?php echo $locale ?>/firefox/addon/vans-triple-crown-of-surfing/?utm_source=VansLP&amp;utm_medium=Crosspromo&amp;utm_campaign=VansSurf&amp;utm_content=<?php echo $lang ?>" target="_blank"><?php echo $trans['learn_more'] ?></a>
                            </p>
                        </li>
                        <li class="tab">
                            <i class="icon icon-social" role="presentation"></i>
                            <h2><?php echo $trans['social.title'] ?></h2>
                            <p>
                                <?php echo $trans['social.desc'] ?>
                                <span class="link">
                                    <a href="http://facebook.com/firefox?utm_source=VansLP&amp;utm_medium=Crosspromo&amp;utm_campaign=VansSurf&amp;utm_content=<?php echo $lang ?>" target="_blank">Facebook</a> /
                                    <a href="http://twitter.com/<?php echo $trans['twitter_handle'] ?>?utm_source=VansLP&amp;utm_medium=Crosspromo&amp;utm_campaign=VansSurf&amp;utm_content=<?php echo $lang ?>" target="_blank">Twitter</a>
                                </span>
                            </p>
                        </li>
                        <li class="tab last">
                            <i class="icon icon-blog" role="presentation"></i>
                            <h2><?php echo $trans['blog.title'] ?></h2>
                            <p>
                                <?php echo $trans['blog.desc'] ?>
                                <a class="link" href="<?php echo $trans['blog.url'] ?>?utm_source=VansLP&amp;utm_medium=Crosspromo&amp;utm_campaign=VansSurf&amp;utm_content=<?php echo $lang ?>" target="_blank">
                                    <?php echo $trans['learn_more'] ?>
                                </a>
                            </p>
                        </li>
                    </ul>
                </div><!--/.row-->
            </main><!--/#main-->

            <footer id="footer">
                <div class="row">
                    <a class="logo-mozilla" href="http://www.mozilla.org/<?php echo $locale ?>/" target="_blank">
                        <img src="images/logo-mozilla.png" alt="mozilla">
                    </a>

                    <aside id="social-pages">
                        <?php echo $trans['footer.follow'] ?>
                        <span>
                            <a class="social-facebook" href="http://facebook.com/firefox?utm_source=VansLP&amp;utm_medium=Crosspromo&amp;utm_campaign=VansSurf&amp;utm_content=<?php echo $lang ?>" target="_blank">Facebook</a>
                            <a class="social-twitter" href="https://twitter.com/<?php echo $trans['twitter_handle'] ?>?utm_source=VansLP&amp;utm_medium=Crosspromo&amp;utm_campaign=VansSurf&amp;utm_content=<?php echo $lang ?>" target="_blank">Twitter</a>
                            <a class="social-google" href="https://plus.google.com/+firefox/?utm_source=VansLP&amp;utm_medium=Footer&amp;utm_campaign=VansSurf&amp;utm_content=<?php echo $lang ?>" target="_blank">Google+</a>
                        </span>
                    </aside>
                </div><!--/.row-->
            </footer><!--/#footer-->

        </div><!--/#outer-wrapper-->
        <script src="//mozorg.cdn.mozilla.net/<?php echo $locale ?>/tabzilla/tabzilla.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-35433268-46', 'firefoxsurf.com');
            ga('send', 'pageview');
        </script>
    </body>
</html>
