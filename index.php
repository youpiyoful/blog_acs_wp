<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( "charset" ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Lorem ispum dolor sit amet, consectetur adipisciping elit. Lorem ipsum dolor. Tenetur, quae">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body>
  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="/">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">menu1<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">menu2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">menu3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">menu4</a>
          </li>
        </ul>
      </div>
    </nav>

  </header>

  <div class="container">
    <div class="jumbotron">
      <h1>coucou c'est nous</h1>
    </div>
  </div> <!-- /container -->

  <section>
    <div class="container">
      <?php if (have_posts()):  ?>
      
        <?php while(have_posts()): the_post(); ?>
          <div class="row md-dw-30">
            <div class="col-2">
              <?php the_post_thumbnail("thumbnail"); ?>
            </div>
            <div class="col-10">
              <h1><?php the_title();?></h1>
              <?php the_excerpt(); ?>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit accusamus corporis laborum quae, laboriosam deserunt aperiam autem sit voluptate delectus, placeat soluta, hic ut nobis a mollitia voluptatibus? Cumque, harum.</p>
            </div>
          </div> <!-- /row md-dw-30 -->
        <?php endwhile; ?>
      
      <?php else: ?>
          <div class="row">
            <div class="col-12">
              <p>y a pas de résultats</p>
            </div>
          </div> <!-- /row -->
      <?php endif; ?>
    </div> <!-- /container -->
  </section>

  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, veritatis magnam! Voluptate neque a aut doloremque obcaecati? Velit, accusamus cumque! Nulla ad nesciunt assumenda maiores nisi, amet quia ab nobis.</p>
  <?php wp_footer() ?>
</body>
</html>