<?php include("app/init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Frontend CMS</title>
    <meta name="description" content="Frontend CMS - Object PHP, MySQL, jQuery, Bootstrap, TinyMCE, MVC" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="app/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app/assets/css/font-awesome.css" />
    <link rel="icon" type="image/x-icon" href="app/assets/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400" />
    <link rel="stylesheet" type="text/css" href="app/assets/css/custom.css" />
    <?php $FrontendCMS->head(); ?>
</head>

<body>
<header>
    <div class="container">
        <div class="row">
            <div class="d-none d-lg-block col-lg-2"><?php $FrontendCMS->loginButton(); ?></div>
            <div class="d-none d-lg-block col-lg-6"><?php $FrontendCMS->toolbar(); ?></div>

            <div class="d-none d-lg-block col-lg-4">
            <div id="top-search">
                <input type="text" placeholder="Search.." />
                <input type="submit" value="OK" />
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-xs-12 text-center">
                <div class="logo">
                    <?php $FrontendCMS->Cms->displayBlock('logo', 'wysiwyg'); ?>
                </div>
            </div>

            <div class="d-none d-md-block col-lg-9 col-md-12">
                <nav class="nav">
                    <?php $FrontendCMS->Cms->displayBlock('menu', 'wysiwyg'); ?>
                </nav>
            </div>

            <div class="d-md-none d-sm-block col-sm-12 navbar">
                <nav class="navbar navbar-expand-md navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav col-sm-6">
                            <?php $FrontendCMS->Cms->displayBlock('menu-mobile', 'wysiwyg'); ?>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>
</header>

<main>
    <div class="container">

        <div class="row">
            <div class="d-none d-lg-block col-lg-3">

                <aside>

                    <div class="aside-first">
                        <?php $FrontendCMS->Cms->displayBlock('aside-first-title', 'oneline'); ?>
                        <ul>
                            <?php $FrontendCMS->Cms->displayBlock('aside-first', 'wysiwyg'); ?>
                        </ul>
                    </div>

                    <div class="aside-second">
                        <h3>Last realizations</h3>
                        <img src="app/assets/images/edulive_m.png" class="text-center img-fluid" alt="" />
                        <p><a href="#" target="_blank">www.edu-live.pl</a><br /><br /></p>
                    </div>

                    <div class="aside-third" >
                        <em class="fa fa-pencil-square" style="color: #fa4b00; float: left; font-size: 8em;"></em>
                        <?php $FrontendCMS->Cms->displayBlock('aside-third', 'wysiwyg'); ?>
                    </div>

                    <div class="text-center validate">
                        <h1>Check W3C validator:</h1>
                        <a target="_blank" href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fdesign.media.pl%2Fgithub%2Ffrontend%2Fsample%2Findex.html">
                            <img class="validate gray" src="app/assets/images/html.png" alt="Check W3C html"></a>
                        <a target="_blank" href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fdesign.media.pl%2Fgithub%2Ffrontend%2Fsample%2Fcss%2Fcustom.css&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=pl-PL">
                            <img class="validate gray" src="app/assets/images/css.png" alt="Check W3C css"></a>
                    </div>

                </aside>
            </div>


            <div class="col-lg-9 col-sm-12 col-12">
                <div class="slider">
                    <?php $FrontendCMS->Cms->displayBlock('slider', 'wysiwyg'); ?>
                </div>

                <article>

                    <div class="extra-box">
                        <div class="row">

                            <div class="col-sm-6">
                                <em class="fa fa-bar-chart fa-5x"></em>
                                <?php $FrontendCMS->Cms->displayBlock('extra-box-1', 'wysiwyg'); ?>
                            </div>

                            <div class="col-sm-6">
                                <em class="fa fa-cogs fa-5x"></em>
                                <?php $FrontendCMS->Cms->displayBlock('extra-box-2', 'wysiwyg'); ?>
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-12" >
                            <?php $FrontendCMS->Cms->displayBlock('content-main', 'wysiwyg'); ?>
                       </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <h1><?php $FrontendCMS->Cms->displayBlock('card-1', 'oneline'); ?></h1>
                            <div id="box1" class="img-fluid" >
                                <div id="card1">
                                    <div id="front1">&nbsp;</div>
                                    <div id="back1">
                                        <?php $FrontendCMS->Cms->displayBlock('card-1-back', 'wysiwyg'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <h1><?php $FrontendCMS->Cms->displayBlock('card-2', 'oneline'); ?></h1>
                            <div id="box2" class="img-fluid" >
                                <div id="card2">
                                    <div id="front2">&nbsp;</div>
                                    <div id="back2">
                                        <?php $FrontendCMS->Cms->displayBlock('card-2-back', 'wysiwyg'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <h1><?php $FrontendCMS->Cms->displayBlock('card-3', 'oneline'); ?></h1>
                            <div id="box3" class="img-fluid" >
                                <div id="card3">
                                    <div id="front3">&nbsp;</div>
                                    <div id="back3">
                                        <?php $FrontendCMS->Cms->displayBlock('card-3-back', 'wysiwyg'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 clients">
                            <?php $FrontendCMS->Cms->displayBlock('clients', 'wysiwyg'); ?>
                        </div>
                    </div>


                </article>

            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-6">
                <?php $FrontendCMS->Cms->displayBlock('footer-1', 'wysiwyg'); ?>
            </div>

            <div class="col-md-3 col-6">
                <?php $FrontendCMS->Cms->displayBlock('footer-2', 'wysiwyg'); ?>
            </div>

            <div class="col-md-3 col-6">
                <?php $FrontendCMS->Cms->displayBlock('footer-3', 'wysiwyg'); ?>
            </div>

            <div class="col-md-3 col-6">
                <?php $FrontendCMS->Cms->displayBlock('footer-4', 'wysiwyg'); ?>
            </div>

        </div>



        <div class="col-12">
            <div class="float-right copyright">
                <span>Copyrights &copy; <?php echo date('Y'); ?> </span>
                Design <span style="color: #fa4b00;">Media</span>
            </div>
        </div>


    </div>
</footer>

<!--<script src="app/assets/js/jquery.js"></script>-->
<script src="app/assets/js/popper.min.js"></script>
<script src="app/assets/js/bootstrap.min.js"></script>
</body>
</html>
