<?php 

if(!require_once('admin/konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }


if (isset($_POST['modal']) )
{

   if(isset($_POST['ime']) && !empty($_POST['prezime']) && isset($_POST['broj']) )
   {
      $ime         = $_POST['ime'];
      $prezime     = $_POST['prezime'];
      $uslovi      = $_POST['uslovi'];
      $broj        = $_POST['broj'];
      $telefon     = $_POST['telefon'];
      $id_filma    = $_POST['id'];

   }

}
   if ($uslovi) {
      $url = 'http://localhost/cinema/film.php?page='.$_POST['id'].'&msg=success';
   }
   else{
      $url = 'http://localhost/cinema/film.php?page='.$_POST['id'].'&msg=error';
   }
   $prepare = $conn->prepare("INSERT INTO rezervacije (ime, prezime, broj_telefona, broj_osoba, id_filma) VALUES ( ? , ? , ? , ?, ? )");
   $prepare->bind_param("sssii",  $ime, $prezime, $telefon, $broj, $id_filma );
 
   $prepare->execute();
   if(!$prepare->error)
   {  

       header("Refresh:0; url=$url");
   }
   else
   {
       echo "Nismo uspjeli";
   }



?>