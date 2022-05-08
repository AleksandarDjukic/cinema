<?php 

if(!require_once('admin/konekcija.php'))
   {
       die("Učitavanje filea za konekciju nije uspjelo");
   }
require 'template/head.php'; 
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'succes') {
        echo '<script>alert("Uspješno dodata recenzija !");</script>';
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
			<li><a href="index.php">Pocetna</a></li>
			<li><a href="ponuda.php">Ponuda</a></li>
			<li><a class="aktivno" href="recenzije.php">Recenzije</a></li>
			<li><a href="oNama.php">O nama</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>
	<section id="sve">
		<div class="container">
			<h2 class="recenzije-naslov">Recenzije filmova</h2>
			<?php $result = mysqli_query($conn,"SELECT * FROM recenzije");?>
			<div class="recenzija">
				<?php while($row = mysqli_fetch_array($result)) {?>
					<div class="col-sm-4">
							<a href="recenzija.php?recenzija=<?php echo$row['id']?>"class="i-link">
								<div class="thumbnail visina-520">
									<img src="<?php echo htmlspecialchars($row['slika']);?>"  class="i-slika">
									<p class="istaknuto-tekst"><?php echo htmlspecialchars($row['naslov']);?></p>
									<p class="istaknuto-tekst">
										<?php 
											$sadrzaj = $row["sadrzaj"];
											$sadrzaj = substr($sadrzaj,0,200); 
											echo htmlspecialchars($sadrzaj).'...';
										?>
									</p>
									<button class="btn" data-toggle="modal" data-target="#myModal">Pogledaj</button>
								</div>
							</a>
						</div>
					<?php }?>
			</div>
		</div>
		<div class="recenzije-link">
			<a href="napisi.php">
				<div class="sve-recenzije">
					Napiši svoju recenziju
				</div>
			</a>
		</div>
		<?php require 'template/footer.php';?>
	</section>
</body>
</html>