﻿<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!-->
<html class="no-js" lang="en">
 <!--<![endif]-->


<head>
    <!--        California State Template
        Version 5.0.2

    Based on Twitter Bootstrap
    -->
    <meta charset="utf-8">

    <title>Megamenu Navigation</title>

    <meta name="Author" content="State of California" />
    <meta name="Description" content="State of California" />
    <meta name="Keywords" content="California, government" />


    <!--HEAD INCLUDE-->
    <!-- head content, for all pages -->
    <!-- Use highest compatibility mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly" content="True">
    <!-- for Blackberry, AvantGo -->
    <meta name="MobileOptimized" content="320">
    <!-- for Windows mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <!-- For all browsers -->
    <link rel="stylesheet" href="/css/cagov.core.css">
    <script src="/js/search.js"></script>
    <!--
    Step 3
    Select a color scheme:

    <link rel="stylesheet" href="/css/colorscheme-oceanside.css">
    <link rel="stylesheet" href="/css/colorscheme-orangecounty.css">
    <link rel="stylesheet" href="/css/colorscheme-pasorobles.css">
    <link rel="stylesheet" href="/css/colorscheme-santabarbara.css">
    <link rel="stylesheet" href="/css/colorscheme-sierra.css">
    -->
    <link rel="stylesheet" href="/css/colorscheme-oceanside.css">
    <!-- selectivizr.com, emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8 -->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="/js/libs/selectivizr-min.js"></script>
    <![endif]-->
    <!-- modernizr.com, feature detection -->
    <script src="/js/libs/modernizr-2.0.6.min.js"></script>
    <script src="/js/libs/modernizr-extra.min.js"></script>

    <!-- Load jQuery from CDN with fallback to local copy -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script>
    //Fall back to local copy if no jquery found
    if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='/js/libs/jquery-1.12.4.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>

    <!-- For iPad 3-->
    <link rel="apple-touch-icon" sizes="144x144" href="/images/template2014/apple-touch-icon-144x144.png">
    <!-- For iPhone 4 -->
    <link rel="apple-touch-icon" sizes="114x114" href="/images/template2014/apple-touch-icon-114x114.png">
    <!-- For iPad 1-->
    <link rel="apple-touch-icon" sizes="72x72" href="/images/template2014/apple-touch-icon-72x72.png">
    <!-- For iPhone 3G, iPod Touch and Android -->
    <link rel="apple-touch-icon" href="/images/template2014/apple-touch-icon-57x57.png">
    <!-- For Nokia -->
    <link rel="shortcut icon" href="/images/template2014/apple-touch-icon-57x57.png">
    <!-- For everything else -->
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Activate ClearType for Mobile IE -->
    <!--[if IE]>
    <meta http-equiv="cleartype" content="on">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/libs/html5shiv.min.js"></script>
      <script src="/js/libs/respond.min.js"></script>
    <![endif]-->

    <!--END HEAD INCLUDE-->

    <style>
        /*sub nav icon*/
        .nav-item .toggle-sub-nav {
            cursor: pointer;
            display: none;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 3;
            text-align: center;
            font-style: normal;
            color: #777777;
            font-family: 'CaGov';
            font-size: 1.5rem;
            line-height: 55px;
            width: 60px;
        }

            .nav-item .toggle-sub-nav:before {
                content: "\e66a";
            }

            .nav-item .toggle-sub-nav.toggle-sub-nav--open:before {
                content: "\e66b";
            }


        .sub-nav {
            -webkit-transition: all .4s;
            transition: all .4s;
        }

            .sub-nav.open {
                display: block;
                max-height: 500px;
                left: 0;
            }

        #navigation {
            -webkit-transition: all .5s;
            transition: all .5s;
        }

            #navigation.active {
                max-height: 5000px;
            }

        @media (max-width: 767px) {
            #navigation {
                max-height: 0;
                overflow: hidden;
            }

            .sub-nav {
                display: block;
                top: 0;
                position: relative;
                max-height: 0;
            }

            .nav-item .toggle-sub-nav {
                display: block;
            }
        }
    </style>
</head>

<body class="two-column">

    <header role="banner" id="header" class="global-header">
        <div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>


        <!-- Include Utility Header -->
        <div class="utility-header">
            <div class="container">
                <div class="group">
                    <div class="half">

                        <ul class="utility-links social-media-links">
                            <li><div class="header-cagov-logo"><a href="/"><img src="/images/Ca-Gov-Logo-Gold.svg" alt="CA.gov" /></a></div></li>
                            <li><a href="/"><span class="ca-gov-icon-home" aria-hidden="true"></span><span class="sr-only">Home</span></a></li>


                            <li><a class="ca-gov-icon-facebook" title="Share via Facebook" tabindex="0"></a></li>
                            <li><a class="ca-gov-icon-twitter" title="Share via Twitter" tabindex="0"></a></li>
                            <li><a class="ca-gov-icon-google-plus" title="Share via Google+" tabindex="0"></a></li>
                            <li><a class="ca-gov-icon-email" title="Share via email" tabindex="0"></a></li>
                        </ul>
                    </div>
                    <div class="half settings-links">
                        <ul class="utility-links ">
                            <li><a href="">Contact Us</a></li>
                            <li><a role="button" data-toggle="collapse" href="#siteSettings" aria-expanded="false" aria-controls="siteSettings"><span class="ca-gov-icon-gear" aria-hidden="true"></span> Settings</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Settings Bar -->
        <!-- Include Branding -->
        <!-- header branding -->
        <div class="branding">
            <div class="header-organization-banner"><a href="/"><img src="/images/template-logo.png" alt="Organization Title" /></a></div>
        </div>





        <!-- Include Mobile Controls -->
        <!-- mobile navigation controls -->
        <div class="mobile-controls">

            <span class="mobile-control toggle-menu"><span class="ca-gov-icon-menu" aria-hidden="true"></span><span class="sr-only">Menu</span></span>
            <span class="mobile-control-group mobile-header-icons">

                <!-- Add more mobile controls here. These will be on the right side of the mobile page header section -->
            </span>
            <span class="mobile-control toggle-search"><span class="ca-gov-icon-search" aria-hidden="true"></span><span class="sr-only">Search</span></span>
            <span class="mobile-control-group mobile-menu-icons">
                <!-- Add more mobile controls here. These will be on the top right section of the expanded mobile menu -->
            </span>
        </div>




        <div class="navigation-search">
            <div id="head-search" class="search-container">
                <!-- Include Search -->
                <gcse:searchbox-only resultsUrl="/serp.php"> enableAutoComplete="true"></gcse:searchbox-only>
            </div>






            <!-- Include Navigation -->
            <!--
            Step 2
            Select Navigation Type:

            Options are: megadropdown dropdown singlelevel
            -->
            <nav id="navigation" class="main-navigation megadropdown original">
                <ul id="nav-menu" class="top-level-nav">
                    <li class="home-link nav-item">
                        <a href="/" class="first-level-link"><span id="nav_home_container" class="ca-gov-icon-home" aria-hidden="true"></span><span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item active">
                        <a href="/sample/" class="first-level-link has-sub"><span class="ca-gov-icon-gears"></span>Examples</a>
                        <span class="toggle-sub-nav" aria-hidden="true"></span>
                        <span class="sr-only">Sub Menu Toggle</span>
                        <div class="sub-nav">
                            <ul class="second-level-nav">
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="first-level-link has-sub"><span class="ca-gov-icon-info-bubble" aria-hidden="true"></span>Link</a>
                        <span class="toggle-sub-nav" aria-hidden="true"></span>
                        <span class="sr-only">Sub Menu Toggle</span>
                        <div class="sub-nav">
                            <ul class="second-level-nav">
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 1</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 2</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 3</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="first-level-link has-sub"><span class="ca-gov-icon-info-bubble" aria-hidden="true"></span>Link</a>
                        <span class="toggle-sub-nav" aria-hidden="true"></span>
                        <span class="sr-only">Sub Menu Toggle</span>
                        <div class="sub-nav">
                            <ul class="second-level-nav">
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 1</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 2</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 3</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="first-level-link has-sub"><span class="ca-gov-icon-info-bubble" aria-hidden="true"></span>Link</a>
                        <span class="toggle-sub-nav" aria-hidden="true"></span>
                        <span class="sr-only">Sub Menu Toggle</span>
                        <div class="sub-nav">
                            <ul class="second-level-nav">
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 1</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 2</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 3</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="first-level-link has-sub"><span class="ca-gov-icon-info-bubble" aria-hidden="true"></span>Link</a>
                        <span class="toggle-sub-nav" aria-hidden="true"></span>
                        <span class="sr-only">Sub Menu Toggle</span>
                        <div class="sub-nav">
                            <ul class="second-level-nav">
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 1</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 2</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 3</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="first-level-link has-sub"><span class="ca-gov-icon-info-bubble" aria-hidden="true"></span>Link</a>
                        <span class="toggle-sub-nav" aria-hidden="true"></span>
                        <span class="sr-only">Sub Menu Toggle</span>
                        <div class="sub-nav">
                            <ul class="second-level-nav">
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 1</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 2</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink 3</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>
                                <li>
                                    <a href="/" class="second-level-link">Dropdown Sublink</a>
                                    <div class="link-description">Lorem ipsum dolor sit amet consectetur adipisicing</div>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>







        </div>
        <div class="header-decoration"></div>
    </header>

    <div id="main-content" class="main-content">
        <div class="section">
            <main class="main-primary">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="index.php">Examples</a></li>
                    <li class="active">Megamenu (State Template v4)</li>
                </ol>

                <h1>State Template v4 Original Megamenu</h1>
                <p>This megamenu has similar look and feel as the original State Template v4 megamenu. The functionality in both template v5 and template v4 is the same: the megamenu displays dropdown panels for sub navigation when the user hovers over a primary link. This style of menu can be set by including the <code>.megadropdown</code> as well as <code>.original</code> classes in the <code>&lt;nav&gt;</code> element.</p>
                <p><strong>Example:</strong> <br><code>&lt;nav id="navigation" class="main-navigation megadropdown original"&gt;</code> .</p>
                <p>
                    In the template distribution this markup can be found in <code>/ssi/navigation.php</code>.


                    <h2>Sub Navigation Images</h2>
                <p>
                    The sub navigation panels in the megamenu include the ability to place images next to the links.
                    Image are included by placing a <code>&lt;div&gt;</code> with class <code>.sub-nav-decoration</code>
                    as the last element in the <code>&lt;div&gt;</code> with class <code>.sub-nav</code>.
                </p>

                <p>
                    The image is defined as a background image in the <code>style</code> attribute of the <code>.sub-nav-decoration</code> element.
                    The image will automatically be scaled and cropped to fit the provided area.
                </p>

                <p>
                    The image size and position is determinde by an additional
                    class added to the <code>&lt;div&gt;</code> with class <code>.sub-nav</code>. These classes are as follows:
                </p>

                <ul>
                    <li><code>.with-image-sm-right</code>: Places the image on the right, occupying one third of the sub navigation panel width.</li>
                    <li><code>.with-image-md-right</code>: Places the image on the right, occupying half of the panel. l</li>
                    <li><code>.with-image-sm-left</code>: Places the image on the left, occupying one third of the panel.</li>
                    <li><code>.with-image-md-left</code>: Places the inmage on the left, occupying half of the panel.</li>
                </ul>

                <p>
                    <strong>Example:</strong> <br>
                </p>

                <pre>&lt;li class="nav-item"&gt;
    &lt;a href="/" class="first-level-link"&gt;Link 3&lt;/a&gt;
                <strong>&lt;div class="sub-nav with-image-sm-right"&gt;</strong>
        &lt;ul class="second-level-nav"&gt;
            &lt;li&gt;
                …links
            &lt;/li&gt;
        &lt;/ul&gt;
                <strong>&lt;div class="sub-nav-decoration" style="background:url('/sample/images/sample-nav-image.jpg')"&gt;&lt;/div&gt;</strong>
     &lt;/div&gt;
&lt;/li&gt;
</pre>

                <h2>More Navigation Samples</h2>
                <ul>
                    <li><a href="navigation-single.php">Single Level Navigation</a></li>
                    <li><a href="navigation-dropdown.php">Dropdown Navigation</a></li>
                    <li><a href="navigation-megamenu.php">Megamenu</a></li>
                </ul>

            </main>

            <div class="main-secondary">
            </div>
        </div>
    </div>


    <!-- Global Footer -->
    <footer id="footer" class="global-footer">
        <div class="container">
            <div class="row">
                <div class="three-quarters">
                    <ul class="footer-links">
                        <li><a href="#skip-to-content">Back to Top</a></li>
                        <li><a href="/use.php">Conditions of Use</a></li>
                        <li><a href="/privacy.php">Privacy Policy</a></li>
                        <li><a href="/accessibility.php">Accessibility</a></li>
                        <li><a href="/contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="quarter text-right">
                    <ul class="socialsharer-container">
                        <li><a href="https://www.flickr.com/groups/californiagovernment"><span class="ca-gov-icon-flickr" aria-hidden="true"></span><span class="sr-only">Flickr</span></a></li>
                        <li><a href="https://www.pinterest.com/cagovernment/"><span class="ca-gov-icon-pinterest" aria-hidden="true"></span><span class="sr-only">Pinterest</span></a></li>
                        <li><a href="https://twitter.com/cagovernment"><span class="ca-gov-icon-twitter" aria-hidden="true"></span><span class="sr-only">Twitter</span></a></li>
                        <li><a href="https://www.youtube.com/user/californiagovernment"><span class="ca-gov-icon-youtube" aria-hidden="true"></span><span class="sr-only">YouTube</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Copyright Statement -->
        <div class="copyright">
            <div class="container">
                Copyright &copy;
                <script>document.write(new Date().getFullYear())</script> State of California
            </div>
        </div>
    </footer>
    <!-- Extra Decorative Content -->
    <div class="decoration-last">&nbsp;</div>




    <script>
        "use strict";
        ! function (e, t, s) {
            function a(t, s) {
                this.element = t,
                this.settings = e.extend({}, o, s),
                this.defaults = o, this.name = l,
                this.mouseTimeoutID = null,
                this.focusTimeoutID = null,
                this.mouseFocused = !1,
                this.justFocused = !1, this.init()
            }

            function i(t) {
                return e.expr.filters.visible(t) && !e(t).parents().addBack().filter(function () {
                    return "hidden" === e.css(this, "visibility")
                }).length
            }

            function n(t, s) {
                var a, n, l, o = t.nodeName.toLowerCase();
                return "area" === o ? (a = t.parentNode, n = a.name, t.href && n && "map" === a.nodeName.toLowerCase() ? (l = e("img[usemap=#" + n + "]")[0], !!l && i(l)) : !1) : (/input|select|textarea|button|object/.test(o) ? !t.disabled : "a" === o ? t.href || s : s) && i(t)
            }
            var l = "accessibleMegaMenu",
                o = {
                    navToggle: "#nav-toggle",
                    navId: "#navigation",
                    mobileBreakpoint: "767",
                    topNavIconClass: ".toggle-sub-nav",
                    uuidPrefix: "accessible-megamenu",
                    menuClass: "accessible-megamenu",
                    topNavItemClass: "accessible-megamenu-top-nav-item",
                    panelClass: "accessible-megamenu-panel",
                    panelGroupClass: "accessible-megamenu-panel-group",
                    hoverClass: "hover",
                    focusClass: "focus",
                    openClass: "open",
                    openDelay: 400, // default open delay when opening menu via mouseover
                },
                r = {
                    BACKSPACE: 8,
                    COMMA: 188,
                    DELETE: 46,
                    DOWN: 40,
                    END: 35,
                    ENTER: 13,
                    ESCAPE: 27,
                    HOME: 36,
                    LEFT: 37,
                    PAGE_DOWN: 34,
                    PAGE_UP: 33,
                    PERIOD: 190,
                    RIGHT: 39,
                    SPACE: 32,
                    TAB: 9,
                    UP: 38,
                    keyMap: {
                        48: "0",
                        49: "1",
                        50: "2",
                        51: "3",
                        52: "4",
                        53: "5",
                        54: "6",
                        55: "7",
                        56: "8",
                        57: "9",
                        59: ";",
                        65: "a",
                        66: "b",
                        67: "c",
                        68: "d",
                        69: "e",
                        70: "f",
                        71: "g",
                        72: "h",
                        73: "i",
                        74: "j",
                        75: "k",
                        76: "l",
                        77: "m",
                        78: "n",
                        79: "o",
                        80: "p",
                        81: "q",
                        82: "r",
                        83: "s",
                        84: "t",
                        85: "u",
                        86: "v",
                        87: "w",
                        88: "x",
                        89: "y",
                        90: "z",
                        96: "0",
                        97: "1",
                        98: "2",
                        99: "3",
                        100: "4",
                        101: "5",
                        102: "6",
                        103: "7",
                        104: "8",
                        105: "9",
                        190: "."
                    }
                };
            a.prototype = function () {
                var i, n, o, u, c, f, d, h, p, g, m, b, C, v, x = 0,
                    y = 1e3,
                    T = "",
                    D = "function" == typeof t.hasOwnProperty && !!t.hasOwnProperty("ontouchstart");
                return i = function (t) {
                    return e(t).closest(":data(plugin_" + l + ")").data("plugin_" + l)
                }, n = function (t) {
                    t = e(t);
                    var s = this.settings;
                    t.attr("id") || t.attr("id", s.uuidPrefix + "-" + (new Date).getTime() + "-" + ++x)
                }, o = function (t, a) {
                    var i, n = e(t.target),
                        l = this,
                        o = this.settings,
                        u = this.menu,
                        c = n.closest("." + o.topNavItemClass),
                        f = n.hasClass(o.panelClass) ? n : n.closest("." + o.panelClass);
                    if (v.call(this, !0), a)
                        if (c = u.find("." + o.topNavItemClass + " ." + o.openClass + ":first").closest("." + o.topNavItemClass), c.is(t.relatedTarget) || c.has(t.relatedTarget).length > 0) 0 === c.length && u.find("[aria-expanded=true]").attr("aria-expanded", "false").removeClass(o.openClass).filter("." + o.panelClass).attr("aria-hidden", "true");
                        else {
                            if (("mouseout" === t.type || "focusout" === t.type) && c.has(s.activeElement).length > 0) return void console.log("returned");
                            c.find("[aria-expanded]").attr("aria-expanded", "false").removeClass(o.openClass).filter("." + o.panelClass).attr("aria-hidden", "true"), ("keydown" === t.type && t.keyCode === r.ESCAPE || "DOMAttrModified" === t.type) && (i = c.find(":tabbable:first"), setTimeout(function () {
                                u.find("[aria-expanded]." + l.settings.panelClass).off("DOMAttrModified.accessible-megamenu"), i.focus(), l.justFocused = !1
                            }, 100))
                        }
                    else {
                        clearTimeout(l.focusTimeoutID);
                        var d = c.siblings();
                        d.find("[aria-expanded]").attr("aria-expanded", "false").removeClass(o.openClass).filter("." + o.panelClass).attr("aria-hidden", "true"), d.find(o.topNavIconClass).removeClass("toggle-sub-nav--open"), c.find("[aria-expanded]").attr("aria-expanded", "true").addClass(o.openClass).filter("." + o.panelClass).attr("aria-hidden", "false"), "mouseover" === t.type && n.is(":tabbable") && 1 === c.length && 0 === f.length && u.has(s.activeElement).length > 0 && (console.log("focus set"), n.focus(), l.justFocused = !1), v.call(l)
                    }
                },
                    // touchstart
                    u = function (s) {
                    if (t.innerWidth >= this.settings.mobileBreakpoint) {
                        var a = e(s.currentTarget),
                            i = a.closest("." + this.settings.topNavItemClass),
                            n = a.closest("." + this.settings.panelClass);
                        1 === i.length && 0 === n.length && 1 === i.find("." + this.settings.panelClass).length && (a.hasClass(this.settings.openClass) ? this.justFocused ? (s.preventDefault(), s.stopPropagation(), this.justFocused = !1) : D && (s.preventDefault(), s.stopPropagation(), o.call(this, s, a.hasClass(this.settings.openClass))) : (s.preventDefault(), s.stopPropagation(), o.call(this, s), this.justFocused = !1))
                    }
                    },

                    c = function (s) {
                    t.innerWidth >= this.settings.mobileBreakpoint && 0 === e(s.target).closest(this.menu).length && (s.preventDefault(), s.stopPropagation(), o.call(this, s, !0))
                    },

                    f = function (t) {
                    "aria-expanded" === t.originalEvent.attrName && "false" === t.originalEvent.newValue && e(t.target).hasClass(this.settings.openClass) && (t.preventDefault(), t.stopPropagation(), o.call(this, t, !0))
                },


                    d = function (t) {
                    clearTimeout(this.focusTimeoutID);
                    var s = e(t.target),
                        a = s.closest("." + this.settings.panelClass);
                    s.addClass(this.settings.focusClass).on("click.accessible-megamenu", e.proxy(u, this)), this.justFocused = !this.mouseFocused, this.mouseFocused = !1, this.panels.not(a).filter("." + this.settings.openClass).length && o.call(this, t)
                },


                    h = function (s) {
                    this.justFocused = !1;
                    var a = this,
                        i = e(s.target),
                        n = i.closest("." + this.settings.topNavItemClass);
                    i.removeClass(this.settings.focusClass).off("click.accessible-megamenu"), t.cvox ? a.focusTimeoutID = setTimeout(function () {
                        t.cvox.Api.getCurrentNode(function (e) {
                            n.has(e).length ? clearTimeout(a.focusTimeoutID) : a.focusTimeoutID = setTimeout(function (e, t, a) {
                                o.call(e, s, a)
                            }, 1000, a, s, !0)
                        })
                    }, 1000) : a.focusTimeoutID = setTimeout(function () {
                        o.call(a, s, !0)
                    }, 1000)
                }, p = function (s) {
                    var n, l, c, f, d, h, p = this.constructor === a ? this : i(this),
                        g = p.settings,
                        m = e(e(this).is("." + g.hoverClass + ":tabbable") ? this : s.target),
                        b = p.menu,
                        C = p.topnavitems,
                        v = m.closest("." + g.topNavItemClass),
                        x = b.find(":tabbable"),
                        D = m.hasClass(g.panelClass) ? m : m.closest("." + g.panelClass),
                        I = D.find("." + g.panelGroupClass),
                        k = m.closest("." + g.panelGroupClass),
                        E = s.keyCode || s.which,
                        N = !1,
                        w = r.keyMap[s.keyCode] || "",
                        P = 1 === v.length && 0 === D.length;
                    if (!m.is("input:focus, select:focus, textarea:focus, button:focus")) {
                        switch (m.is("." + g.hoverClass + ":tabbable") && e("html").off("keydown.accessible-megamenu"), E) {
                            case r.ESCAPE:
                                o.call(p, s, !0);
                                break;
                            case r.DOWN:
                                s.preventDefault(), P ? (o.call(p, s), N = 1 === v.find("." + g.panelClass + " :tabbable:first").focus().length) : N = 1 === x.filter(":gt(" + x.index(m) + "):first").focus().length, !N && t.opera && "[object Opera]" === opera.toString() && (s.ctrlKey || s.metaKey) && (x = e(":tabbable"), c = x.index(m), N = 1 === e(":tabbable:gt(" + e(":tabbable").index(m) + "):first").focus().length);
                                break;
                            case r.UP:
                                s.preventDefault(), P && m.hasClass(g.openClass) ? (o.call(p, s, !0), n = C.filter(":lt(" + C.index(v) + "):last"), n.children("." + g.panelClass).length && (N = 1 === n.children().attr("aria-expanded", "true").addClass(g.openClass).filter("." + g.panelClass).attr("aria-hidden", "false").find(":tabbable:last").focus())) : P || (N = 1 === x.filter(":lt(" + x.index(m) + "):last").focus().length), !N && t.opera && "[object Opera]" === opera.toString() && (s.ctrlKey || s.metaKey) && (x = e(":tabbable"), c = x.index(m), N = 1 === e(":tabbable:lt(" + e(":tabbable").index(m) + "):first").focus().length);
                                break;
                            case r.RIGHT:
                                s.preventDefault(), P ? N = 1 === C.filter(":gt(" + C.index(v) + "):first").find(":tabbable:first").focus().length : (I.length && k.length && (N = 1 === I.filter(":gt(" + I.index(k) + "):first").find(":tabbable:first").focus().length), N || (N = 1 === v.find(":tabbable:first").focus().length));
                                break;
                            case r.LEFT:
                                s.preventDefault(), P ? N = 1 === C.filter(":lt(" + C.index(v) + "):last").find(":tabbable:first").focus().length : (I.length && k.length && (N = 1 === I.filter(":lt(" + I.index(k) + "):last").find(":tabbable:first").focus().length), N || (N = 1 === v.find(":tabbable:first").focus().length));
                                break;
                            case r.TAB:
                                c = x.index(m), s.shiftKey && P && m.hasClass(g.openClass) ? (o.call(p, s, !0), n = C.filter(":lt(" + C.index(v) + "):last"), n.children("." + g.panelClass).length && (N = n.children().attr("aria-expanded", "true").addClass(g.openClass).filter("." + g.panelClass).attr("aria-hidden", "false").find(":tabbable:last").focus())) : s.shiftKey && c > 0 ? N = 1 === x.filter(":lt(" + c + "):last").focus().length : !s.shiftKey && c < x.length - 1 ? N = 1 === x.filter(":gt(" + c + "):first").focus().length : t.opera && "[object Opera]" === opera.toString() && (x = e(":tabbable"), c = x.index(m), N = s.shiftKey ? 1 === e(":tabbable:lt(" + e(":tabbable").index(m) + "):last").focus().length : 1 === e(":tabbable:gt(" + e(":tabbable").index(m) + "):first").focus().length), N && s.preventDefault();
                                break;
                            case r.SPACE:
                                P && (s.preventDefault(), u.call(p, s));
                                break;
                            case r.ENTER:
                                break;
                            default:
                                if (clearTimeout(this.keydownTimeoutID), T += w !== T ? w : "", 0 === T.length) return;
                                for (this.keydownTimeoutID = setTimeout(function () {
                                        T = ""
                                }, y), x = P && !m.hasClass(g.openClass) ? x.filter(":not(." + g.panelClass + " :tabbable)") : v.find(":tabbable"), s.shiftKey && (x = e(x.get().reverse())), c = 0; c < x.length; c++)
                                    if (f = x.eq(c), f.is(m)) {
                                        l = 1 === T.length ? c + 1 : c;
                                        break
                                    }
                                for (h = new RegExp("^" + T.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&"), "i"), c = l; c < x.length; c++)
                                    if (f = x.eq(c), d = e.trim(f.text()), h.test(d)) {
                                        N = !0, f.focus();
                                        break
                                    }
                                if (!N)
                                    for (c = 0; l > c; c++)
                                        if (f = x.eq(c), d = e.trim(f.text()), h.test(d)) {
                                            f.focus();
                                            break
                                        }
                        }
                        p.justFocused = !1
                    }
                },


                    g = function (t) {
                        (e(t.target).is(this.settings.panelClass) || e(t.target).closest(":focusable").length) && (this.mouseFocused = !0),
                            this.mouseTimeoutID = setTimeout(function () {
                        clearTimeout(this.focusTimeoutID)
                    }, 500)
                },




                    // mouse over function

                    
                   m = function (s) {
                       t.innerWidth >= this.settings.mobileBreakpoint && (clearTimeout(this.mouseTimeoutID),
                       e(s.target).addClass(this.settings.hoverClass),
                       o.call(this, s),
                       e(s.target).is(":tabbable") && e("html").on("keydown.accessible-megamenu", e.proxy(p, s.target)))
                   },
                  

                    b = function (t) {
                    clearTimeout(this.mouseTimeoutID);
                    var s = e(t.target);
                    s.toggleClass("toggle-sub-nav--open"), s.hasClass("toggle-sub-nav--open") ? o.call(this, t) : o.call(this, t, !0), e(t.target).is(":tabbable") && e("html").on("keydown.accessible-megamenu", e.proxy(p, t.target))
                    },

                     // mouseout function
                    C = function (s) {
                    if (t.innerWidth >= this.settings.mobileBreakpoint) {
                        var a = this;
                        e(s.target).removeClass(a.settings.hoverClass), a.mouseTimeoutID = setTimeout(function () {
                            o.call(a, s, !0)
                        }, 500), e(s.target).is(":tabbable") && e("html").off("keydown.accessible-megamenu")
                    }
                    },


                    v = function (t) {
                    var s = this.menu;
                    t ? (e("html").off("mouseup.outside-accessible-megamenu, touchend.outside-accessible-megamenu, mspointerup.outside-accessible-megamenu,  pointerup.outside-accessible-megamenu"), s.find("[aria-expanded]." + this.settings.panelClass).off("DOMAttrModified.accessible-megamenu")) : (e("html").on("mouseup.outside-accessible-megamenu, touchend.outside-accessible-megamenu, mspointerup.outside-accessible-megamenu,  pointerup.outside-accessible-megamenu", e.proxy(c, this)), s.find("[aria-expanded=true]." + this.settings.panelClass).on("DOMAttrModified.accessible-megamenu", e.proxy(f, this)))
                }, {
                    constructor: a,
                    init: function () {
                        var t = this.settings,
                            s = e(this.element),
                            a = s.children().first(),
                            i = a.children();
                        this.start(t, s, a, i)
                    },



                    start: function (a, i, l, o) {
                        var r = this;
                        this.settings = a, this.menu = l, this.topnavitems = o, i.attr("role", "navigation"), l.addClass(a.menuClass), o.each(function (t, s) {
                            var i, l;
                            s = e(s), s.addClass(a.topNavItemClass), i = s.find(":tabbable:first"), l = s.children(":not(:tabbable):last"), n.call(r, i), l.length && (n.call(r, l), i.attr({
                                "aria-haspopup": !0,
                                "aria-controls": l.attr("id"),
                                "aria-expanded": !1
                            }), l.attr({
                                role: "group",
                                "aria-expanded": !1,
                                "aria-hidden": !0
                            }).addClass(a.panelClass).not("[aria-labelledby]").attr("aria-labelledby", i.attr("id")))
                        }), this.panels = l.find("." + a.panelClass), l.on("focusin.accessible-megamenu", ":focusable, ." + a.panelClass, e.proxy(d, this)).on("focusout.accessible-megamenu", ":focusable, ." + a.panelClass, e.proxy(h, this)).on("keydown.accessible-megamenu", e.proxy(p, this))
                            .on("mouseover.accessible-megamenu", e.proxy(m, this))
                            .on("mouseout.accessible-megamenu", e.proxy(C, this))
                            .on("mousedown.accessible-megamenu", e.proxy(g, this)), e(a.topNavIconClass)
                            .on("mouseup.accessible-megamenu", e.proxy(b, this)), D && l
                            .on("touchstart.accessible-megamenu", e.proxy(u, this)), l.find("hr").attr("role", "separator"), e(s.activeElement).closest(l).length && e(s.activeElement).trigger("focusin.accessible-megamenu"),

                   

                        e(t).bind("resize", function () {

                                e(t).width() >= a.mobileBreakpoint && (e("." + a.topNavItemClass).find("[aria-expanded]").attr("aria-expanded", "false").removeClass(a.openClass).filter("." + a.panelClass).attr("aria-hidden", "true"),
                                e("." + a.topNavItemClass).find(a.topNavIconClass).removeClass("toggle-sub-nav--open")),
                                e(a.navId).removeClass("active")
                          
                        }),
                        e(a.navToggle).click(function (t) {
                            t.preventDefault(), e(a.navId).toggleClass("active")
                        })
                    },
               



                    getDefaults: function () {
                        return this.defaults
                    },
                    getOption: function (e) {
                        return this.settings[e]
                    },
                    getAllOptions: function () {
                        return this.settings
                    },
                    setOption: function (e, t, s) {
                        this.settings[e] = t, s && this.init()
                    }
                }
            }(), e.fn[l] = function (t) {
                return this.each(function () {
                    e.data(this, "plugin_" + l) || e.data(this, "plugin_" + l, new e.fn[l].AccessibleMegaMenu(this, t))
                })
            }, e.fn[l].AccessibleMegaMenu = a, e.extend(e.expr[":"], {
                data: e.expr.createPseudo ? e.expr.createPseudo(function (t) {
                    return function (s) {
                        return !!e.data(s, t)
                    }
                }) : function (t, s, a) {
                    return !!e.data(t, a[3])
                },
                focusable: function (t) {
                    return n(t, !isNaN(e.attr(t, "tabindex")))
                },
                tabbable: function (t) {
                    var s = e.attr(t, "tabindex"),
                        a = isNaN(s);
                    return (a || s >= 0) && n(t, !a)
                }
            })
        }(jQuery, window, document), jQuery && ! function (e) {
            e(document).ready(function () {
                e(".megamenu").accessibleMegaMenu(), setTimeout(function () {
                    e("body").removeClass("init")
                }, 500)
            })




        }(jQuery);
    </script>
    <script>
        $("nav:first").accessibleMegaMenu({

            /* Button that toggles navigation at mobile */
            navToggle: '.toggle-menu',

            /* Id of navigation */
            navId: '#navigation',

            /* mobile breakpoint in pixels that determines when the menu goes to mobile */
            mobileBreakpoint: '767',
            /* prefix for generated unique id attributes, which are required
               to indicate aria-owns, aria-controls and aria-labelledby */
            uuidPrefix: 'accessible-megamenu',

            /* css class used to define the megamenu styling */
            menuClass: 'nav-menu',

            /* css class for a top-level navigation item in the megamenu */
            topNavItemClass: 'nav-item',

            /* css class for a top-level icon in the megamenu (displayed at mobile) */
            topNavIconClass: '.toggle-sub-nav',

            /* css class for a megamenu panel */
            panelClass: 'sub-nav',

            /* css class for a group of items within a megamenu panel */
            panelGroupClass: 'sub-nav-group',

            /* css class for the hover state */
            hoverClass: 'hover',

            /* css class for the focus state */
            focusClass: 'focus',

            /* css class for the open state */
            openClass: 'open'
        });




    </script>
</body>
</html>