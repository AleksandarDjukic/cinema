<div class="bg-modal">
<script type="text/javascript" src="./javascript/validacija.js"></script>
<script type="text/javascript" src="./javascript/ukupanracun.js"></script>

	<div class="modal-sadrzaj">
		<div class="zatvori" id="iks">+</div>
			<form class="modal-forma" onsubmit="return validateform()" method="POST" action="rezervacija.php">
			<input autocomplete="off" class="m-ime" type="text" placeholder="Ime" id="ime" name="ime"><br>
			<input autocomplete="off" class="m-prezime" type="text" placeholder="Prezime" id="prezime" name="prezime">
			<input autocomplete="off" class="m-prezime" type="text" placeholder="Broj telefona" id="brojTelefona" name="telefon">
			<div class="uslovi">
				<p class="t-uslovi">Prihvatam <a href="$">uslove</a> Cinema bioskopa.</p>
				<input class="c-uslovi" value="true" type="checkbox" name="uslovi" id="uslovi" require />
			</div>
			<div class="broj">
				<p class="b-tekst">Broj osoba: </p>
				<select name="broj" class="b-select"  id="brojOsoba" onChange="ukupanRacun(event, <?php echo $row["cena"]; ?>)">
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
				<h2 id="ukupnaCena" >Cena: <?php echo $row["cena"];?>€</h2>
			</div>
		</div>
	</div>
</div>
