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
			<li><a href="oNama.php">O nama</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>
	<section id="sve">
		<?php require 'template/slajder.php'?>
		<div class="container">
			<div class="recenzije">
				<h2>Napiši svoju recenziju</h2>
				<div class="recenzija">
					<form method="post" action="dodajRecenziju.php">
						<label for="naslov">Naslov filma</label>
						<input autocomplete="off" class="p-input" type="text" name="naslov">
						<label for="autor">Autor</label>
						<input autocomplete="off" class="p-input" type="text" name="autor">
						<label for="slika">Slika (link)</label>
						<input autocomplete="off" class="p-input" type="text" name="slika">
						<label for="sadrzaj">Sadržaj</label>
						<textarea class="p-input p-textarea" name="sadrzaj"></textarea>
						<input value="Pošalji" type="submit" name="dodaj_pricu" class="recenzija-dugme">
					</form>
				</div>
			</div>
			<a href="recenzije.php">
				<div class="sve-recenzije">
					Pogledaj sve recenzije
				</div>
			</a>
		</div>
	<?php require 'template/footer.php';?>
	</section>
</body>
</html>