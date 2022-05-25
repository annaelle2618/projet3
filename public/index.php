<?php
 
if (!isset($_SERVER['PATH_INFO'])) { //on verifie si la variable path info est vide
    $path=""; // past = rien 
}

if (isset($_SERVER['PATH_INFO'])) { 
    $path=$_SERVER['PATH_INFO']; //path info le chemin de l'URL
}
else {
    echo "erreur";
}

if ($path==''){
    echo "je suis dans la page d'acceuil";
    
}
if ($path=='/catalogue '){
    echo "je suis dans la page catalogue";

}
if ($path=='/produit'){
    include __DIR__.'/../src/controlleur/productcontroller.php';
    add_product();
}

if ($path=='/enregistrer_produit'){
    echo "envoie moi un produit dans un formulaire";
}


?>