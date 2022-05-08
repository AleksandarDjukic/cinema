function openCity(evt, cityName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    if (cityName === "sve") {
        test = document.getElementsByClassName("tabcontent");
        for (i = 0; i < test.length; i++) {
            test[i].style.display = "block";
          }
    } else {
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
  }