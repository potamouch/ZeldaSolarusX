<?php include('header.php'); ?>

<div class="title_block">
  <div class="title_minibox">
    <!-- Date de l'article -->
    <span class="date_jour">23</span>
    <span class="date_mois">janv 2011</span>
  </div>
  <div class="title_info">
    <h1>Titre de l'article</h1>
    <div class="article_info">
      <ul>
        <li><span class="icon_author"><span>Auteur :</span></span> <strong><a href="">Christopho</a></strong></li>
        <li><span class="icon_hour"><span>Posté à :</span></span> <strong>18:15</strong></li>
        <li><span class="icon_themes"><span>Thèmes :</span></span>
          <ul class="themes">
            <li><a href="">Rumeur</a></li>
            <li><a href="">Programmation</a></li>
            <li><a href="">Actualité Zelda</a></li>
          </ul>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>

<div class="main_content">

  <div class="bloc_gauche_2_3">

    <!-- La classe "forme" permet de mettre en forme n'importe quel texte du site : les liens, le texte en gras etc... -->
    <div class="article_contenu forme">
      <h2>Texte</h2>

      <p>Paragraphe d'un article avec <a href="">un lien</a>, du texte <strong>important</strong> et du texte <em>légèrement moins important</em>.</p>

      <p>Praesent iaculis ullamcorper lorem eget porttitor. Quisque hendrerit metus a urna faucibus in hendrerit felis feugiat. Duis quam eros, cursus non rutrum eu, tristique eget risus. Morbi lectus turpis, lobortis id volutpat sed, commodo id nibh. Donec in libero nulla. Maecenas egestas neque metus, ut vulputate purus. Quisque imperdiet enim et orci luctus dapibus. Fusce quis augue mi, ut scelerisque ante. Mauris cursus ultricies tortor, in rhoncus lorem tempor ac. Curabitur id erat lacus, vitae fermentum ante. Nullam eu turpis lacus.</p>

      <h2>Listes</h2>

      <h3>Liste non ordonnée</h3>

      <ul>
        <li>Liste élément 1</li>
        <li>Liste élément 2</li>
        <li>Liste élément 3
          <ul>
            <li>Sous élément 1</li>
            <li>Sous élément 2
              <ul>
                <li>Sous sous élément 1</li>
                <li>Sous sous élément 2</li>
                <li>Sous sous élément 3</li>
              </ul>
            </li>
            <li>Sous élément 3</li>
          </ul>
        </li>
      </ul>

      <h3>Liste ordonnée</h3>

      <ol>
        <li>Liste élément 1</li>
        <li>Liste élément 2</li>
        <li>Liste élément 3
          <ol>
            <li>Sous élément 1</li>
            <li>Sous élément 2
              <ol>
                <li>Sous sous élément 1</li>
                <li>Sous sous élément 2</li>
                <li>Sous sous élément 3</li>
              </ol>
            </li>
            <li>Sous élément 3</li>
          </ol>
        </li>
      </ol>

      <h2>Image intégrée à l'article</h2>

      <p>
        <div class="embed_image">
          <a href="">
            <!-- Si Wordpress le permet, il peut être intéressant de proposer la saisie d'un texte
              alternatif à l'image dans le back office pour améliorer l'accessibilité du site -->
            <img src="article_image.jpg" alt="Texte alternatif de l'image" width="400" height="250" />
            <span class="legend">Légende de l'image</span>
          </a>
        </div>
      </p>

      <h2>Tableau de données</h2>

      <!-- Exemple de tableau croisé à deux dimensions, il est possible de faire des tableaux
        plus simples sans en-têtes -->
      <table class="style_orange" summary="Description du tableau">
        <caption>Légende du tableau</caption>
        <thead>
          <tr>
            <th></th>
            <th scope="col">En-tête</th>
            <th scope="col">En-tête</th>
            <th scope="col">En-tête</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">En-tête</td>
            <td>Cellule</td>
            <td>Cellule</td>
            <td>Cellule</td>
          </tr>
          <tr>
            <th scope="row">En-tête</td>
            <td>Cellule</td>
            <td>Cellule</td>
            <td>Cellule</td>
          </tr>
        </tbody>
      </table>

      <h2>Liste de définitions ou d'éléments hierarchisés</h2>

      <dl>
        <dt>Titre</dt>
        <dd>Texte de la définition</dd>
        <dt>Titre</dt>
        <dd>Texte de la définition</dd>
        <dt>Titre</dt>
        <dd>Texte de la définition</dd>
      </dl>

    </div>

    <!-- Mots-clés de l'article -->
    <div class="article_mots_cles">
      <ul>
        <li><a href="">c++</a></li>
        <li><a href="">zelda</a></li>
        <li><a href="">link</a></li>
        <li><a href="">solarus</a></li>
        <li><a href="">dx</a></li>
        <li><a href="">binbin</a></li>
      </ul>
      <div class="clear"></div>
    </div>

  </div>

  <!-- Sidebar -->
  <div class="bloc_droite_1_3">

    <!-- Side bar -->
    <aside>
      <div class="sidebar">
        <?php include('widget/autres_articles.php'); ?>
      </div>
    </aside>

  </div>

  <!-- Clear suite aux blocs en float -->
  <div class="clear"></div>

</div>

<?php include('footer.php'); ?>