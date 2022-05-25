<?php include "header.php"; ?>

<form action="/enregistrer_produit" method="post"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NOM DU PRODUIT</label>
    <input type="text" name="produit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">DESCRIPTION</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PRIX</label>
    <input type="number" name="prix" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <button type="submit" class="btn btn-primary">Ajouter produits</button>
</form>



<?php include "footer.php"; ?>