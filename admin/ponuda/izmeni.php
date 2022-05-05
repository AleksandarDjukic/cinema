<?php 

if(!require_once('../konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }


if (isset($_POST['izmeni']) )
{
   if(isset($_POST['naslov']))
   {
      $naslov   = $_POST['naslov'];
      $cena     = $_POST['cena'];
      $opis     = $_POST['opis'];
      $slika    = $_POST['slika'];
      $id       = $_POST['id'];

      $prepare = $conn->prepare("UPDATE ponuda SET naslov = ?, cena = ?, opis = ?, slika = ? WHERE id = ?");
      $prepare->bind_param("sissi",  $naslov, $cena ,$opis, $slika, $id );
    
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