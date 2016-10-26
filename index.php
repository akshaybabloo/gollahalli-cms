<!-- PHP header -->
<?php require 'pages/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="<?php echo $results->about_me->name ?> is a Computer Science researcher currently doing his Ph.D. This website showcases his work.">
    <meta name="keywords" content="computer science, brain computer interface, artificial intelligence"/>
    <meta name="author" content="Akshay Raj Gollahalli">
    <meta name="rights" content="All rights reserved by Akshay Raj Gollahalli"/>
    <meta name="theme-color" content="#ef3939"/>

    <meta property="og:title" content="Akshay Raj Gollahalli"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.gollahalli.me/"/>
    <meta property="og:image" content="http://www.gollahalli.me/img/logo.jpg"/>
    <meta property="og:image:secure_url" content="https://www.gollahalli.me/img/logo.jpg"/>
    <meta property="og:description"
          content="Akshay Raj Gollahalli is a Computer Science researcher currently doing his Ph.D. This website showcases his work."/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Akshay Raj Gollahalli"/>
    <meta name="twitter:description"
          content="Akshay Raj Gollahalli is a Computer Science researcher currently doing his Ph.D. This website showcases his work."/>
    <meta name="twitter:image:src" content="https://www.gollahalli.me/img/logo.jpg"/>
    <meta name="twitter:url" content="https://www.gollahalli.me"/>

    <meta property="fb:app_id" content="1562596197364195"/>

    <link rel="canonical" href="https://www.gollahalli.me/"/>
    <meta name="referrer" content="no-referrer-when-downgrade"/>
    <link rel="amphtml" href="https://www.gollahalli.me/amp/"/>

    <title><?php echo $results->about_me->name ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Cousine' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/ionicons.min.css" type="text/css">
    <link rel="stylesheet" type="text/css"
          href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.1/cookieconsent.min.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/gollahalli.css" type="text/css">
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <!--    <link rel="stylesheet" href="css/reset.css" type="text/css">-->
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- For old IEs -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico"/>

    <!-- For new browsers - multisize ico  -->
    <link rel="icon" type="image/x-icon" sizes="16x16 32x32" href="img/favicon/favicon.ico">

    <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/favicon/favicon-152.png">

    <!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144.png">

    <!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/favicon/favicon-120.png">

    <!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon/favicon-114.png">

    <!-- For iPhone 6+ -->
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="img/favicon/favicon-180.png">

    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72.png">

    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-57.png">

    <!-- For Old Chrome -->
    <link rel="icon" href="img/favicon/favicon-32.png" sizes="32x32">

    <!-- For IE10 Metro -->
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="favicon/img/favicon-144.png">

    <!-- Chrome for Android -->
    <link rel="icon" sizes="192x192" href="img/favicon/favicon-192.png">


    <script src="js/queryloader2.min.js" type="text/javascript"></script>

    <!-- Schema.org -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Website",
            "publisher": {
                "@type": "People",
                "name": "Akshay Raj Gollahalli",
                "image": "https://gravatar.com/avatar/457c55bc8c6bff07894da51767e408fb?s=200",
                "email" : "akshay@gollahalli.com",
                "url": "https://www.gollahalli.me/"
            },
            "url": "https://www.gollahalli.me/",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://www.gollahalli.me"
            }
        }


    </script>

    <!-- start Mixpanel -->
    <script type="text/javascript">(function (e, a) {
            if (!a.__SV) {
                var b = window;
                try {
                    var c, l, i, j = b.location, g = j.hash;
                    c = function (a, b) {
                        return (l = a.match(RegExp(b + "=([^&]*)"))) ? l[1] : null
                    };
                    g && c(g, "state") && (i = JSON.parse(decodeURIComponent(c(g, "state"))), "mpeditor" === i.action && (b.sessionStorage.setItem("_mpcehash", g), history.replaceState(i.desiredHash || "", e.title, j.pathname + j.search)))
                } catch (m) {
                }
                var k, h;
                window.mixpanel = a;
                a._i = [];
                a.init = function (b, c, f) {
                    function e(b, a) {
                        var c = a.split(".");
                        2 == c.length && (b = b[c[0]], a = c[1]);
                        b[a] = function () {
                            b.push([a].concat(Array.prototype.slice.call(arguments,
                                0)))
                        }
                    }

                    var d = a;
                    "undefined" !== typeof f ? d = a[f] = [] : f = "mixpanel";
                    d.people = d.people || [];
                    d.toString = function (b) {
                        var a = "mixpanel";
                        "mixpanel" !== f && (a += "." + f);
                        b || (a += " (stub)");
                        return a
                    };
                    d.people.toString = function () {
                        return d.toString(1) + ".people (stub)"
                    };
                    k = "disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
                    for (h = 0; h < k.length; h++)e(d, k[h]);
                    a._i.push([b, c, f])
                };
                a.__SV = 1.2;
                b = e.createElement("script");
                b.type = "text/javascript";
                b.async = !0;
                b.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === e.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";
                c = e.getElementsByTagName("script")[0];
                c.parentNode.insertBefore(b, c)
            }
        })(document, window.mixpanel || []);
        mixpanel.init("e3f103b7fbf943d7475c3b0529b5e16a");</script>
    <!-- end Mixpanel -->

    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', function () {
            QueryLoader2(document.querySelector("body"), {
                barColor: "#ef3939",
                backgroundColor: "#000000",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
    </script>

    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72583688-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body id="page-top">


<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-56JZX4"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-56JZX4');</script>
<!-- End Google Tag Manager -->

<!--========================= Menu ===========================-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">gollahalli</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#aboutme">About Me</a>
                </li>
                <li>
                    <a class="page-scroll" href="#publication">Publications</a>
                </li>
                <li>
                    <a class="page-scroll" href="#skills">Skills</a>
                </li>
                <li>
                    <a class="page-scroll" href="#experience">Experience</a>
                </li>
                <li>
                    <a class="page-scroll" href="#project">Projects</a>
                </li>
                <li>
                    <a class="page-scroll" href="#tutorial">Tutorials</a>
                </li>
                <li>
                    <a class="page-scroll" href="#blog">Blog</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!--========================= Header ===========================-->
<header>
    <div class="header-content">
        <div class="header-content-inner">
            <img src="https://gravatar.com/avatar/457c55bc8c6bff07894da51767e408fb?s=200"
                 class="img-circle activity_rounded" alt="Akshay Raj Gollahalli's photo">
            <hr class="light">
            <h1><?php echo $results->about_me->name ?></h1>
            <p>
                <a href="https://www.gollahalli.me/downloads/Gollahalli-CV-Web.pdf" class="btn btn-lg btn-primary">Download
                    CV<i class="fa fa-download"></i></a><br>
                <a href="https://twitter.com/akshaybabloo"><i class="fa fa-twitter"></i></a>
                <a href="https://nz.linkedin.com/in/gollahalli"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/akshaybabloo"><i class="fa fa-github"></i></a>
            </p>
        </div>
    </div>
    <div class="bounce">
        <a class="btn page-scroll" href="#aboutme"><i class="bounce-class fa fa-angle-down"></i></a>
    </div>
</header>

<!--========================= About Me ===========================-->
<section class="bg-primary" id="aboutme">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-justify">
                <h2 class="section-heading text-center">About Me</h2>
                <hr class="light">
                <?php echo about_me_bio() ?> <!-- page-scroll missing -->
            </div>
            <div class="col-lg-12">
                <h3 class="text-center">Education</h3>
                <hr class="light">

                <section id="cd-timeline" class="cd-container">
                    <?php echo about_me_education(); ?>
                </section> <!-- cd-timeline -->
            </div>

            <div class="col-lg-8 col-lg-offset-2">
                <h3 class="text-center">Research Area</h3>
                <hr class="light">
                <?php echo about_me_research_area(); ?>
            </div>
        </div>
    </div>
</section>


<!--========================= Publication ===========================-->
<section id="publication">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Publications</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <?php echo publications(); ?>
            </div>
        </div>
    </div>
</section>

<!--========================= Skills ===========================-->
<section class="bg-primary" id="skills">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Skills</h2>
                <hr class="light">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <?php echo skills(); ?>
        </div>
    </div>
</section>

<!--========================= Experience ===========================-->
<section id="experience">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Experience</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section id="cd-timeline" class="cd-container">

                    <?php echo experience(); ?>

                </section> <!-- cd-timeline -->
            </div>
        </div>
    </div>
</section>

<!--========================= Project ===========================-->
<section class="bg-dark noPadding" id="project">
    <div class="container text-center">
        <h2>Projects</h2>
        <hr class="light">
    </div>
    <div class="container-fluid">
        <div class="row no-gutter">
            <?php echo projects(); ?>
        </div>
    </div>
</section>

<!--========================= Model for Project ===========================-->
<?php echo projects_models(); ?>

<!--========================= Tutorial ===========================-->
<section class="bg-dark" id="tutorial">
    <div class="container text-center">
        <h2>Tutorials</h2>
        <hr class="light">
    </div>
    <div class="container-fluid">
        <div class="row no-gutter">
            <?php echo tutorials(); ?>
        </div>
    </div>
</section>

<!--========================= Model for Tutorial ===========================-->
<?php echo tutorials_models(); ?>

<!--========================= Blog ===========================-->
<section class="bg-primary less-bottom" id="blog">
    <div class="container text-center">
        <h2>Blog</h2>
        <hr class="light">
    </div>
    <div class="container">
        <div class="row">
            <?php echo blog(); ?>
        </div>

    </div>

    <p>
        <a href="https://blog.gollahalli.me" class="btn center-block bigger">Read more</a>
    </p>
</section>

<!--========================= Contact Me ===========================-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Contact Me</h2>
                <hr class="primary">
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn"></i>
                <p><a href="mailto:<?php echo $results->about_me->contact?>"><?php echo $results->about_me->contact ?></a></p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a class="twitter-timeline" href="https://twitter.com/akshaybabloo" data-widget-id="690023186424012800">Tweets
                    by @akshaybabloo</a>
            </div>
        </div>
    </div>
</section>

<!--========================= Footer & Model ===========================-->
<footer class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 no-gutter text-center">
                <small class="text-muted">
                    <?php
                    try {
                        $url = 'https://api.github.com/repos/akshaybabloo/gollahalli-me/releases/latest';
                        $options = array('http' => array('user_agent' => $_SERVER['HTTP_USER_AGENT']));
                        $context = stream_context_create($options);
                        $response = file_get_contents($url, false, $context);

                        $object = json_decode($response);
                        echo "<a href='#version_control' data-toggle=\"modal\" data-target=\"#version_control\">$object->tag_name</a>";
                    } catch (exception $e) {

                    }
                    ?>
                </small>
                <br>
                <small class="text-muted">Copyright &copy; 2016 &#124; Akshay Raj Gollahalli</small>
                <br>
                <small class="text-muted">All product and company names are trademarks&#8482; or registered&reg;
                    trademarks of their respective holders. Use of them does not imply any affiliation with or
                    endorsement by them.
                </small>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="version_control" tabindex="-1" role="dialog" aria-labelledby="version_in">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="version_in"><?php echo $object->name ?></h4>
            </div>
            <div class="modal-body">
                <?php
                    $string = $object->body;

                    $replacer = str_replace("* ", "", $string);
                    $bits = explode("\n", $replacer);

                    $newstring = "<ul>";
                    foreach ($bits as $bit) {
                        $newstring .= "<li>" . $bit . "</li>";
                    }
                    $newstring .= "</ul>";

                    echo $newstring;
                ?>
                <p class="text-center">
                    <a href="<?php echo $object->zipball_url ?>"><i class="fa fa-2x fa-download"></i></a>
                    <a href="https://github.com/akshaybabloo/gollahalli-me"><i class="fa fa-2x fa-github"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Facebook app -->
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1562596197364195',
            xfbml: true,
            version: 'v2.5'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Twitter -->
<script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + "://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");</script>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/main.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.1/cookieconsent.min.js"></script>
<script>
    window.cookieconsent.initialise({
        "palette": {
            "popup": {"background": "#000"},
            "button": {"background": "#f1d600"}
        }, "theme": "edgeless", "content": {"href": "https://www.gollahalli.me/cookie-policy.html"}
    });
</script>
<!-- End Cookie Consent plugin -->


</body>

</html>
