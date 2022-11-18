<div class="container-fluid" style='background-color: #376101;' id='footer&contacts'>
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center pt-3 pb-3">
          <p class="col-md-4 mb-0 text-white">© 2022 Семена</p>

          <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="<?php echo get_template_directory_uri(); ?>/image/logo.svg" alt="">
          </a>

          <ul class="nav col-md-4 justify-content-end flex-column">
            <li class="nav-item fs-3 fw-bold text-white"><?php echo carbon_get_theme_option('home_page_contacts_title'); ?></li>
            <li class="nav-item text-white"><b>Наш адрес: </b><?php echo carbon_get_theme_option('home_page_contacts_address'); ?></li>
            <li class="nav-item text-white"><b>Телефон: </b><?php echo carbon_get_theme_option('home_page_contacts_number'); ?></li>
            <li class="nav-item text-white"><b>E-mail: </b><?php echo carbon_get_theme_option('home_page_contacts_email'); ?></a></li>
          </ul>
        </footer>
      </div>
    </div>