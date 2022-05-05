<?php
session_start();


if (!isset($_SESSION['login'])){
    echo "Nemate pristup ovoj stranici !";
}
else{
    require 'konekcija.php';
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == 'prijava') {
            echo '<script>alert("Uspješno prijavljen");</script>';
        }
        elseif ($_GET['msg'] == 'success') {
            echo '<script>alert("Uspješno izvršeno");</script>';
        }
        else{
            echo '<script>alert("Došlo je do greške");</script>';
        }
    }
    ?>
<html>
<head>
   <title>ADMIN</title>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="style-admin.css">
</head>
<body>
    <form class="odjava-btn" action="login/odjava.php" method="post">
        <input type="submit" name="odjava" value="Odjavi se" class="btn btn-danger odjava">
    </form>
    <div class="admin-header">
        <a href="rezervisani.php"><div class="nav-admin">Upravljaj rezervacijama</div></a>
        <a href="recenzije.php"><div class="nav-admin right">Upravljaj recenzijama</div></a>
    </div>

   <!----------------------------------------------------------SELECT-------------------------------------------------------->
   <div class="sticky">
    <?php 
    $result = mysqli_query($conn,"SELECT * FROM ponuda");
      echo "<table border='1' class='tabela'>
      <tr>
        <th>ID</th>
        <th>Naslov</th>
        <th>Cena</th>
        <th>Opis</th>
        
      </tr>";
    while($row = mysqli_fetch_array($result))
    {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['naslov'] . "</td>";
      echo "<td>" . $row['cena'] . "</td>";
        $opis = $row["opis"];
        $opis = substr($opis,0,35); 
      echo "<td>" . $opis. "</td>";
      
      echo "</tr>";
    }
    echo "</table>";
    ?>
  </div>
    <div class="tabovi">
  <button class="tab d-tab" id="dodaj">Dodaj</button>
  <button class="tab i-tab" id="izmjeni">Izmjeni</button>
  <button class="tab o-tab" id="obrisi">Obrisi</button>
</div>
    <hr>
  <div class="col-lg-4 l-dodaj" style="margin: 0 auto;margin-top: 50px">
       <form method="POST" action="./ponuda/dodaj.php" style="width: 100%">
           <div class="form-group">
                <h2>Dodaj novi film u ponudu</h2>
                <label for="">Naslov:</label>
                <input autocomplete="off" type="text" class="form-control" name="naslov_filma" id="">
           </div>
           <div class="form-group">
               <label for="">Cena</label>
               <input autocomplete="off" type="text" class="form-control" name="cena" id="">
           </div>
           <div class="form-group">
               <label for="">Opis</label><br>
               <textarea name="opis" class="form-control" style="width:100%; height: 150px;"></textarea>
           </div>
           <div class="form-group">
               <label for="">Slika</label>
               <input autocomplete="off" type="text" class="form-control" name="slika" id="">
           </div>
           <button type="submit" name="dodaj" class="btn btn-primary">Dodaj</button>
       </form>
       </div>
       <!--------------------------------------UPDATE-------------------------------->

    <div class="col-lg-4 l-izmjeni" style="margin: 0 auto;margin-top: 50px">
       <form method="POST" action="ponuda/izmeni.php" style="width: 100%">
        <h2>Izmeni podatke o filmovima</h2>
        <h6>Izaberi film koje želiš da izmjeniš</h6>
        <select class="form-control"  name="id" id="id">
          <?php 
                $update = mysqli_query($conn,"SELECT * FROM ponuda");
                while($row = mysqli_fetch_array($update))
                {
                echo "<option value='". $row['id'] ."'>".$row['id'].' '.$row['naslov']."</option>";
                }
          ?>
        </select>
        <div class="form-group">
                <label for="">Naslov:</label>
                <input autocomplete="off" type="text" class="form-control" name="naslov" id="">
           </div>
           <div class="form-group">
               <label for="">Cena</label>
               <input autocomplete="off" type="text" class="form-control" name="cena" id="">
           </div>
           <div class="form-group">
               <label for="">Opis</label><br>
               <textarea name="opis" class="form-control" style="width:100%; height: 150px;"></textarea>
           </div>
           <div class="form-group">
               <label for="">Slika </label>
               <input autocomplete="off" type="text" class="form-control" name="slika" id="">
           </div>        
        <button type="submit" name="izmeni" class="btn btn-warning">Izmeni</button>
    </div>
    </form>
  </div>

    <!----------------------------DELETE-------------------------------->
    <div class="col-lg-4 l-obrisi" style="margin: 0 auto;margin-top: 50px">
    <form method="post" action="ponuda/obrisi.php" style="width: 100%">
    <div class="delete">
        <h2>Obriši film iz ponude</h2>
        <h6>Izaberi film koju želiš da obrišeš</h6>
        <select class="form-control"  name="id" id="id">
          <?php 
                $result = mysqli_query($conn,"SELECT * FROM ponuda");
                while($row = mysqli_fetch_array($result))
                {
                echo "<option value='".$row['id']."'>".$row['id']." ". $row['naslov']." ".$row["cena"] ."€</option>";
                }
          ?>
        </select>
        <button type="submit" name="deleteSubmit" class="btn btn-danger rez-dugme">Izbriši</button>
    </div>
  </form>
</div>
<script type="text/javascript" src='./admin.js'></script>

</body>
</html>
<?php
}
?>
