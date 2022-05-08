function validateform(){ 
    let ime = document.getElementById('ime').value;  
    let prezime = document.getElementById('prezime').value;  
    let brojTelefona = document.getElementById('brojTelefona').value;  
    let uslovi = document.getElementById('uslovi');  

    if (brojTelefona == "" || ime=="" || prezime==""){  
        alert("Molim vas popunite sva polja");  
        return false;  
    }
    if (brojTelefona.length < 6 || brojTelefona.length > 12) {
        alert("Molim vas unesite ispravan broj telefona");  
        return false;  
    }
    if (uslovi.checked !== true) {
        alert("Niste prihvatili uslove bioskopa");  
        return false;  
    }
}  