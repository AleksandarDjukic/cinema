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
			<li><a href="contact.php">Kontakt</a></li>
		</ul>
		<label id="icon">
			<i class="fa fa-bars"></i>
		</label>
	</nav>

<div id="sve" >
	<div class="container-fluid text-center">    
	  <div class="row content">
	    <div class="col-sm-2 sidenav">

	    </div>
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


	    <div class="col-sm-2 sidenav">
	        <img src="img/reklama/kafa.jpg" class="reklama">
	        <img src="https://i1.wp.com/www.biznisinfo.ba/wp-content/uploads/2018/10/Grand-kafa-BnE.jpg?fit=495%2C700&ssl=1" class="reklama">
	    </div>
	  </div>
	</div>



	<div class="footer"> 
		<div class="footer-center">	
				<div class="social">
					<img src="img/social/ig.png" class="social-img">
					<img src="img/social/fb.png" class="social-img">
					<img src="img/social/yt.png" class="social-img">
					<img src="img/social/linkedin.png" class="social-img">
				</div>
				<hr>
				<div class="menu">
					<a href="#" class="f-text">Pocetna</a>
					<a href="#" class="f-text">Ponuda</a>
					<a href="#" class="f-text">O nama</a>
					<a href="#" class="f-text">Kontakt</a>
				</div>
				<hr>
				<div class="news">
					<p>Unesi svoj e-mail ako želiš biti obevješten o novim ponudama.</p>
					<div class="jedan">
						<input type="text" class="news-mail" placeholder="Unesi svoj e-mail">
					</div>
					<div class="dva">
						<input type="submit" class="news-dugme" value="Pošalji">
					</div>

				</div>
		</div>
	</div>
	<div class="footer-donji">
			<p>Copyright@2021 Završni rad </p>
		</div>

</div>
</body>
</html>