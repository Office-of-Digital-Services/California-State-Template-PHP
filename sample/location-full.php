<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if (gt IE 9)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<!-- 
California State Template
Version 5.0
 
Based on Twitter Bootstrap
-->
<meta charset="utf-8">

<title>Sample - Location Full</title>

<meta name="Author" content="State of California" />
<meta name="Description" content="State of California" />
<meta name="Keywords" content="California, government" />

<?php include_once("../ssi/head-css-js.php");?>
</head>

<body class="">

<header role="banner" id="header" class="global-header">
	<div id="skip-to-content"><a href="#main-content">Skip to Main Content</a></div>
    <!-- Include Branding -->
    <?php include_once("../ssi/branding.php");?>    
    <!-- Include Mobile Controls -->
    <?php include_once("../ssi/mobile-controls.php");?>    <div class="navigation-search">
        <div id="head-search" class="search-container">
            <!-- Include Search -->
            <?php include_once("../ssi/search.php");?>        </div>
        
        <!-- Include Navigation -->
        <?php include_once("../ssi/navigation.php");?>    </div>
	<div class="header-decoration"></div>
</header>

<div id="main-content" class="main-content">
    <div class="wrapper">
        <main class="main-primary">
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="index.php">Examples</a></li>
                <li class="active">Location Full</li>
            </ol>
            
            <?php include("../sample/modules/location-full.php");?>            <hr>
            <h2>Source Code:</h2>
            
            <div class="tab-group">
                <ul id="sourceCode" class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#html" role="tab" data-toggle="tab">HTML Markup</a></li>
                    <li><a href="#microdata" role="tab" data-toggle="tab">Microdata</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content responsive">
                    <div class="tab-pane active" id="html">
                         <textarea class="form-control" rows="10" cols="80"><?php include("../sample/modules/location-full.php");?></textarea>
                    </div>
                    <div class="tab-pane" id="microdata">
                         <textarea class="form-control" rows="10" cols="80"><?php include_once("../sample/modules/location-full-schema.php");?></textarea>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php include_once("../ssi/global-footer.php");?>
<?php include_once("../ssi/scripts.php");?>
</body>
</html>