<?php 
	require 'admin/konekcija.php';
	require 'template/head.php';
?>
<body>
	<nav>
		<label class="logo">Cinema</label>
		<ul>
			<li><a href="index.php">Pocetna</a></li>
			<li><a class="aktivno" href="ponuda.php">Ponuda</a></li>
			<li><a href="recenzije.php">Recenzije</a></li>
			<li><a href="oNama.php">O nama</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>
	<div id="sve" >
		<div class="container-fluid text-center">    
		  	<div class="row content">
			    <div class="col-sm-2 sidenav"></div>
	    		<div class="col-sm-8 text-left"> 
					<?php 
					$result = mysqli_query($conn,'SELECT * FROM ponuda');

					while($row = mysqli_fetch_array($result))
					{
					?>
	    			<div class="ponuda">
						<h1 class="ponuda-naslov"><?php echo $row['naslov']?></h1>
						<?php echo '<a href='.'film.php?page='.htmlspecialchars($row['id']).'>';?>
							<img src="<?php echo htmlspecialchars($row['slika']); ?>" class="ponuda-slika">
							<div class="ponuda-text">
								<?php 
								$opis = $row["opis"];
								$opis = substr($opis,0,200);
								echo htmlspecialchars($opis)."...";?>
							</div>
							<div class="cena">
								<?php echo htmlspecialchars($row['cena']).'€';?>
							</div>
	      				</a>
			      	</div>
	    		  	 <?php }?>
				</div>
				<div class="col-sm-2 sidenav"></div>
	  		</div>
		</div>
	</div>
	<?php require 'template/footer.php'; ?>
</body>
</html>