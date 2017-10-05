<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Expozy" />
    <meta name="description" content="Expozy is Open Source CMS">
    <!-- Document title -->
    <?php if($page == 1) {?>
		<title><?php echo _SITE_TITLE; ?></title>
	<?php } else { ?>
		<title><?php echo $values["title$db_lang"]; ?></title>
	<?php } ?>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="/template/css/plugins.css" rel="stylesheet">
    <link href="/template/css/style.css" rel="stylesheet">
    <link href="/template/css/responsive.css" rel="stylesheet"> </head>

<body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
       <header id="header" class="header-fullwidth header-transparent header-plain">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="/" class="logo" data-dark-logo="/template/images/logo-dark.png">
                            <img src="/template/images/logo.png" alt="Expozy Open Source">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <div class="topbar-dropdown">
                                    <a class="title"><i class="fa fa-globe"></i></a>
                                    <div class="dropdown-list">
                                        <a class="list-entry" href="?lang=bg">Български</a>
                                        <a class="list-entry" href="?lang=en">English</a>
                                        <a class="list-entry" href="?lang=de">Deutsch</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <div id="mainMenu" class="light">
                        <div class="container">
                            <nav>
                                <?php echo $menu; ?>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>