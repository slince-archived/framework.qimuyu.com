<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="/img/favicon.ico" />
        <title>Slince - 现代化PHP框架</title>
        <link href="/css/uikit.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/css/rainbow.min.css"/>
        <link href="/css/main.css" rel="stylesheet"/>
        <meta name="description" content="A Modern PHP Framework">
        <meta name="generator" content="The Time Machine">
        <meta property="og:image" content="/img/slince-logo.png">
        <meta property="og:title" content="Slince - A Modern PHP Framework"/>
        <meta property="og:site_name" content="Slince Framework"/>
        <meta property="og:description" content="A Modern PHP Framework"/>
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
                    <img class="uk-margin uk-margin-remove" src="/img/slince-logo.png"
                    title="Slince" alt="Slince">
                </a>
                <a href="#" class="uk-navbar-toggle uk-visible-small" data-uk-toggle="{target:'#mainmenu', cls: 'uk-hidden-small'}">
                </a>
                <a id="small-logo" class="uk-navbar-brand uk-navbar-center uk-visible-small"
                href="./">
                    <img class="uk-margin uk-margin-remove" style="max-width: 95%;" src="/img/slince-logo.png"
                    title="Asukademy" alt="Asukademy">
                </a>
                <ul id="mainmenu" class="uk-navbar-nav uk-float-right uk-hidden-small">
                    <li class="">
                        <a href="/">
                            <span class="menu-item-title">首页</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/documents">
                            <span class="menu-item-title">文档</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="https://github.com/slince/slince" target="_blank">
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
                    <h1>Slince</h1>
                    <h2>一个现代化PHP框架</h2>
                </div>
            </div>
        </section>
        <?=$this->fetch('content');?>
        <footer id="footer">
            <div class="uk-container uk-container-center uk-text-center">
                <div class="footer-logo">
                    <a href="#" data-uk-smooth-scroll>
                        <img src="/img/slince-logo.png" width="150" alt="Footer LOGO">
                    </a>
                </div>
                <p class="uk-text-center social-buttons">
                    <a target="_blank" class="uk-icon-button uk-icon-facebook" href="javascript: void(0);">
                    </a>
                    <a target="_blank" class="uk-icon-button uk-icon-github" href="https://github.com/slince/webapp">
                    </a>
                    <a class="uk-icon-button uk-icon-envelope-o" href="mailto:taosikai@yeah.net">
                    </a>
                </p>
                <p>
                    Copyright &copy; 2015 Slince. All Rights Reserved.
                </p>
                <p class="back">
                    <a href="#" data-uk-smooth-scroll>
                        <span class="uk-icon-chevron-up">
                        </span>
                        回到顶部
                    </a>
                </p>
            </div>
        </footer>
    </body>
</html>