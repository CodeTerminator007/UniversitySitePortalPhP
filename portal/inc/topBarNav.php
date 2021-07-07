
      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="http://localhost/UniversityWebProject/" class="navbar-brand">
          <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 2.5rem;height: 2.5rem;max-height: unset">
          <span class="brand-text font-weight-light"><?php echo (!isMobileDevice()) ? $_settings->info('name'):$_settings->info('short_name'); ?></span>
        </a>

       <!--  <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo "http://localhost/UniversityWebProject/" ?>" class="nav-link">Home</a>
          </li>
        </ul>
      </div> -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        </ul>
      </div>
      </nav>
      <!-- /.navbar