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

<title>Sample - Profile Banners</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php"); ?>

</head>

<body>

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>    
        <!-- Location Bar -->        
		<?php include_once("../ssi/location-bar.php"); ?>
        
        <!-- Include Utility Header -->
		<?php include_once("../ssi/utility-header.php"); ?>	
        
        <!-- Settings Bar -->	
		<?php include_once("../ssi/settings-bar.php"); ?>

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

<div id="main-content" class="main-content">
    <div class="section">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Profile Banners</li>
            </ol>
            <div class="group">
                <div class="third">
                    <h2>Example:</h2>
                    <?php include("../sample/modules/profile-banners.php"); ?>
                </div>
                <div class="two-thirds">
                    <h1>Profile Banners</h1>
                    <p>The image in the profile banner is added using inline CSS. The recommended solution is to save the banner images in the <code>/images/banner/</code> folder using the person's full name separated by dashes. Example: <code>bob-smith.png</code>. Then update the inline background image on the <code>.profile-banner</code> div. It should look like the following example: <code>&lt;div class="profile-banner" style="background:url(/images/banner/<strong>bob-smith.png</strong>) no-repeat right bottom"&gt;</code></p>

                    <h2>Creating The Banner</h2>
                    <p>The banner used is a transparent 24 bit png and requires that the headshot be pre-matted with the "swoosh" background before being used. A blank banner is located here: <code>/images/banner/banner-blank.png</code> It is recommended that a graphics application such as Adobe Photoshop be used to isolate the headshot and pre-matt it with the <code>banner-blank.png</code> placing the headshot on the right edge of the graphic. Save the combined graphic as a 24 bit transparent png using the naming convention described earlier.</p>

                    <hr>
                    

                    <h2>Source Code:</h2>

                    <div class="tab-group">
                        <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                            <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content responsive">
                            <div class="tab-pane active" id="html">
                              <textarea aria-label="HTML Markup" id="sample-news-list" class="form-control" rows="10" cols="80"><?php include("../sample/modules/profile-banners.php"); ?></textarea>
                            </div>
                            <div class="tab-pane" id="microdata">
                              <textarea aria-label="Microdata" id="sample-news-list-microdata" class="form-control" rows="10" cols="80"><?php include("../sample/modules/profile-banners-schema.php"); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </main>
      
    </div>
</div>

<?php include_once("../ssi/global-footer.php"); ?>

<?php include_once("../ssi/scripts.php"); ?>

</body>
</html>