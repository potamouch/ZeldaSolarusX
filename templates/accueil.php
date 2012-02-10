<?php include('header.php'); ?>

<h1>Bienvenue sur Zelda Solarus</h1>

<div class="main_content">

  <!-- Message de bienvenue et explicatif du site -->
  <div class="edito">
    <p>Texte descriptif du site. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent consectetur lorem quis urna auctor id suscipit velit vulputate. Ut pharetra mollis ante, nec lacinia lacus pretium vitae. Aliquam erat volutpat.</p>
  </div>

  <div class="promo">
    <h2>Nos jeux</h2>

    <!-- Espace promotionnel des projets du site -->
    <div class="ipromo">

      <!-- Element d'un projet -->
      <div class="projet">
        <div class="image" style="height: 80px; margin-bottom: 0.6em;"></div>
        <h3><a href="#">The Legend of Zelda : Mystery of Solarus DX</a></h3>
        <div class="description forme">
          <p>Description du projet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent consectetur lorem quis urna auctor id suscipit velit vulputate.</p>
        </div>
        <div class="plus">
          <a href="#">En savoir plus</a>
        </div>
      </div>

      <div class="projet">
        <div class="image" style="height: 80px; margin-bottom: 0.6em;"></div>
        <h3><a href="#">The Legend of Zelda : Mystery of Solarus XD</a></h3>
        <div class="description forme">
          <p>Description du projet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent consectetur lorem quis urna auctor id suscipit velit vulputate.</p>
        </div>
        <div class="plus">
          <a href="#">En savoir plus</a>
        </div>
      </div>

      <div class="projet">
        <div class="image" style="height: 80px; margin-bottom: 0.6em;"></div>
        <h3><a href="#">The Legend of Zelda : Mercuris' Chest</a></h3>
        <div class="description forme">
          <p>Description du projet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent consectetur lorem quis urna auctor id suscipit velit vulputate.</p>
        </div>
        <div class="plus">
          <a href="#">En savoir plus</a>
        </div>
      </div>

      <div class="clear"></div>
    </div>
  </div>

  <!-- Bloc gauche 2/3 float left -->
  <div class="bloc_gauche_2_3">

    <!-- Liste des actus sur la home -->
    <div class="news">

      <h2>Actualité</h2>

      <article>
        <h3><a href="article_detail.php">Une news</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut lacus a est pretium congue nec scelerisque turpis. Aenean ac enim vitae dolor sagittis facilisis et ac odio. Fusce quam dui, volutpat et vulputate ut, iaculis eu metus. Donec vitae nunc quis tortor convallis ultricies. Proin imperdiet mattis nisl, malesuada sagittis urna fringilla sed. Nunc rutrum condimentum nunc, ac porta est cursus ac. Nullam mi eros, porta quis tristique vel, imperdiet et turpis.</p>
      </article>

      <article>
        <h3><a href="article_detail.php">Une news</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut lacus a est pretium congue nec scelerisque turpis. Aenean ac enim vitae dolor sagittis facilisis et ac odio. Fusce quam dui, volutpat et vulputate ut, iaculis eu metus. Donec vitae nunc quis tortor convallis ultricies. Proin imperdiet mattis nisl, malesuada sagittis urna fringilla sed. Nunc rutrum condimentum nunc, ac porta est cursus ac. Nullam mi eros, porta quis tristique vel, imperdiet et turpis.</p>
      </article>

      <article>
        <h3><a href="article_detail.php">Une news</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut lacus a est pretium congue nec scelerisque turpis. Aenean ac enim vitae dolor sagittis facilisis et ac odio. Fusce quam dui, volutpat et vulputate ut, iaculis eu metus. Donec vitae nunc quis tortor convallis ultricies. Proin imperdiet mattis nisl, malesuada sagittis urna fringilla sed. Nunc rutrum condimentum nunc, ac porta est cursus ac. Nullam mi eros, porta quis tristique vel, imperdiet et turpis.</p>
      </article>

    </div>

  </div>

  <!-- Bloc droite 1/3 float right -->
  <div class="bloc_droite_1_3">

    <!-- Side bar -->
    <aside>
      <?php include('widget/une.php'); ?>
      <?php include('widget/archives.php'); ?>
      <?php include('widget/liste_jeux.php'); ?>
    </aside>

  </div>

  <!-- Clear suite aux deux blocs en float -->
  <div class="clear"></div>

</div>

<?php include('footer.php'); ?>