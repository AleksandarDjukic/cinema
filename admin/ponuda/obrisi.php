
<?php
if(!require_once('../konekcija.php'))
   {
       die("Učitavanje file-a za konekciju nije uspjelo");
   }
if (isset($_POST['deleteSubmit']) )
{
   if(isset($_POST['id']))
   {    
      $id = $_POST['id'];  
      $prepare = $conn->prepare("DELETE FROM ponuda WHERE id = ?");
      $prepare->bind_param("i", $id);
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
  else echo "aaa";
}
