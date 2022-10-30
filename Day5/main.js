function updateMessage()
{
    var id=document.getElementById("id").value;
    var nom=document.getElementById("nomUpdate").value;
    var email=document.getElementById("emailUpdate").value;
    var contenu=document.getElementById("contenuUpdate").value;

    //alert(id+" "+nom+" "+email+" "+contenu);
    xhr = null;
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            document.getElementById("maDiv").innerHTML = xhr.responseText;
        }
        if ((xhr.readyState == 4) && xhr.status == 404) {
            alert("Fichier introuvale");
        }
    }

    xhr.open('GET', 'miseajour.php?id='+id+'&nom=' + nom + '&email=' + email + '&contenu=' + contenu, true);
    xhr.send(null); 
}
function updateData(id){
    xhr = null;
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            document.getElementById("maDiv").innerHTML = xhr.responseText;
        }
        if ((xhr.readyState == 4) && xhr.status == 404) {
            alert("Fichier introuvale");
        }
    }
    //xhr.open('GET', 'update.php?id=' + id, true);  // connexion
    xhr.open('GET', 'update_ajax.php?id=' + id, true);  // connexion
    xhr.send(null); 
}
function deleteData(val) {
    xhr = null;
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            document.getElementById("maDiv").innerHTML = xhr.responseText;
        }
        if ((xhr.readyState == 4) && xhr.status == 404) {
            alert("Fichier introuvale");
        }
    }
    xhr.open('GET', 'delete.php?id=' + val, true);  // connexion
    xhr.send(null);
}
function insertData() {
    var nom = document.getElementById("nom").value;
    var email = document.getElementById("email").value;
    var contenu = document.getElementById("contenu").value;
    //alert(nom + email + contenu);

    // Code ajax pour l'insertion
    xhr = null;
    //Step 1 : On crée l'objet Ajax
    xhr = new XMLHttpRequest();
    //Step 2 : On teste l'état de l'objet Ajax
    xhr.onreadystatechange = function () {
        // alert(xhr.readyState);
        //alert("Etat de Ajax: " +xhr.readyState);*
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            document.getElementById("maDiv").innerHTML = xhr.responseText;
        }
        if ((xhr.readyState == 4) && xhr.status == 404) {
            alert("Fichier introuvale");
        }
    }
    //Step 3 : On défini la cible
    xhr.open('GET', 'insertion.php?nom=' + nom + '&email=' + email + '&contenu=' + contenu, true);  // connexion
    xhr.send(null);

}

function load_message() {
    // alert("Chargement do données en cours....")
    xhr = null;
    //Step 1 : On crée l'objet Ajax
    xhr = new XMLHttpRequest();
    //Step 2 : On teste l'état de l'objet Ajax
    xhr.onreadystatechange = function () {
        // alert(xhr.readyState);
        //alert("Etat de Ajax: " +xhr.readyState);*
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            document.getElementById("maDiv").innerHTML = xhr.responseText;
        }
        if ((xhr.readyState == 4) && xhr.status == 404) {
            alert("Fichier introuvale");
        }
    }
    //Step 3 : On défini la cible
    xhr.open('GET', 'data.php', true);  // connexion
    xhr.send(null);
}