function ukupanRacun(event, cena){
    var brojOsoba = document.getElementById('brojOsoba').value;
    var novaCena = parseInt(brojOsoba) * parseInt(cena);
    document.getElementById('ukupnaCena').innerHTML = `Cena: ${novaCena}€`
}