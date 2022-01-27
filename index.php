<?php 
function saisie(){
    if (isset($_POST[’soumettre’])) {
    
        // Une ligne existe dans la variable $_POST
        // correspondant au bouton OK nommé « soumettre » :
        // le script est appelé sur la validation du formulaire.
        // => Traiter le formulaire...
        
        include("saisie.php");
        } 
        else {
        // Le script n’est pas appelé par le clic sur le
        // bouton OK. S’il n’y pas d’autre bouton "submit", le
        // script est donc appelé pour l’afchage initial.
        // => Initialiser le formulaire...
        echo "Lol";
    }
}

?>