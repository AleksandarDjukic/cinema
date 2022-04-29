<?php 

if(!require_once('admin/konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }

require 'template/head.php'; 
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'succes') {
        echo '<script>alert("Uspješno dodata priča !");</script>';
    }
    elseif ($_GET['msg'] == 'error') {
        echo '<script>alert("Došlo je do greške");</script>';
    }
}  
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
<section id="sve">

	<div class="container">
		
	</div>
	<div class="price">
		<h2>Recenzije filmova</h2>
		<?php
		$result = mysqli_query($conn,"SELECT * FROM recenzije");
		?>

		<div class="prica">
			<?php while($row = mysqli_fetch_array($result)) {?>
			<div class="prica-naslov">
				<h4 class="n-centar"><?php echo htmlspecialchars($row['naslov']);?></h4>
			</div>
			<img src="<?php echo htmlspecialchars($row['slika']);?>" class="prica-slika">
			<p class="prica-text">
				<?php 
				$sadrzaj = $row["sadrzaj"];
				$sadrzaj = substr($sadrzaj,0,200); 
				echo htmlspecialchars($sadrzaj).'...';?>	
			</p>
			<div class="nastavi">
				<?php echo '<a href='.'recenzija.php?recenzija='.htmlspecialchars($row['id']).'>';?>
			Nastavi sa čitanjem</a>
			</div>
		<?php }?>
		</div>
	</div>
</div>
<a href="napisi.php">
		<div class="sve-price">
			Napiši svoju priču
		</div>
	</a>
	<?php require 'template/footer.php';?>
</section>
</body>
</html>