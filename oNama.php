<?php 
require 'template/head.php';   
?>
<nav>
	<label class="logo">Cinema</label>
	<ul>
		<li><a href="index.php">Pocetna</a></li>
		<li><a href="ponuda.php">Ponuda</a></li>
		<li><a href="recenzije.php">Recenzije</a></li>
		<li><a class="aktivno" href="oNama.php">O nama</a></li>
	</ul>
	<label id="icon">
		<i class="fa fa-bars"></i>
	</label>
</nav>
<div class="kategorije">
	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'beograd')">Beograd</button>
	  <button class="tablinks" onclick="openCity(event, 'novisad')">Novi Sad</button>
	  <button class="tablinks" onclick="openCity(event, 'nis')">Niš</button>
	  <button class="tablinks" onclick="openCity(event, 'sve')">Sve</button>
	</div>
	<div class="container">
		<div class="row">
			<div id="beograd" class="tabcontent col-sm-8">
				<div class="bioskop  col-sm-6">
					<h3>Beograd 1</h3>
					<img src="img/about/bg1.jpg"/>
					<p>Svetog Save 1</p>
				</div>
				<div class="bioskop col-sm-6">
					<h3>Beograd 2</h3>
					<img src="img/about/bg2.jpg"/>
					<p>Cara Lazara 5</p>
				</div>
			</div>
			<div id="novisad" class="tabcontent  col-sm-4">
				<div class="bioskop">
					<h3>Novi Sad</h3>
					<img src="img/about/ns.jpg"/>
					<p>Bulevar Oslobođenja 32</p>
				</div>
			</div>
			<div id="nis" class="tabcontent col-sm-4">
				<div class="bioskop">
					<h3>Niš</h3>
					<img src="img/about/nis.jpg"/>
					<p>Nikole Tesle 7</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tamno">
		<h1 class="a-naslov">Priča o nama</h1>
		<h1 class="a-malinaslov">Zašto smo najbolji izbor ?</h1>
	</div>
	<div class="about">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Pellentesque in placerat nisi, quis suscipit felis. Nulla facilisi. Curabitur suscipit, nibh vitae convallis hendrerit, libero est ornare massa, vel ultrices orci nulla sed purus. Ut sit amet justo finibus, gravida augue in, tincidunt nunc. Proin porta consectetur arcu eu sagittis. Nullam finibus luctus accumsan. Pellentesque nisl sem, feugiat quis augue a, eleifend euismod dolor. Duis maximus nibh felis, lacinia sagittis nunc malesuada a. Integer viverra vitae turpis id semper. Nullam in condimentum ligula. Etiam condimentum finibus dignissim. Nunc laoreet eros eu venenatis hendrerit. Aliquam felis ipsum, porttitor in lorem id, tristique blandit tortor. Fusce aliquam euismod tortor, ut accumsan dolor accumsan a. Donec ac enim eu magna tempor bibendum non ut ipsum. Duis mauris neque, aliquam quis sollicitudin ac, semper porttitor ligula. Sed quis arcu id nibh venenatis blandit. Quisque orci lectus, ullamcorper rutrum facilisis sit amet, posuere molestie leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dignissim odio vel ex mattis, ut fermentum magna sodales. Suspendisse dictum efficitur nisl, vitae vehicula eros accumsan vel. Ut vehicula, nibh sit amet mattis auctor, mi eros sagittis lacus, sit amet porttitor orci orci nec est. Sed ultricies ex nisl, id consequat lacus semper sit amet. Fusce commodo augue magna, id scelerisque libero tempus sed. Praesent risus dui, finibus id sem ut, placerat laoreet sapien. Donec non nisl neque. Praesent mollis tincidunt orci eget rhoncus.</p>
	</div>
	<div class="partneri ">
		<img src="img/about/lasta.jpg" class="partneri-slika">
		<img src="img/about/airsrbija.jpg" class="partneri-slika">
		<img src="img/about/ta.png" class="partneri-slika">
		<img src="img/about/fe.jpg" class="partneri-slika">
		<img src="img/about/unicef.jpeg" class="partneri-slika">
	</div>
<?php require 'template/footer.php'; ?>
</div>
<script src="./javascript/kategorije.js"></script>
</body>
</html>