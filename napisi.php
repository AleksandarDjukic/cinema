<?php 

if(!require_once('admin/konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }

require 'template/head.php';   
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'error') {
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
	<?php require 'template/slajder.php'?>

	<div class="container">
		<div class="price">
		<h2>Napiši svoju recenziju</h2>

		<div class="prica">
			<form method="post" action="dodajPricu.php">
				<label for="naslov_price">Naslov filma</label>
				<input autocomplete="off" class="p-input" type="text" name="naslov_price">
				<label for="autor">Autor</label>
				<input autocomplete="off" class="p-input" type="text" name="autor">
				<label for="slika">Slika (link)</label>
				<input autocomplete="off" class="p-input" type="text" name="slika">
				<label for="sadrzaj">Sadržaj</label>
				<textarea class="p-input p-textarea" name="sadrzaj"></textarea>
				<input value="Pošalji" type="submit" name="dodaj_pricu" class="prica-dugme">

			</form>
		</div>
		
	</div>
	<a href="price.php">
		<div class="sve-price">
			Pogledaj sve priče
		</div>
	</a>
	</div>

	<?php require 'template/footer.php';?>

</section>
</body>
</html>