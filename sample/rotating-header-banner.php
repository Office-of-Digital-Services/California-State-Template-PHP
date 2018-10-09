﻿<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!--        California State Template
        Version 5.0.2
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>DEV-Your Organization Name</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<!-- possibly body classes are primary and two-column -->
<body class="primary">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php"); ?>
    
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php"); ?>
  
    <div class="navigation-search">
      <!-- Include Navigation -->
      <?php include_once("../ssi/navigation.php"); ?>
      
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php"); ?>
        </div>

    </div>
    <div class="header-decoration"></div>
  </header>

  <!-- Include Optional Slideshow banner -->
  <?php include("../ssi/header-slideshow-banner.php"); ?>

<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Rotating Banner</li>
            </ol>
            
            <h1>Rotating Header Banner with Caption</h1>
            <p>The rotating header banner is integrated with the page header. It appears as a background to the other header elements. The markup is contained in <code>/ssi/header-slideshow-banner.php</code>. The banner can only appear on templates with the <code>.primary</code> class applied to the body element.</p>
            
            <p>Each slide in the banner containes a background image and a caption that functions as a link. The image is set by changing the <code>background</code> property in the style attribute for <code>&lt;div class="slide" style="background-image: url('sample/images/background_1.jpg');"&gt;</code>.</p>
            
            <p>An optional link with a caption can be added. The caption is contained inside the link in the <code>.slide-text</code> element.</p>
            
            <h2><label for="sample-header-slideshow-banner">Source Code:</label></h2>
            <textarea id="sample-header-slideshow-banner" class="form-control" rows="10" cols="80"><?php include("../ssi/header-slideshow-banner.php"); ?></textarea>
        </main>
        
    </div>
</div>


<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>
</body>
</html>