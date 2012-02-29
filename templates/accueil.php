<?php include('header.php'); ?>

<h1>Bienvenue sur Zelda Solarus</h1>

<div class="main_content">

  <!-- Message de bienvenue et explicatif du site -->
  <div class="edito forme">
    <p>Texte descriptif du site. <strong>Lorem ipsum dolor sit amet</strong>, consectetur <em>adipiscing elit</em>. Praesent consectetur <a href="">lorem quis urna auctor id</a> suscipit velit vulputate. Ut pharetra mollis ante, nec lacinia lacus pretium vitae. Aliquam erat volutpat.</p>
  </div>

  <div class="promo">
    <h2>Nos jeux</h2>

    <!-- Espace promotionnel des projets du site -->
    <div class="ipromo">

      <!-- Element d'un projet -->
      <div class="projet">
        <h3>
          <a href="#">
            <span class="image"><img src="www_images/projet_zsdx.jpg" alt="" width="304" height="120" /></span>
            <span class="titre">Zelda : Mystery of Solarus DX</span>
          </a>
        </h3>
        <div class="description forme">
          <p>Description du projet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent consectetur lorem quis urna auctor id suscipit velit vulputate.</p>
        </div>
        <div class="plus">
          <a href="#">En savoir plus</a>
        </div>
      </div>

      <div class="projet">
        <h3>
          <a href="#">
            <span class="image"><img src="www_images/projet_zsxd.jpg" alt="" width="304" height="120" /></span>
            <span class="titre">Zelda : Mystery of Solarus XD</span>
          </a>
        </h3>
        <div class="description forme">
          <p>Description du projet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent consectetur lorem quis urna auctor id suscipit velit vulputate.</p>
        </div>
        <div class="plus">
          <a href="#">En savoir plus</a>
        </div>
      </div>

      <div class="projet">
        <h3>
          <a href="#">
            <span class="image"><img src="www_images/projet_mercuris.jpg" alt="" width="304" height="120" /></span>
            <span class="titre">Zelda : Mercuris' Chest</span>
          </a>
        </h3>
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
    <div class="news_liste">

      <h2 class="no-margin">Actualité</h2>

      <article>
        <div class="actu">
          <div class="image">
            <img src="www_images/news_image.jpg" alt="Illustration de Une News" width="160" heigt="120" />
          </div>
          <h3 class="forme"><a href="article_detail.php">Une news</a></h3>
          <p class="infos">Le Mercredi 29 Février 2012 à 21:07 par Christopho</p>
          <div class="forme">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          <div class="clear"></div>
          <div class="comment"><a href="#">8 commentaires</a></div>
        </div>
      </article>

      <article>
        <div class="actu">
          <div class="image">
            <img src="www_images/news_image.jpg" alt="Illustration de Une News" width="160" heigt="120" />
          </div>
          <h3 class="forme"><a href="article_detail.php">Une news</a></h3>
          <p class="infos">Le Mercredi 29 Février 2012 à 21:07 par Jean-Pierre Brard</p>
          <div class="forme">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut lacus a est pretium congue nec scelerisque turpis. Aenean ac enim vitae dolor sagittis facilisis et ac odio. Fusce quam dui, volutpat et vulputate ut, iaculis eu metus. Donec vitae nunc quis tortor convallis ultricies. Proin imperdiet mattis nisl, malesuada sagittis urna fringilla sed. Nunc rutrum condimentum nunc, ac porta est cursus ac. Nullam mi eros, porta quis tristique vel, imperdiet et turpis.</p>
          </div>
          <div class="clear"></div>
          <div class="comment"><a href="#">Poster un commentaire</a></div>
        </div>
      </article>

      <article>
        <div class="actu">
          <div class="image">
            <img src="www_images/news_image.jpg" alt="Illustration de Une News" width="160" heigt="120" />
          </div>
          <h3 class="forme"><a href="article_detail.php">Une news</a></h3>
          <p class="infos">Le Mercredi 29 Février 2012 à 21:07 par Binbin</p>
          <div class="forme">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut lacus a est pretium congue nec scelerisque turpis. Aenean ac enim vitae dolor sagittis facilisis et ac odio. Fusce quam dui, volutpat et vulputate ut, iaculis eu metus. Donec vitae nunc quis tortor convallis ultricies. Proin imperdiet mattis nisl, malesuada sagittis urna fringilla sed. Nunc rutrum condimentum nunc, ac porta est cursus ac. Nullam mi eros, porta quis tristique vel, imperdiet et turpis.</p>
          </div>
          <div class="clear"></div>
          <div class="comment"><a href="#">1 commentaire</a></div>
        </div>
      </article>

      <div class="plus"><a href="">Voir toutes les news</a></div>
      
    </div>
    
    

  </div>

  <!-- Bloc droite 1/3 float right -->
  <div class="bloc_droite_1_3">

    <!-- Side bar -->
    <aside>
      <div class="sidebar">
        <?php include('widget/archives.php'); ?>
        <?php include('widget/liste_jeux.php'); ?>
      </div>
    </aside>

  </div>

  <!-- Clear suite aux deux blocs en float -->
  <div class="clear"></div>

</div>

<?php include('footer.php'); ?>