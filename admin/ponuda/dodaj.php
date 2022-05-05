<?php 
if(!require_once('../konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }
if (isset($_POST['dodaj']) ){
   if(isset($_POST['naslov_filma']))
   {
      $naslov   = $_POST['naslov_filma'];
      $cena     = $_POST['cena'];
      $opis     = $_POST['opis'];
      $slika    = $_POST['slika'];
      $prepare = $conn->prepare("INSERT INTO ponuda ( naslov, cena, opis, slika ) VALUES ( ? , ? , ? , ? )");
      $prepare->bind_param("siss",  $naslov, $cena ,$opis, $slika );
      $prepare->execute();
      if(!$prepare->error)
      {	
         header("Refresh:0; url=../ponuda.php?msg=success");
      }
      else
      {
         header("Refresh:0; url=../ponuda.php?msg=error");
      }
   }
}
?>