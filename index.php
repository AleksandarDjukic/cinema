<?php 
	if(!require_once('admin/konekcija.php'))
		{
			die("Učitavanje filea za konekciju nije uspjelo");
		}
	require 'template/head.php';   
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
			<?php 
				require 'template/slajder.php';
				$result = mysqli_query($conn,"SELECT * FROM ponuda LIMIT 3");
			?>
			<div class="container">
				<div class="ist">
					<h2 class="istaknuto">Istaknuto iz ponude</h2>
					<div class="row text-center">
						<?php while($row = mysqli_fetch_array($result)){?>
						<div class="col-sm-4">
							<a href="film.php?page=<?php echo htmlspecialchars($row['id']); ?>" class="i-link">
								<div class="thumbnail">
									<img src="<?php echo htmlspecialchars($row['slika']);?>"  class="i-slika">
									<p class="istaknuto-tekst"><?php echo htmlspecialchars($row['naslov']);?></p>
									<p class="istaknuto-tekst"><?php echo htmlspecialchars($row['cena']).'€';?></p>
									<button class="btn" data-toggle="modal" data-target="#myModal">Pogledaj</button>
								</div>
							</a>
						</div>
						<?php }?>
					</div>
				</div>
				<div class="recenzije">
					<h2>Recenzije filmova</h2>
					<?php $result = mysqli_query($conn,"SELECT * FROM recenzije LIMIT 3");?>
					<div class="row">
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
				<div class="bottom-nav">
					<a href="recenzije.php">
						<div class="sve-recenzije">
							Pogledaj sve recenzije
						</div>
					</a>
					<a href="napisi.php">
						<div class="sve-recenzije">
							Napiši svoju recenziju
						</div>
					</a>
				</div>
			</div>
			<?php require 'template/footer.php';?>
		</section>
	</body>
</html>