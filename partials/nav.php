<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><?=get_bloginfo( 'name' )?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container_class' => 'collapse navbar-collapse',
            'menu_class' => 'navbar-nav',
            'add_li_class' => 'nav-item',
            'link_class' =>  'nav-link'
        ]); ?> 
    <!-- <div class="collapse navbar-collapse" id="navbarNav">

       
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>

      </ul>
    </div> -->
  </div>
</nav>