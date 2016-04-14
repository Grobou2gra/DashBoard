function heureCheckJS()
    {
        horaire = new Date;

        heure = horaire.getHours();
        min = horaire.getMinutes();
        sec = horaire.getSeconds();
        if (sec < 10)
            sec0 = "0";
        else
            sec0 = "";
        if (min < 10)
            min0 = "0";
        else
            min0 = "";
        if (heure < 10)
            heure0 = "0";
        else
            heure0 = "";
        DinaHeure = heure0 + heure + ":" + min0 + min ;

        if (document.getElementById){
            document.getElementById("js_heure").innerHTML=DinaHeure;
        }
        setTimeout("heureCheckJS()", 1000)

    }

function jourCheckJS()
    {
        horaire2 = new Date;

        tab_mois = new Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
        tab_jour = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

        mois = horaire2.getMonth();
        jourM = horaire2.getDate();
        jourS = horaire2.getDay();

        DinaJour = tab_jour[jourS]+" "+ jourM+" "+ tab_mois[mois] ;

        if (document.getElementById){
            document.getElementById("js_date").innerHTML=DinaJour;
        }
        setTimeout("jourCheckJS()", 3600000)

    }

function horaires() 
    {
        heureCheckJS();
        jourCheckJS();
    }

window.onload = horaires;


