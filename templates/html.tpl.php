<!DOCTYPE html>
<html dir="<?php print $language->dir; ?>" lang="<?php print $language->language; ?>">
  <head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Virtual Data" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php print $head ?>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <?php print $styles ?>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <?php print $scripts ?>

    <!-- Document Title
    ============================================= -->
    <title><?php print $head_title ?></title>

  </head>

  <body class="stretched">

    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>

  </body>
</html>
