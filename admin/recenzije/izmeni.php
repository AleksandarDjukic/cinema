<?php 

if(!require_once('../konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }


if (isset($_POST['izmeni']) )
{

   if(isset($_POST['naslov']) && !empty($_POST['autor']) && isset($_POST['sadrzaj']) && !empty($_POST['slika']))
   {
      $id      = $_POST['id'];
      $naslov  = $_POST['naslov'];
      $autor   = $_POST['autor'];
      $sadrzaj = $_POST['sadrzaj'];
      $slika   = $_POST['slika'];
   }

}
   $prepare = $conn->prepare("UPDATE recenzije SET naslov = ?, autor = ?, sadrzaj = ?, slika = ? WHERE id = ?");
   $prepare->bind_param("ssssi",  $naslov, $autor, $sadrzaj, $slika, $id );
   $prepare->execute();
   if(!$prepare->error)
   {	
       header("Refresh:0; url=../recenzije.php?msg=updated");
   }
   else
   {
       header("Refresh:0; url=../recenzije.php?msg=error");
   }



?>