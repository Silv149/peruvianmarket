<!--
 * * * * * * * * * * * * * * * * * *
 * SILVANA ESQUIVEL - ESIG
 * * * * * * * * * * * * * * * * * *
-->
<?php
  $title="Peruvian Market";
  include('header.php');
  //include ('panier-class.php');

?>
  <br\>
<?php foreach (getProduits("verbose")as $produit):?>
  <div class='produit'>
    <div class='prod'>
      <div class='data'>
        <?= $produit["nom"] ?>
      </div>


      <div class='image'>
        <a href="produit.php?id=<?= $produit['id_produit'] ?>&nom<?= htmlentities($produit['nom']) ?>">
          <img width="50px" height="250px" src="<?= $produit['image'] ?>" alt="<?= $produit['nom'] ?>">
        </a>

        <div class="prix"> <?= number_format($produit['prix_unitaire'],2,',',' ')?> CHF</div>
        <a href="addpanier.php?id=<?= $produit['id_produit']; ?>"</a>
        <a class="add" href="addpanier.php?id=<?= $produit['id_produit']; ?>">
          <input type="image" id="image" alt="Ajout"img width="50px" height="50px" src="images/panier.jpg">
        </a>
      </div>
    </div>
  </div>




<?php endforeach; ?>
<?php include('footer.php');?>
