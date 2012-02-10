<?php include('header.php'); ?>

<h1>Titre de l'article</h1>

<div class="main_content">

  <div class="bloc_gauche_2_3">

    <div class="article_info">
      <ul>
        <li>Auteur : <strong>Christopho</strong></li>
        <li>Posté le : <strong>16/01/2012 à 18:15</strong></li>
        <li>Thèmes :
          <ul>
            <li><a href="">mot</a></li>
            <li><a href="">mot</a></li>
            <li><a href="">mot</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="article_contenu">
      <p>Contenu de l'article</p>

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

      <table>
        <tr>
          <th>En-tête</th>
          <th>En-tête</th>
          <th>En-tête</th>
          <th>En-tête</th>
        </tr>
        <tr>
          <td>Cellule</td>
          <td>Cellule</td>
          <td>Cellule</td>
          <td>Cellule</td>
        </tr>
        <tr>
          <td>Cellule</td>
          <td>Cellule</td>
          <td>Cellule</td>
          <td>Cellule</td>
        </tr>
      </table>

    </div>

    <div class="article_mots_cles">
      <ul>
        <li><a href="">mot</a></li>
        <li><a href="">mot</a></li>
        <li><a href="">mot</a></li>
        <li><a href="">mot</a></li>
        <li><a href="">mot</a></li>
        <li><a href="">mot</a></li>
      </ul>
    </div>

    <div class="article_commentaires">
      <ol>
        <li>
          <div class="commentaire_info">
            Posté par Auteur le 17/01/2012 à 18:15
          </div>
          <div class="commentaire_contenu">
            <p>Contenu du commentaire</p>
          </div>
        </li>
      </ol>
    </div>

    <div class="article_poster_commentaire">
      <form method="post" action="">
        <fieldset>
          <legend class="hide">Laisser un commentaire</legend>


          <input type="submit" value="Envoyer" />
        </fieldset>
      </form>
    </div>

  </div>

  <!-- Sidebar -->
  <div class="bloc_droite_1_3">

  </div>

  <!-- Clear suite aux blocs en float -->
  <div class="clear"></div>

</div>

<?php include('footer.php'); ?>