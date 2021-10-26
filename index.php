<?php
  
  $checkNom = $bdd->prepare("SELECT * FROM users WHERE pseudo=?");

  $checkNom->execute([$nom]);

  $nom = $checkNom->fetch();

  if ($nom) {
      echo "Ce nom existe déja";
  } else {
    echo "Ce nom n'existe pas";
  }

?>