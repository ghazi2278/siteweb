<?PHP
include "../controller/AbonementC.php";
require_once "../config.php";

   $AbonementC = new AbonementC($activite);

if(isset($_POST['submit'])) {

  if(isset($_POST['type'], $_POST['dure'], $_POST['nom'], $_POST['Email'], $_POST['MotDePasse'], $_POST['TypeDeCarte'], $_POST['NumeroDeCarte'], $_POST['DateDExpiration'])){
    if($_POST['nom']!="" && $_POST['Email'] !=""&& $_POST['MotDePasse'] !=""&& $_POST['TypeDeCarte'] !=""&& $_POST['NumeroDeCarte'] !=""&& $_POST['DateDExpiration'] !=""){

      $activite = $_POST['type'];
      $activite = $_POST['dure'];
      $activite = $_POST['nom'];
      $activite = $_POST['Email'];
      $activite = $_POST['MotDePasse'];
      $activite = $_POST['TypeDeCarte'];
      $activite = $_POST['NumeroDeCarte'];
      $activite = $_POST['DateDExpiration'];

      $insertion= $AbonementC->ajouterAbs($activite);

      if($insertion){
        $msgSuccess = "Informations enregistres avec succes";
      }
      else {
        $msgRrror = "ERRROR";
      }
    }
      
    
  }
}
?>

<div>
<?php
if(isset($msgError)){echo $msgError;}else if (isset($msgSucces)){
  echo $msgSucces;
}
?>
</div>