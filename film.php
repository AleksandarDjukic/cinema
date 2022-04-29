<?php
require 'admin/konekcija.php';
require 'template/head.php';

if (isset($_GET['msg'])) {
	if($_GET['msg'] == 'success'){
		echo '<script>alert("Uspješna rezervacija !")</script>';
	}
	else{
		echo '<script>alert("Niste prihvatili uslove agencije !")</script>';
	}
}

if (empty($_GET['page'])) {
	$ponuda = false;
}
else{

	$id = $_GET['page'];
	$id = intval($id);
	$sql = 'SELECT * FROM ponuda WHERE id = '.$id;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
 

?>
<body>
	<nav>
		<label class="logo">Cinema</label>
		<ul>
			<li><a class="aktivno" href="index.php">Pocetna</a></li>
			<li><a href="ponuda.php">Ponuda</a></li>
			<li><a href="recenzije.php">Recenzije</a></li>
			<li><a href="contact.php">Kontakt</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>


<section id="sve" >
	<div class="container-fluid text-center">    
	  <div class="row content">
	    <div class="col-sm-8 "> 
	    	<div class="detalji">
				<div class="galerija">
					<img src="<?php echo htmlspecialchars($row['slika']); ?>" class="l-slika">			
				</div>
			</div>
	    </div>
	    <div class="col-sm-4 sidenav">
			<div class="side">
				<h2 class="l-naslov"><?php echo htmlspecialchars($row["naslov"]);?></h2>
		        <hr>
				<p>Cena: <?php echo htmlspecialchars($row["cena"]);?> € </p>
				<hr>
				<p><?php echo htmlspecialchars($row["opis"]);?></p>
				<hr>
				<button id="rez" class="side-dugme">Rezerviši</button>
			</div>
	    </div>
	  </div>
	</div>
	<?php
		require 'template/footer.php'
	?>
</section>

<?php require 'template/modal.php'; ?>

<script type="text/javascript" src="javascript/modal.js"></script>
</body>
</html>

<?php
 }
}
}
?>






