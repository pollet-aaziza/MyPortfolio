<?php
require "../template/header.php";
?>
<div class="container">
  <form action="loginTreatement.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="text" class="form-control" name="admin_name" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Mot de pass</label>
      <input type="password" class="form-control" name="admin_password">
    </div>
    <button type="submit" class="btn" value="valider">Se connecter</button>
  </form>

</div>
<?php
require "../template/footer.php";
?>
