
function load_message()
        {
            xhr = null;
            //Step 1 : On crée l'objet Ajax
            xhr = new XMLHttpRequest();

            //Step 2 : On teste l'état de l'objet Ajax
            xhr.onreadystatechange = function () {

                //alert("Etat de Ajax: " +xhr.readyState);*
                if ((xhr.readyState == 4) && (xhr.status == 200)) {
                    document.getElementById("messages").innerHTML = xhr.responseText;
                }
                if ((xhr.readyState == 4) && xhr.status == 404) {
                    alert("Fichier introuvale");
                }
            }
            //Step 3 : On défini la cible
            xhr.open('GET', 'page.php', true);  // connexion
            xhr.send(null);
        }
             //AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?./     //AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?./
        function insertData(){
          //
            var nom= document.getElementById("nom").value;
            var email= document.getElementById("email").value;
            var message= document.getElementById("message").value;
          //  alert(nom + " "+ email +" " + message);
         
        xhr = null;
        //Step 1 : On crée l'objet Ajax
        xhr = new XMLHttpRequest();

        //Step 2 : On teste l'état de l'objet Ajax
        xhr.onreadystatechange = function () {

            //alert("Etat de Ajax: " +xhr.readyState);*
            if ((xhr.readyState == 4) && (xhr.status == 200)) {
                document.getElementById("contenu_formulaire").innerHTML = xhr.responseText;
              
            }   
            if ((xhr.readyState == 4) && xhr.status == 404) {
                alert("Fichier introuvale");
            }
        }
        
        //Step 3 : On défini la cible
        xhr.open('GET','insertion.php?nom='+nom+'&email='+email+'&message='+message,true);  // connexion
   
        xhr.send(null);
        
        }  
        //AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?./     //AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?.///AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?./     //AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?./
        function deleteData(val){

           
          xhr = null;
          //Step 1 : On crée l'objet Ajax
          xhr = new XMLHttpRequest();
  
          //Step 2 : On teste l'état de l'objet Ajax
          xhr.onreadystatechange = function () {
  
              //alert("Etat de Ajax: " +xhr.readyState);*
              if ((xhr.readyState == 4) && (xhr.status == 200)) {
                  document.getElementById("messages").innerHTML = xhr.responseText;
                
              }   
              if ((xhr.readyState == 4) && xhr.status == 404) {
                  alert("Fichier introuvale");
              }
          }
          
          //Step 3 : On défini la cible
          xhr.open('GET','delete.php?id=' + val,true);  // connexion
     
          xhr.send(null);
          
          } 
          //AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?./     //AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?.///AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?./     //AZERTYUIOPQSDFGHJKLMFGHJKLMRTYUIOPDFGHJKLMDFGHJKLFGHJK
              //ZERTYUIODFGHJKLMFGHJKLMFGHJKLMBN?./
        //    function updat(){
        //     var nom=document.getElementById("id").value;
        //     var nom=document.getElementById("nom").value;
        //     var nom=document.getElementById("email").value;
        //     var nom=document.getElementById("message").value;
        //     xhr = null;
        //     //Step 1 : On crée l'objet Ajax
        //     xhr = new XMLHttpRequest();
        //     //Step 2 : On teste l'état de l'objet Ajax
        //     xhr.onreadystatechange = function () {
        //         // alert(xhr.readyState);
        //         //alert("Etat de Ajax: " +xhr.readyState);*
        //         if ((xhr.readyState == 4) && (xhr.status == 200)) {
        //             document.getElementById("messages").innerHTML = xhr.responseText;
        //         }
        //         if ((xhr.readyState == 4) && xhr.status == 404) {
        //             alert("Fichier introuvale");
        //         }
        //     }
        //     //Step 3 : On défini la cible
        //     xhr.open('GET', 'update.php?id='+id+'&nom='+ nom + '&email=' + email + '&message=' + message, true);  // connexion
        //     xhr.send(null);
        // }