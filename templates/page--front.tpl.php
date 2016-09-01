<!-- The Main Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

  <!-- Top Bar
  ============================================= -->
  <div id="top-bar" class="hidden-xs">
    <div class="container clearfix">
      <div class="col_half nobottommargin">
        <p class="nobottommargin"><i class="icon-phone" style="padding-right:8px;"></i>+34 943 89 6024</p>
      </div>
      <div class="col_half nobottommargin">
        <p class="nobottommargin"><i class="icon-mail" style="padding-right:10px;"></i>udala@getaria.eus</p>
      </div>
      <div class="col_half col_last fright nobottommargin">
      <!-- Top Links
        ============================================= -->
        <div class="top-links">
          <ul>
            <a href="https://www.facebook.com/Getariako.Udala" title="Facebook" target="_blank" class="social-icon si-borderless si-small si-facebook" style="margin-top:8px;"><i class="icon-facebook"></i><i class="icon-facebook"></i></a>
            <li><a href="/es">CAS</a></li>
            <li><a href="/eu">EUS</a></li>
            <li>
              <a href="#">Login</a>
              <div class="top-link-section">
                <form id="top-login" role="form">
                  <div class="input-group" id="top-login-username">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="email" class="form-control" placeholder="Email" required>
                  </div>
                  <div class="input-group" id="top-login-password">
                    <span class="input-group-addon"><i class="icon-key"></i></span>
                    <input type="password" class="form-control" placeholder="Password" required>
                  </div>
                  <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Recordar Password
                  </label>
                  <button class="btn btn-danger btn-block" type="submit">Entrar</button>
                </form>
              </div>
            </li>
          </ul>
        </div><!-- .top-links end -->
      </div>
    </div>
  </div><!-- #top-bar end -->

  <!-- Header
  ============================================= -->
  <header id="header" class="full-header">
    <div id="header-wrap">
      <div class="container clearfix">

        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

        <!-- Logo
        ============================================= -->
        <div id="logo">
          <a href="/" class="standard-logo" data-dark-logo="<?php print $logo; ?>"><img src="<?php print $logo; ?>" alt="Canvas Logo"></a>
          <a href="/" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
        </div><!-- #logo end -->

        <nav id="primary-menu">
        <?php print render($primary_nav); ?>
        </nav>

      </div>
    </div>
  </header>

  <!-- Page Title
  ============================================= -->
  <section id="page-title">
    <div class="container clearfix">
      <h1><?php print $title; ?></h1>
      <span><?php print $site_slogan; ?></span>
      <?php print $breadcrumb; ?>
    </div>
  </section>

  <!-- Site Content
  ============================================= -->
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">

        <?php if ($messages): print $messages; endif; ?>

        <!-- Sidebar
        ============================================= -->
        <?php print render($page['sidebar_first']); ?>

        <!-- Main Content
        ============================================= -->
        <div class="postcontent bothsidebar nobottommargin clearfix">
          <h4 class="uppercase center bottommargin-lg"><?php print t('Wellcome to Getaria Council'); ?></h4>
          <div id="posts" class="small-thumbs alt">
            <?php print render($page['content']); ?>
          </div>
        </div>

        <!-- Sidebar
        ============================================= -->
        <?php print render($page['sidebar_second']); ?>

      </div>
    </div>
  </section>

  <!-- Footer
  ============================================= -->
  <footer id="footer" class="dark">
    <div class="container">

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">
      <div class="container clearfix">

      </div>
    </div>
  </footer>

  <!-- Go To Top
  =============================================== -->
  <div id="gotoTop" class="icon-angle-up"></div>

</div>
