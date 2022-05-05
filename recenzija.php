<?php
require 'admin/konekcija.php';
require 'template/head.php';


if (empty($_GET['recenzija'])) {
	$recenzija = false;
	echo "aaa";
}
else{

	$id = $_GET['recenzija'];
	$id = intval($id);
	$sql = 'SELECT * FROM recenzije WHERE id = '.$id;
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
	
	<div class="container">
		
	</div>
	<div class="recenzije">
		<h2>Recenzija</h2>

		<div class="recenzija">
			<h3>Autor: <?php echo htmlspecialchars($row['autor']);?></h3>

			<div class="recenzija-naslov">
				<h4 class="n-centar"><?php echo htmlspecialchars($row['naslov']);?></h4>
			</div>
			<img src="<?php echo htmlspecialchars($row['slika']);?>" class="recenzija-slika">
			<p class="recenzija-text">
				<?php echo htmlspecialchars($row["sadrzaj"]);?>
			</p>
			</div>

		</div>
		
	</div>






	
	<?php
		require 'template/footer.php'
	?>
</section>

</body>
</html>

<?php
 }
}
}
?>






