<div class="bg-modal">
	<div class="modal-sadrzaj">
		<div class="zatvori" id="iks">+</div>
		<form class="modal-forma" method="POST" action="rezervacija.php">
			<input autocomplete="off" class="m-ime" type="text" placeholder="Ime" name="ime"><br>
			<input autocomplete="off" class="m-prezime" type="text" placeholder="Prezime" name="prezime">
			<input autocomplete="off" class="m-prezime" type="text" placeholder="Broj telefona" name="telefon">
			<div class="uslovi">
				<p class="t-uslovi">Prihvatam <a href="$">uslove</a> Cinema bioskopa.</p>
				<input class="c-uslovi" type="checkbox" name="uslovi" require />
			</div>
			<div class="broj">
				<p class="b-tekst">Broj osoba: </p>
				<select name="broj" class="b-select">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
			<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
			<input class="rez" type="submit" name="modal" value="Rezerviši">
		</form>
		<div class="modal-desno">
			<div class="m-opis">
				<h3><?php echo $row["naslov"];?></h3>
				<h2>Cena: <?php echo $row["cena"];?>€</h2>
			</div>
		</div>
	</div>
</div>