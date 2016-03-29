<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"
        />
        <link rel="shortcut icon" href="/img/favicon.ico" />
        <title>Slince - A Modern PHP Framework</title>
        <!-- Uikit core CSS -->
        <link href="/css/uikit.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/css/rainbow.min.css"/>
        <!-- Custom styles for this template -->
        <link href="/css/main.css" rel="stylesheet"/>
        <meta name="description" content="A Modern PHP Framework">
        <meta name="generator" content="The Time Machine">
        <meta property="og:image" content="https://cloud.githubusercontent.com/assets/1639206/5580385/1787acf4-9085-11e4-8089-a214dd2599af.jpg">
        <meta property="og:title" content="Slince - A Modern PHP Framework"/>
        <meta property="og:site_name" content="Slince Framework"/>
        <meta property="og:description" content="A Modern PHP Framework"/>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/js/jquery.js"></script>
        <script src="/js/uikit.min.js"></script>
        <script src="/js/highlight.pack.js"></script>
        <script>
            $(document).ready(function() {
                $('.article-content pre code').each(function(i, block) {
                    hljs.highlightBlock(block);
                });
            });
        </script>
    </head>
    
    <body class="home">
        <nav id="header" class="uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">
                <a id="big-logo" class="uk-navbar-brand uk-hidden-small" href="./">
                    <img class="uk-margin uk-margin-remove" src="/img/Slince-logo.png"
                    title="Asukademy" alt="Asukademy">
                </a>
                <a href="#" class="uk-navbar-toggle uk-visible-small" data-uk-toggle="{target:'#mainmenu', cls: 'uk-hidden-small'}">
                </a>
                <a id="small-logo" class="uk-navbar-brand uk-navbar-center uk-visible-small"
                href="./">
                    <img class="uk-margin uk-margin-remove" style="max-width: 95%;" src="/img/Slince-logo.png"
                    title="Asukademy" alt="Asukademy">
                </a>
                <ul id="mainmenu" class="uk-navbar-nav uk-float-right uk-hidden-small">
                    <li class="">
                        <a href="./about/">
                            <span class="menu-item-title">
                                About
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="./documentation/start/getting-started.html">
                            <span class="menu-item-title">
                                Documentation
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="https://github.com/slince/Slince" target="_blank">
                            <span class="menu-item-title">
                                GitHub
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <section id="banner">
            <div class="banner-inner">
                <div class="banner-title">
                    <h1>
                        Slince
                    </h1>
                    <h2>
                        A Modern PHP Framework
                    </h2>
                </div>
            </div>
        </section>
        <div id="main-body">
            <section id="features" class="main-block">
                <div class="uk-container uk-container-center">
                    <h1 class="block-title">
                        Features
                    </h1>
                    <div class="uk-grid" data-uk-grid-match>
                        <div class="uk-width-medium-1-3 feature-block">
                            <img class="uk-border-rounded" src="/img/lightweight.jpg"
                            alt="" />
                            <h2>
                                Lightweight and Elegant
                            </h2>
                            <p>
                                Slince is very fast -- we use many design patterns like lazy loading
                                and caching to make sure we reach high performance.
                            </p>
                        </div>
                        <div class="uk-width-medium-1-3 feature-block">
                            <img class="uk-border-rounded" src="/img/powerful.jpg"
                            alt="" />
                            <h2>
                                Easy But Powerful
                            </h2>
                            <p>
                                We know that learning a new framework is very hard and takes a long time,
                                so Slince's interface is very simple and semantic, and will not cause
                                developers pain.
                            </p>
                        </div>
                        <div class="uk-width-medium-1-3 feature-block">
                            <img class="uk-border-rounded" src="/img/convention.jpg"
                            alt="" />
                            <h2>
                                Convention over Config
                            </h2>
                            <p>
                                Slince tries to reduce configuration work. It uses minimal config
                                to extend the whole system. But you can still override every part of Slince
                                to customize your application.
                            </p>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-match>
                        <div class="uk-width-medium-1-3 feature-block">
                            <img class="uk-border-rounded" src="/img/decoupled.jpg"
                            alt="" />
                            <h2>
                                Fully Decoupled
                            </h2>
                            <p>
                                Slince packages are very independent. We are trying to ensure every
                                package does not depend on too many other packages. You can easily override
                                Slince's behavior without worrying about dependencies.
                            </p>
                        </div>
                        <div class="uk-width-medium-1-3 feature-block">
                            <img class="uk-border-rounded" src="/img/extendable.jpg"
                            alt="" />
                            <h2>
                                Extendable
                            </h2>
                            <p>
                                The Slince package system (like Symfony bundles) helps us create complex
                                applications for the enterprise. You can also create your package as an
                                extension to let other developers install it.
                            </p>
                        </div>
                        <div class="uk-width-medium-1-3 feature-block">
                            <img class="uk-border-rounded" src="/img/hhvm.jpg" alt=""
                            />
                            <h2>
                                HHVM Ready
                            </h2>
                            <p>
                                After hard work, Slince supports HHVM server and passes all tests.
                                You can run Slince in HHVM server and start your programming.
                            </p>
                        </div>
                    </div>
                </div>
                <p class="uk-text-center">
                    <a style="margin-top: 30px;" class="download-button uk-button uk-button-large uk-button-primary"
                    href="./about/features.html">
                        See All Features
                    </a>
                </p>
            </section>
            <section id="start" class="main-block">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid" data-uk-grid-match>
                        <div class="uk-width-medium-1-1 article-content">
                            <h1 class="page-title">
                                Quick Start
                            </h1>
                            <p>
                                <pre class="home-start-code"><code class="bash" style="font-size: 20px;">$ composer create-project slince/webapp [app_name] --stability=dev</code></pre>
                            </p>
                            <p class="uk-text-center">
                                <a style="margin-top: 50px; width: 400px" class="download-button uk-button uk-button-hero uk-button-primary"
                                href="./documentation/start/getting-started.html">
                                    Documentation
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="powered" class="main-block">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid" data-uk-grid-match>
                        <div class="uk-width-medium-1-1">
                            <h1 class="page-title">
                                Inspired By
                            </h1>
                            <p class="uk-text-center">
                                <a target="_blank" href="http://joomla.org">
                                    <img style="height: 60px !important;" src="/img/joomla.png"
                                    alt="Joomla" />
                                </a>
                                <a target="_blank" href="http://symfony.com">
                                    <img style="height: 60px !important;" src="/img/symfony.png"
                                    alt="Symfony" />
                                </a>
                                <a target="_blank" href="http://laravel.com/">
                                    <img style="height: 60px !important;" src="/img/laravel.png"
                                    alt="Laravel" />
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer id="footer">
            <div class="uk-container uk-container-center uk-text-center">
                <div class="footer-logo">
                    <a href="#" data-uk-smooth-scroll>
                        <img src="/img/Slince-logo.png" width="150" alt="Footer LOGO">
                    </a>
                </div>
                <p class="uk-text-center social-buttons">
                    <a target="_blank" class="uk-icon-button uk-icon-facebook" href="javascript: void(0);">
                    </a>
                    <a target="_blank" class="uk-icon-button uk-icon-github" href="https://github.com/ventoviro/Slince">
                    </a>
                    <a class="uk-icon-button uk-icon-envelope-o" href="mailto:asika32764@gmail.com">
                    </a>
                </p>
                <p>
                    Copyright &copy; 2015 Slince. All Rights Reserved.
                </p>
                <p class="back">
                    <a href="#" data-uk-smooth-scroll>
                        <span class="uk-icon-chevron-up">
                        </span>
                        Back to Top
                    </a>
                </p>
            </div>
        </footer>
    </body>
</html>