<?php include('header.php'); ?>

<h1>Page de contenu générique (sans sidebar)</h1>

<div class="main_content">

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

</div>

<?php include('footer.php'); ?>